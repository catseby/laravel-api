<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;



class CustomerController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Customer::all();

        return $results;
    }

    public function index_orders($id)
    {
        $orders = Order::where('customer_id', $id)->get();

        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::where('customer_id',$id)->get();

        return $customer;
    }

    public function show_orders(string $id, string $oid)
    {
        $orders = Order::where('customer_id',$id);
        $order = $orders->where('order_id',$oid)->get();

        return $order;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
