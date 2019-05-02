<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\ProductKey;
use App\Http\Resources\ProductKey as ProductKeyResource;
use Illuminate\Support\Facades\DB;

class ProductKeyController extends Controller
{
    public function index()
    {
        return ProductKeyResource::collection(ProductKey::with('product', 'language')->get());
    }

    public function store(Request $request)
    {
        $keys = explode(';', $request->keys);
        foreach($keys as $key) {
            if(!empty($key)) {
                if(in_array($request->product, ["13", "14", "15"])) {
                    $new = new ProductKey;
                    $new->key = $key;
                    $new->users = $request->acronis_users;
                    $new->product()->associate($request->product);
                    $new->save();
                } else if(in_array($request->product, ["22", "23"])) {
                    $new = new ProductKey;
                    $new->key = $key;
                    $new->duration = $request->duration;
                    $new->users = $request->bullguard_users;
                    $new->product()->associate($request->product);
                    $new->save();
                } else {
                    $new = new ProductKey;
                    $new->key = $key;
                    $new->product()->associate($request->product);
                    $new->save();
                }
            }
        }
    }

    public function show(ProductKey $productKey)
    {
        return new ProductKeyResource($productKey->load('product', 'language'));
    }

    public function update(Request $request, ProductKey $productKey)
    {
        $productKey->key = $request->key;
        $productKey->product()->associate($request->product);
        $productKey->language()->associate($request->language);
        $productKey->save();
        return new ProductKeyResource($productKey);
    }

    public function destroy(ProductKey $productKey)
    {
        $productKey->delete();
    }

    public function panel()
    {
        $data = [];
        $keys = ProductKey::with('product')->get();
        foreach($keys as $key) {
            if($key->duration !== null && $key->users !== null) {
                $data[$key->product_id]['text'] = $key->product->name;
                $data[$key->product_id]['category'] = 3;
                (isset($data[$key->product_id]['group'][$key->duration][$key->users]['total'])) ? $data[$key->product_id]['group'][$key->duration][$key->users]['total']++ : $data[$key->product_id]['group'][$key->duration][$key->users]['total'] = 1;
                if(isset($key->user_id)) {
                    (isset($data[$key->product_id]['group'][$key->duration][$key->users]['set'])) ? $data[$key->product_id]['group'][$key->duration][$key->users]['set']++ : $data[$key->product_id]['group'][$key->duration][$key->users]['set'] = 1;
                } else {
                    (isset($data[$key->product_id]['group'][$key->duration][$key->users]['unset'])) ? $data[$key->product_id]['group'][$key->duration][$key->users]['unset']++ : $data[$key->product_id]['group'][$key->duration][$key->users]['unset'] = 1;
                }
            } else if ($key->users !== null) {
                $data[$key->product_id]['text'] = $key->product->name;
                $data[$key->product_id]['category'] = 2;
                (isset($data[$key->product_id]['group'][$key->users]['total'])) ? $data[$key->product_id]['group'][$key->users]['total']++ : $data[$key->product_id]['group'][$key->users]['total'] = 1;
                if(isset($key->user_id)) {
                    (isset($data[$key->product_id]['group'][$key->users]['set'])) ? $data[$key->product_id]['group'][$key->users]['set']++ : $data[$key->product_id]['group'][$key->users]['set'] = 1;
                } else {
                    (isset($data[$key->product_id]['group'][$key->users]['unset'])) ? $data[$key->product_id]['group'][$key->users]['unset']++ : $data[$key->product_id]['group'][$key->users]['unset'] = 1;
                }
            } else {
                $data[$key->product_id]['text'] = $key->product->name;
                $data[$key->product_id]['category'] = 1;
                (isset($data[$key->product_id]['total'])) ? $data[$key->product_id]['total']++ : $data[$key->product_id]['total'] = 1;
                if(isset($key->user_id)) {
                    (isset($data[$key->product_id]['set'])) ? $data[$key->product_id]['set']++ : $data[$key->product_id]['set'] = 1;
                } else {
                    (isset($data[$key->product_id]['unset'])) ? $data[$key->product_id]['unset']++ : $data[$key->product_id]['unset'] = 1;
                }
            }
        }
        return response()->json($data);
    }

    public function synchronize() {

        $acronisKeys = DB::connection('whmcs_cloudhighway')->table('nomeo_acronisserialkeys')->select('email', 'serialkey')
            ->leftJoin('nomeo_acronisassignedserialkeys', 'nomeo_acronisserialkeys.id', '=', 'nomeo_acronisassignedserialkeys.serialkeyid')
            ->leftJoin('tblhosting', 'nomeo_acronisassignedserialkeys.serviceid', '=', 'tblhosting.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('inuse', 1)->get();
        $bullguardAntivirusKeys = DB::connection('whmcs_cloudhighway')->table('nomeo_bullguardantivirusserialkeys')->select('email', 'serialkey')
            ->leftJoin('nomeo_bullguardantivirusassignedserialkeys', 'nomeo_bullguardantivirusserialkeys.id', '=', 'nomeo_bullguardantivirusassignedserialkeys.serialkeyid')
            ->leftJoin('tblhosting', 'nomeo_bullguardantivirusassignedserialkeys.serviceid', '=', 'tblhosting.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('inuse', 1)->get();
        $bullguardInternetKeys = DB::connection('whmcs_cloudhighway')->table('nomeo_bullguardinternetserialkeys')->select('email', 'serialkey')
            ->leftJoin('nomeo_bullguardinternetassignedserialkeys', 'nomeo_bullguardinternetserialkeys.id', '=', 'nomeo_bullguardinternetassignedserialkeys.serialkeyid')
            ->leftJoin('tblhosting', 'nomeo_bullguardinternetassignedserialkeys.serviceid', '=', 'tblhosting.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('inuse', 1)->get();
        $officeKeys = DB::connection('whmcs_cloudhighway')->table('nomeo_officeesdserialkeys')->select('email', 'serialkey')
            ->leftJoin('nomeo_officeesdassignedserialkeys', 'nomeo_officeesdserialkeys.id', '=', 'nomeo_officeesdassignedserialkeys.serialkeyid')
            ->leftJoin('tblhosting', 'nomeo_officeesdassignedserialkeys.serviceid', '=', 'tblhosting.id')
            ->leftJoin('tblclients', 'tblhosting.userid', '=', 'tblclients.id')
            ->where('inuse', 1)->get();

        $keys = $acronisKeys->merge($bullguardAntivirusKeys);
        $keys = $keys->merge($bullguardInternetKeys);
        $keys = $keys->merge($officeKeys);

        foreach($keys as $index => $key) {
            $user = User::where('email', $key->email)->first();

            if(!$key->email) {
                dd('yo');
            }
            if(!$user) {
                dd('yo');
            }
            $productKey = ProductKey::where('key', str_replace(' ', '', $key->serialkey))->first();
            if(!$productKey) {
                dd('yo');

            }
            $productKey->user_id = $user->id;
            $productKey->save();
        }
    }
}
