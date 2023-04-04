<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;



class ContactController extends Controller
{
    public function contact(Request $request){
        $img = Contact::All();
        return view("pages.contact",compact('img'));
    }
    public function contactInsert(Request $request){
        if($request->hasFile('contactImage')) {
            
            $imagen = $request->file('contactImage');


            $fileName = $imagen->getClientOriginalName();
            
            $imagen->move(public_path('assets/images/imgcontacts'), $fileName);

            $image_url = asset('/assets/images/imgcontacts/' . $fileName);

        }
        $contact = new Contact;
        $contact->name = $request->input('contactName');
        $contact->lastname = $request->input('contactLasName');
        $contact->email = $request->input('contactEmail');
        $contact->phone = $request->input('contactPhone');
        $contact->coment = $request->input('contactComent');
        $contact->image = $image_url;
        
        $contact->save();
        return redirect("contact");
    }
}
