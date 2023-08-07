<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Products::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['string'],
            'sku' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ]);

        if($request->hasFile('image')) {
            $request->file('image')->store('public/images/products');
            $request->image = $request->file('image')->hashName();
        }

        return Products::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Products::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        return Products::update($request->all(), $products);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Products::destroy($id);
    }
}
