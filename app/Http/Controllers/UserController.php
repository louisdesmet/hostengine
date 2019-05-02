<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', 150); //300 seconds = 5 minutes
use App\Contact;
use Illuminate\Http\Request;

use App\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Client;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(Request $request)
    {
    }

    public function show(User $user)
    {
        return new UserResource($user->load('brand', 'role', 'users', 'domains', 'orders', 'orders.product', 'orders.productKey', 'orders.user', 'orders.orderDetails'));
    }

    public function update(Request $request, User $user)
    {
        $client = new Client();
        foreach($request->users as $data) {
            $params = [
                'form_params' => [
                    'action' => 'updateclient',
                    'clientid' => Cache::get('user')->whmcs_id,
                    'email' => $data['email'],
                    'firstname' => $data['first_name'],
                    'lastname' => $data['last_name'],
                    'companyname' => $data['company_name'],
                    'city' => $data['city'],
                    'postcode' => $data['postal_code'],
                    'country' => $data['country'],
                    'phonenumber' => $data['phone_number'],
                    'username' => 'api',
                    'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                    'responsetype' =>  'json'
                ]
            ];
            if (isset($data['password'])) {
                $params['form_params']['password2'] = $data['password'];
            }
            $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php',
                $params
            );

            if(json_decode($res->getBody())->result === 'success') {
                $user->first_name = $data['first_name'];
                $user->last_name = $data['last_name'];
                $user->company_name = $data['company_name'];
                $user->city = $data['city'];
                $user->postal_code = $data['postal_code'];
                $user->country = $data['country'];
                $user->phone_number = $data['phone_number'];
                $user->email = $data['email'];
                if (isset($data['password'])) {
                    $user->password = bcrypt($data['password']);
                }
                $user->save();
            }
        }
    }

    public function destroy(User $user)
    {
        
    }

    // ------------------------------------------------------------------ SPECIFIC ------------------------------------------------------------------

    public function domains(User $user)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetClientsDomains',
                'clientid' => Cache::get('user')->whmcs_id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return $res;
    }

    public function products(User $user)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetClientsProducts',
                'clientid' => Cache::get('user')->whmcs_id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return $res;
    }

    public function orders(User $user)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetOrders',
                'clientid' => Cache::get('user')->whmcs_id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return $res;
    }

    public function invoices(User $user)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetInvoices',
                'clientid' => Cache::get('user')->whmcs_id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return $res;
    }

    public function contacts(User $user)
    {
        $client = new Client();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetContacts',
                'clientid' => Cache::get('user')->whmcs_id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return $res;
    }

    // ------------------------------------------------------------------ SYNCS ------------------------------------------------------------------

    public function synchronize() {
        $whmcsUsers = DB::connection('whmcs_cloudhighway')->table('tblclients')->get();
        $data = array();
        //$password = Hash::make('ppppp');
        foreach($whmcsUsers as $whmcsUser) {
            array_push($data, array(
                'brand_id' => 1,
                'name' => $whmcsUser->firstname . ' ' . $whmcsUser->lastname,
                'last_name' => $whmcsUser->lastname,
                'first_name' => $whmcsUser->firstname,
                'company_name' => $whmcsUser->companyname,
                'city' => $whmcsUser->city,
                'postal_code' => $whmcsUser->postcode,
                'country' => $whmcsUser->country,
                'phone_number' => $whmcsUser->phonenumber,
                'email' => $whmcsUser->email,
                'password' => $whmcsUser->password
            ));
        }
        User::insert($data);
    }

    public function synchronize2() {
        $whmcsUsers = DB::connection('whmcs_cloudhighway')->table('tblclients')
            ->select('tblclients.id', 'tblclients.firstname', 'tblclients.lastname', 'tblclients.email', 'fieldid', 'relid', 'value', 'clients.email AS subemail')
            ->leftJoin('tblcustomfieldsvalues', 'tblclients.id', '=', 'tblcustomfieldsvalues.value')
            ->leftJoin('tblclients AS clients', 'tblcustomfieldsvalues.relid', '=', 'clients.id')
            ->where('fieldid', 4)
            ->whereRaw('tblclients.id != tblcustomfieldsvalues.relid')
            ->get();

        foreach($whmcsUsers as $index => $whmcsUser) {
            $reseller = User::where('email', $whmcsUser->email)->first();
            $user = User::where('email', $whmcsUser->subemail)->first();

            if(!$user) {
                dd($whmcsUser->subemail);
            }
            $user->reseller()->associate($reseller->id);
            $user->save();
        }
    }

    public function synchronize3() {
        $whmcsUsers = DB::connection('whmcs_cloudhighway')->table('tblcontacts')->leftJoin('tblclients', 'tblcontacts.userid', '=', 'tblclients.id')->select('tblclients.email AS useremail', 'tblcontacts.firstname', 'tblcontacts.lastname', 'tblcontacts.companyname', 'tblcontacts.email', 'tblcontacts.subaccount', 'tblcontacts.city', 'tblcontacts.postcode', 'tblcontacts.country', 'tblcontacts.phonenumber', 'tblcontacts.password')->get();
        $users = [];
        $contacts = [];
        foreach($whmcsUsers as $whmcsUser) {
            if($whmcsUser->subaccount == 1) {
                if(!User::where('email', $whmcsUser->email)->get()) {
                    array_push($users, array(
                        'brand_id' => 1,
                        'name' => $whmcsUser->firstname . ' ' . $whmcsUser->lastname,
                        'last_name' => $whmcsUser->lastname,
                        'first_name' => $whmcsUser->firstname,
                        'company_name' => $whmcsUser->companyname,
                        'city' => $whmcsUser->city,
                        'postal_code' => $whmcsUser->postcode,
                        'country' => $whmcsUser->country,
                        'phone_number' => $whmcsUser->phonenumber,
                        'email' => $whmcsUser->email,
                        'password' => $whmcsUser->password
                    ));
                }
            }

            array_push($contacts, array(
                'name' => $whmcsUser->firstname . ' ' . $whmcsUser->lastname,
                'last_name' => $whmcsUser->lastname,
                'first_name' => $whmcsUser->firstname,
                'company_name' => $whmcsUser->companyname,
                'city' => $whmcsUser->city,
                'postal_code' => $whmcsUser->postcode,
                'country' => $whmcsUser->country,
                'phone_number' => $whmcsUser->phonenumber,
                'email' => $whmcsUser->email,

            ));
        }
        User::insert($users);
        foreach (array_chunk($contacts,1000) as $t) {
            Contact::insert($t);
        }
    }


}
