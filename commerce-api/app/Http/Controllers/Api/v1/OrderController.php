<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::select('id','user_id','user_name','address','cardNumber','cardValidity','cardSecurityCode')->get();
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
        $order = new Order();
        $order->user_name = $request->input('user_name');
        $order->address = $request->input('address');
        $order->cardNumber = $request->input('cardNumber');
        $order->cardValidity = $request->input('cardValidity');
        $order->cardSecurityCode = $request->input('cardSecurityCode');
        $order->user_id = $request->input('user_id');
        $order->save();
        return response()->json(['id' => $order->id], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Order::select('id','user_id','user_name','address','cardNumber','cardValidity','cardSecurityCode')->find($id);
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
        $order = Order::find($id);
        $order->update($request->all());
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
