<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function showProperties(){
        $allProperties = property::all();
        return view('Property.propertyList')
                ->with('property', $allProperties);
    }

    public function addProperty(){
        $allRegistration = property::all();
        return view('Property.addPropertyForm') ->with ('property', new property);
    }

    public function showOneProperty(){
        //$property = property::findOrFail($id);
        $allProperties = property::all();
        return view('Property.propertyDetails')
              ->with('Property', $allProperties);
    }

    public function showApartmentsForSale(){
        return view('Property.apartmentForSale');
    }

    public function showLandsForSale(){
        return view('Property.landForSale');
    }

    public function saveProperty(Request $request){
        $newProperty = new property();
        $newProperty->propertyID = $request->input('propertyID');
        $newProperty->propertyName = $request->input('propertyName');
        $newProperty->propertyLocation = $request->input('propertyLocation');
        $newProperty->propertyType = $request->input('propertyType');
        $newProperty->propertyStatus = $request->input('propertyStatus');
        $newProperty->propertyPrice = $request->input('propertyPrice');
        $newProperty->propertyBedrooms = $request->input('propertyBedrooms');
        $newProperty->propertyBathrooms = $request->input('propertyBathrooms');
        $newProperty->propertyImage = $request->input('propertyImage');

        $newProperty->save();

        return redirect('/add');
    }

    public function showEditPropertyPage($id)
    {
        $property = Property::findOrFail($id);
         return view('Property.addPropertyForm')
        ->with('property',$property)
        ->with('edit',true);
        // ->with('programmes', Programme::all());
        # code...
    }
}
