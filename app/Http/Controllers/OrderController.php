<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function show($id){
        return order::find($id);
    }
    public function userid($userid){
        return order::all()->where('userid',$userid);
    }
    public function store(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'products' => 'required',
            'price' => 'required',
            'payment_id'=>'required',


        ]);


        return order::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'userid' => 'required',
            'price' => 'required',
            'payment_id'=>'required',
        ]);

        $order = order::find($id);
        $order->update($request->all());
        return $order;
    }

}
