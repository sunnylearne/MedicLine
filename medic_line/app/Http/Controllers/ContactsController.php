<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index(){
        return view('admin.contacts.index')->with('contacts', Contact::all());  
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

    public function show(Contact $contact){
        return view('admin.contacts.show')->with('contact', $contact);
    }

    public function destroy(Contact $contact){
        $contact->delete();
        session()->flash('success', 'Message deleted successfully...');
        return redirect('/contacts');
    }
}
