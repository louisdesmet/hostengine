<?php

namespace App\Http\Controllers;

use App\Domain;
use App\OrderDetail;
use Illuminate\Http\Request;

use App\Order;
use App\Http\Resources\Order as OrderResource;

use App\ProductKey;
use App\User;
use Carbon\Carbon;
use App\Mail\Reporting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Order::with('product', 'user', 'productKey')->get());
    }

    public function report(Request $request) {
        $filename = 'orders-' . Carbon::now()->format('d-m-Y') . '-' . str_random(5) . '.xlsx';
        Excel::store(new OrdersExport($request), 'public/'.$filename);
        $orders = Order::where('product_id', $request->product)->whereBetween('date', [$request->from, $request->to])->get();
        Mail::to($request->email)->send(new Reporting($orders, $filename));
    }

    public function excel(Request $request) {
        $excelOrders = [];
        $orders = Order::where('product_id', $request->product)->whereBetween('date', [$request->from, $request->to])->get();
        foreach($orders as $order) {
            array_push($excelOrders, ['product' => $order->product->name, 'client' => $order->user->name, 'key' => $order->productKey->key, 'date' => $order->date]);
        }
        return response()->json($excelOrders);
    }

    public function synchronize() {
        $data = [];

        $acronisOrders = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select( 'tblhosting.id', 'tblproducts.name', 'tblclients.email', 'tblhosting.userid', 'tblhosting.domainstatus', 'tblhosting.regdate', 'nomeo_acronisserialkeys.serialkey')
            ->leftJoin('nomeo_acronisassignedserialkeys', 'tblhosting.id', '=', 'nomeo_acronisassignedserialkeys.serviceid')
            ->leftJoin('nomeo_acronisserialkeys', 'nomeo_acronisassignedserialkeys.serialkeyid', '=', 'nomeo_acronisserialkeys.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('tblhosting.domainstatus', 'Active')
            ->where('nomeo_acronisserialkeys.serialkey', '!=', null)
            ->where(function($query) {
                $query->where('tblproducts.id', 38)
                    ->orWhere('tblproducts.id', 39)
                    ->orWhere('tblproducts.id', 40);
            })->get();

        $officeOrders = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select( 'tblhosting.id', 'tblproducts.name', 'tblclients.email', 'tblhosting.userid', 'tblhosting.domainstatus', 'tblhosting.regdate', 'nomeo_officeesdserialkeys.serialkey')
            ->leftJoin('nomeo_officeesdassignedserialkeys', 'tblhosting.id', '=', 'nomeo_officeesdassignedserialkeys.serviceid')
            ->leftJoin('nomeo_officeesdserialkeys', 'nomeo_officeesdassignedserialkeys.serialkeyid', '=', 'nomeo_officeesdserialkeys.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('tblhosting.domainstatus', 'Active')
            ->where('nomeo_officeesdserialkeys.serialkey', '!=', null)
            ->where(function($query) {
                $query->where('tblproducts.id', 61)
                    ->orWhere('tblproducts.id', 62)
                    ->orWhere('tblproducts.id', 57)
                    ->orWhere('tblproducts.id', 58)
                    ->orWhere('tblproducts.id', 52)
                    ->orWhere('tblproducts.id', 53);
            })->get();

        $bulguardAntivirusOrders = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select( 'tblhosting.id', 'tblproducts.name', 'tblclients.email', 'tblhosting.userid', 'tblhosting.domainstatus', 'tblhosting.regdate', 'nomeo_bullguardantivirusserialkeys.serialkey')
            ->leftJoin('nomeo_bullguardantivirusassignedserialkeys', 'tblhosting.id', '=', 'nomeo_bullguardantivirusassignedserialkeys.serviceid')
            ->leftJoin('nomeo_bullguardantivirusserialkeys', 'nomeo_bullguardantivirusassignedserialkeys.serialkeyid', '=', 'nomeo_bullguardantivirusserialkeys.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('tblhosting.domainstatus', 'Active')
            ->where('nomeo_bullguardantivirusserialkeys.serialkey', '!=', null)
            ->where('tblproducts.id', 36)
            ->get();

        $bulguardInternetOrders = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select( 'tblhosting.id', 'tblproducts.name', 'tblclients.email', 'tblhosting.userid', 'tblhosting.domainstatus', 'tblhosting.regdate', 'nomeo_bullguardinternetserialkeys.serialkey')
            ->leftJoin('nomeo_bullguardinternetassignedserialkeys', 'tblhosting.id', '=', 'nomeo_bullguardinternetassignedserialkeys.serviceid')
            ->leftJoin('nomeo_bullguardinternetserialkeys', 'nomeo_bullguardinternetassignedserialkeys.serialkeyid', '=', 'nomeo_bullguardinternetserialkeys.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('tblhosting.domainstatus', 'Active')
            ->where('nomeo_bullguardinternetserialkeys.serialkey', '!=', null)
            ->where('tblproducts.id', 37)
            ->get();

        $orders = $acronisOrders->merge($officeOrders);
        $orders = $orders->merge($bulguardAntivirusOrders);
        $orders = $orders->merge($bulguardInternetOrders);

        foreach($orders as $order) {
            $user = User::where('email', $order->email)->first();
            if(!$user) {
                dd($order->email);
            }
            $productKey = ProductKey::where('key', str_replace(' ', '', $order->serialkey))->first();
            if(!$productKey) {
                dd($order->serialkey);
            }
            switch($order->name) {
                case 'Office 365 Personal ESD': array_push($data, ['user_id' => $user->id, 'product_id' => 1, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Office 365 Home ESD': array_push($data, ['user_id' => $user->id, 'product_id' => 2, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Office 2019 Home &amp; Student': array_push($data, ['user_id' => $user->id, 'product_id' => 3, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Office 2019 Home &amp; Business': array_push($data, ['user_id' => $user->id, 'product_id' => 4, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Office 2016 - Home &amp; Student': array_push($data, ['user_id' => $user->id, 'product_id' => 5, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Office 2016 - Home &amp; Business': array_push($data, ['user_id' => $user->id, 'product_id' => 6, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Acronis True Image Subscription incl.250 GB Cloud Storage, 1 year': array_push($data, ['user_id' => $user->id, 'product_id' => 18, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Acronis True Image Premium Subscription incl. 1TB Cloud Storage, 1 year': array_push($data, ['user_id' => $user->id, 'product_id' => 19, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Acronis True Image 2018': array_push($data, ['user_id' => $user->id, 'product_id' => 20, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Bullguard Antivirus': array_push($data, ['user_id' => $user->id, 'product_id' => 27, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
                case 'Bullguard Internet Security': array_push($data, ['user_id' => $user->id, 'product_id' => 28, 'product_key_id' => $productKey->id, 'status' => $order->domainstatus, 'date' => $order->regdate]);
                    break;
            }
        }
        Order::insert($data);
    }


    public function synchronizeDomains() {
        $data = [];
        $domains = DB::connection('whmcs_cloudhighway')->table('tbldomains')
            ->leftJoin('tblclients', 'tbldomains.userid', '=', 'tblclients.id')
            ->get();

        foreach($domains as $domain) {

            $user = User::where('email', $domain->email)->first();

            array_push($data, ['user_id' => $user->id, 'domain' => $domain->domain]);

        }
        Domain::insert($data);
    }

    public function synchronizeOffice365() {
        $data = [];

        $offices = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select('tblhosting.id', 'domain', 'email', 'name', 'optionname', 'tblhostingconfigoptions.qty')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblhostingconfigoptions', 'tblhosting.id', '=', 'tblhostingconfigoptions.relid')
            ->leftJoin('tblproductconfigoptions', 'tblhostingconfigoptions.configid', '=', 'tblproductconfigoptions.id')
            ->whereIn('packageid', array(17,19,48))
            ->where('tblhostingconfigoptions.qty', '!=', 0)
            ->get();

        $user = null;
        $previous = null;

        foreach($offices as $office) {
            if($previous != $office->id) {
                $user = User::where('email', $office->email)->first();
                switch($office->name) {
                    case 'Managed Office 365': array_push($data, ['user_id' => $user->id, 'domain' => $office->domain, 'product_id' => 8]);
                        break;
                    case 'Office 365': array_push($data, ['user_id' => $user->id, 'domain' => $office->domain, 'product_id' => 7]);
                        break;
                    case 'Microsoft 365': array_push($data, ['user_id' => $user->id, 'domain' => $office->domain, 'product_id' => 9]);
                        break;
                }

            }
            $previous = $office->id;
        }
        Order::insert($data);
    }

    public function synchronizeOffice365Details() {
        $data = [];
        
        $offices = DB::connection('whmcs_cloudhighway')->table('tblhosting')->select('tblhosting.id', 'domain', 'email', 'name', 'optionname', 'tblhostingconfigoptions.qty')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->leftJoin('tblproducts', 'tblhosting.packageid', '=', 'tblproducts.id')
            ->leftJoin('tblhostingconfigoptions', 'tblhosting.id', '=', 'tblhostingconfigoptions.relid')
            ->leftJoin('tblproductconfigoptions', 'tblhostingconfigoptions.configid', '=', 'tblproductconfigoptions.id')
            ->whereIn('packageid', array(17,19,48))
            ->where('tblhostingconfigoptions.qty', '!=', 0)
            ->get();

        foreach($offices as $office) {
            $order = Order::where('domain', $office->domain)->first();
            array_push($data, ['order_id' => $order->id, 'name' => $office->optionname, 'amount' => $office->qty]);
        }
        OrderDetail::insert($data);
    }

}
