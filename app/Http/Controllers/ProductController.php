<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Resources\Product as ProductResource;

use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::with('brand', 'category', 'vendor', 'productOptions', 'productOptions.prices')->get());
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->category()->associate($request->category);
        $product->brand()->associate($request->brand);
        $product->save();
        return new ProductResource($product->with('category')->first());
    }

    public function show(Product $product)
    {
        return new ProductResource($product->load('brand', 'category'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->category()->associate($request->category);
        $product->brand()->associate($request->brand);
        $product->save();
        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }

    public function esd()
    {
        return ProductResource::collection(Product::findMany([1, 2, 3, 4, 5, 6, 13, 14, 15, 22, 23]));
    }

    public function officeTenantAvailability($tenant) {
        $client = new Client([
            'headers' => [
                'X-Login' => 'cloudhighway',
                'X-Passkey' => '5b54464ef8d35a99fc7c0e6d85a1c0df',
                'Accept' => 'application/json',
            ]
        ]);
        return $client->request('GET', 'https://services.nomeo.be/office/domain/available/' . $tenant . '.onmicrosoft.com')->getBody()->getContents();
    }

    public function findTenant($tenant) {
        $client = new Client([
            'headers' => [
                'X-Login' => 'cloudhighway',
                'X-Passkey' => '5b54464ef8d35a99fc7c0e6d85a1c0df',
                'Accept' => 'application/json',
            ]
        ]);
        //return $client->request('GET', 'https://services.nomeo.be/office/customer/tenantidfromdomain/production/' . $tenant . '.be')->getBody()->getContents();
        return $client->request('GET', 'https://services.nomeo.be/office/domain/iscsp/production/' . $tenant . '.onmicrosoft.com')->getBody()->getContents();
    }

}
