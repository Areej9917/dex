<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryStatus;
class DeliveryStatusesController extends Controller
{
    public function index(){
        $deliveryStatuses = DeliveryStatus::all();
        return view('delivery_statuses.index',compact('deliveryStatuses'));
    }

    public function create(){
        // $deliveryStatuses = DeliveryStatus::all();
        return view('delivery_statuses.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        $deliveryStatus = new DeliveryStatus; 
        $deliveryStatus->name = $request->name;
        $deliveryStatus->save();
        return redirect()->route('delivery-statuses.index');

    }

    public function edit($id){
        $deliveryStatus = DeliveryStatus::find($id);
        return view('delivery_statuses.edit',compact('deliveryStatus'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
        ]);

        $deliveryStatus = DeliveryStatus::find($id); 
        $deliveryStatus->name = $request->name;
        $deliveryStatus->update();
        return redirect()->route('delivery-statuses.index');

    }
}
