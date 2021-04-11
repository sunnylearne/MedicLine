<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index(){
        
    }

    public function create(){
        return view('pages.contact');
    }

    public function store(ContactRequest $request){

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // return redirect('/');
        // Toastr::success('Your message was sent succefully','Success');

    }

    public function show(){
        
    }

    public function destroy(){
        
    }
}
