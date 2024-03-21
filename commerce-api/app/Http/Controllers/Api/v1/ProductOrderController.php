<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\ProductOrder;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductOrder::select('id')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productOrder = new ProductOrder();
        $productOrder->product_id = $request->input('product_id');
        $productOrder->order_id = $request->input('order_id');
        $productOrder->save();
        return response()->json('ProductOrder created',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductOrder::select('id')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productOrder = ProductOrder::find($id);
        $productOrder->update($request->all());
        return response()->json('Updated',200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
