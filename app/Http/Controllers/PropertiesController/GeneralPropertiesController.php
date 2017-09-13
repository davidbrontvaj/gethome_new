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
use App\Propertyphoto;

class GeneralPropertiesController extends Controller
{



    public function addNewPropertyShowform()
    {

        //loading ordered data from database to variables (arrays)
        $dispositions = RealDisposition::orderBy('order', 'asc')->get();
        $equipments = RealEquipment::orderBy('order', 'asc')->get();
        $types = RealType::orderBy('order', 'asc')->get();
        $conditions = RealCondition::orderBy('order', 'asc')->get();

        //pulling data to view
        return view('frontend.add-property',[
            'dispositions' => $dispositions,
            'equipments' => $equipments,
            'types' => $types,
            'conditions' => $conditions ]);
    }


    public function postNewProperty(Request $request)
    {
        $property = new RealProperty;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->disposition=$request->disposition;
        $property->price = $request->price;
        $property->deposit = $request->deposit;
        $property->area = $request->area;
        $property->address_street = $request->address_street;
        //V sucasnosti to bude mat default value
        $property->address_city = 1;
        //$property->address_city = $request->address_city;
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
        $property->save();
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            $photo=new Propertyphoto;
            $photo->testproperty_id=$property->id;
            $photo->filename = $filename;
            $photo->save();
        }
        return redirect('properties');
    }

    public function showAllProperties()
    {
        $properties=RealProperty::orderBy('id', 'desc')->get();
        $dispositions = RealDisposition::orderBy('order', 'asc')->get();
        $types = RealType::orderBy('order', 'asc')->get();
        return view('frontend.properties2',['properties' => $properties,
            'dispositions' => $dispositions,'types' => $types]);
    }


    public function showDetails($id_property,$url_property=NULL)
    {
        $properties = RealProperty::where('id',$id_property)->get();
        //iterovanie kolekcie s podmienkou:v prípade že sa momentálna urlčka nezhoduje s databázovou, nastaví sa databázova URL
        foreach($properties as $property)
        {
            if($property->url!=$url_property)
            {
                return redirect('properties/'.$id_property.'/'.$property->url);
            }
        }
        //ak je kolekcia neprazdna tak idecko nehnutelnosti existuje, v takom pripade nas hodi na tu stranku na ktoru ma, inak vráti sa zoznam všetkych nehnutelnosti
        if($properties->isNotEmpty())
        {
            return view('frontend.property',['properties' => $properties]);
        }
        else
        {
            return redirect('properties');
        }

    }
}
