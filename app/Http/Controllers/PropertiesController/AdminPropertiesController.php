<?php

namespace App\Http\Controllers\PropertiesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//load Models (classes)
use App\RealProperty;
use App\RealDisposition;
use App\RealEquipment;
use App\RealType;
use App\RealCondition;

class AdminPropertiesController extends Controller 
{
    //
    public function __construct()
    {
    	$this->middleware('admin_auth');
    }

    public function showAddForm()
    {
        //loading ordered data from database to variables (arrays)
        $dispositions = RealDisposition::orderBy('order', 'asc')->get();
        $equipments = RealEquipment::orderBy('order', 'asc')->get();
        $types = RealType::orderBy('order', 'asc')->get();
        $conditions = RealCondition::orderBy('order', 'asc')->get();

        //pulling data to view
    	return view('admin.properties.AddPropertyForm',[
            'dispositions' => $dispositions,
            'equipments' => $equipments,
            'types' => $types,
            'conditions' => $conditions ]);
    }
    
    public function addNewProperty(Request $request)
    {
    	$property = new RealProperty;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->disposition=$request->disposition;
        $property->price = $request->price;
        $property->deposit = $request->deposit;
        $property->area = $request->area;
        $property->address_street = $request->address_street;
        $property->address_city = $request->address_city;
        $property->available_from = $request->available_from;
        $property->published=1;
        $property->active=1;
        $property->condition=$request->condition;
        $property->type=$request->type;
        $property->equiped=$request->equiped;
        $property->save();
		return redirect('admin/properties/add-property');
    }
}

