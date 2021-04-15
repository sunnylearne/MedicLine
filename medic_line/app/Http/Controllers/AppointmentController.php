<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAppointmentRequest;

class AppointmentController extends Controller
{
    public function create(){
        return view('pages.appointment');
    }

    public function index(){
        return view('admin.appointments.index')->with('appointments', Appointment::all());
    }

    public function store(CreateAppointmentRequest $request){

        $appointment = new Appointment;
        $appointment-> name = $request->name;
        $appointment-> email = $request->email;
        $appointment-> phone = $request->phone;
        $appointment-> date = $request->date;
        $appointment-> message = $request->message;
        $appointment-> save();

        Session::flash('success', 'You have succefully booked an appointment with us. Please wait for a reply through mail'); 

        return redirect()->route('home');
    }

    public function show(Appointment $appointment){
        return view('admin.appointments.show')->with('appointment', $appointment);
    }

    public function destroy(Appointment $appointment){
        $appointment->delete();
        Session::flash('success', 'You have succefully deleted an appointment');

        return redirect('/appointments');
    }
}
