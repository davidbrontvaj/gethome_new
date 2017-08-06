<?php

namespace App\Http\Controllers\PropertiesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//load Models (classes)
use App\RealProperty;
use App\RealNoUserContact;
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
        $nouser=new RealNoUserContact;
        $nouser->name=$request->nousername;
        $nouser->surname=$request->nousersurname;
        $nouser->email=$request->nouseremail;
        $nouser->phone=$request->nouserphone;
        $nouser->save();
    	$property = new RealProperty;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->disposition=$request->disposition;
        $property->price = $request->price;
        $property->deposit = $request->deposit;
        $property->area = $request->area;
        $property->address_street = $request->address_street;
        $property->address_city = $request->address_city;
        $date = str_replace('.', '-', $request->available_from);
        $property->available_from = date('Y-m-d', strtotime($date));
        $property->published=1;
        $property->active=1;
        $property->condition=$request->condition;
        $property->type=$request->type;
        $property->equiped=$request->equiped;
        $transformedurl = str_replace(array("á", "é", "í", "ó","ú","ý","ô","ä"), array("a", "e", "i", "o","u","y","o","a"), $request->title);
        $transformedurl = $text = iconv('UTF-8', 'US-ASCII//TRANSLIT', $transformedurl);
        $property->url=str_replace(' ', '-',strtolower($transformedurl));
        $property->no_user_id=$nouser->id;
        $property->save();
		return redirect('admin/properties/add-property');
    }

public function showAllProperties()
    {
        $properties=RealProperty::orderBy('id', 'asc')->get();
        return view('admin.properties.AllProperties',[
            'properties' => $properties]);   
    }   
}

