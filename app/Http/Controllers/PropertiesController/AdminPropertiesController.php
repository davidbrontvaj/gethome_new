<?php

namespace App\Http\Controllers\PropertiesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealProperty;

class AdminPropertiesController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('admin_auth');
    }

    public function showAddForm()
    {
    	return view('admin.properties.AddPropertyForm');
    }
    
    public function addNewProperty(Request $request)
    {
    	$property = new RealProperty;
		$property->address_street = $request->address_street;
		$property->price = $request->price;
		$property->save();
		return redirect('admin/properties/add-property');
    }
}

