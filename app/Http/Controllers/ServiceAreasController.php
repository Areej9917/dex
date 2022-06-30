<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceArea;

class ServiceAreasController extends Controller
{
    public function index(){
        $serviceAreas = ServiceArea::all();
        return view('service_areas.index',compact('serviceAreas'));
    }

    public function create(){
        return view('service_areas.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        $serviceArea = new ServiceArea; 
        $serviceArea->name = $request->name;
        $serviceArea->save();
        return redirect()->route('service-areas.index');

    }

    public function edit($id){
        $serviceArea = ServiceArea::find($id); 
        return view('service_areas.edit',compact('serviceArea'));
    }


    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
        ]);
        $serviceArea = ServiceArea::find($id); 

        $serviceArea->name = $request->name;
        $serviceArea->update();
        return redirect()->route('service-areas.index');

    }
}
