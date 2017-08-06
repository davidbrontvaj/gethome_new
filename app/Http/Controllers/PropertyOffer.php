<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealProperty;

class PropertyOffer extends Controller
{
	public function showOffer()
    {
    	$properties = RealProperty::paginate(5);;
    	return view('frontend.properties',['properties' => $properties]);
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
