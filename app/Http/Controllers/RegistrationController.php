<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function showRegistrations(){
        $allRegistration = Registration::all();
        return view('Registration.list')
                ->with('Registration', $allRegistration);
    }

    public function addRegistration(){
        $allRegistration = Registration::all();
        return view('Registration.regis-form') ->with ('Registration', new Registration);

        return redirect('/Registration.list');
    }

    public function showOneRegistrant($id){
        $registration = Registration::findOrFail($id);
        return view('Registration.show')
              ->with('Registration', $registration);
    }

    public function showContactUS(){
        return view('Registration.contactForm');
    }

    public function saveRegistration(Request $request){
        $newProperty = new Registration();
        $newProperty->fName = $request->input('fName');
        $newProperty->lName = $request->input('lName');
        $newProperty->email = $request->input('email');
        $newProperty->phoneNumber = $request->input('phoneNumber');
        $newProperty->address = $request->input('address');
        $newProperty->password = $request->input('password');
        $newProperty->registeringAs = $request->input('registeringAs');

        $newProperty->save();
        session()->flash('alert', $newProperty->Carname. ' Added successfully');
        return redirect('/Registration');
    }

    public function showEditPropertyPage($id)
    {
        $property = Registration::findOrFail($id);
         return view('Registration.addPropertyForm')
        ->with('property',$property)
        ->with('edit',true);
        // ->with('programmes', Programme::all());
        # code...
    }
}
