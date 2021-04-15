<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use App\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard')
        ->with('contacts_count', Contact::all()->count())
        ->with('users_count', User::all()->count())
        ->with('appointments_count', Appointment::all()->count());
    }
}
