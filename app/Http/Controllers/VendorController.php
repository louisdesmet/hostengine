<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\Http\Resources\Vendor as VendorResource;

class VendorController extends Controller
{
    public function index()
    {       
        return VendorResource::collection(Vendor::all());
    }
}
