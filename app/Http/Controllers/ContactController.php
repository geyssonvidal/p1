<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
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

            $ruta_imagen = $imagen->store('public/img/imgcontacts');
            

        }
        $contact = new Contact;
        $contact->name = $request->input('contactName');
        $contact->lastname = $request->input('contactLasName');
        $contact->email = $request->input('contactEmail');
        $contact->phone = $request->input('contactPhone');
        $contact->coment = $request->input('contactComent');
        $contact->image = $ruta_imagen;
        
        $contact->save();
        return redirect("contact");
    }
}
