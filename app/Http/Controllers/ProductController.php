<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::all();
        return[
            'success'=>true,
            'message'=>'all products',
            'data'=>$products,  
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $products = Product::create($request->all());
        return [
            'success'=>true,
            'message'=>'category added successfully ',
            'data'=>$products,
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return [
            'success'=>true,
            'message'=>'one added',
            'data'=>$product,
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return[
            'success'=>true,
            'message'=>'category updated successfully',
            'data'=>$product,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return[
            'success'=>true,
            'message'=>'category deleted successfully',
            'data'=>null,
        ];
    }
}
