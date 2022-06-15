<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;

class OrdersController extends Controller
{

    public function index()
    {
        $Orders = Order::all();
        return view('admin.orders.index' , compact('Orders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function getorderDetails($id)
    {
        $order = Order::where('id' , $id)->first();
        return view('admin.orders.details' , compact('order'));
    }
}
