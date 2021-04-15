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
        dd('request->date');
    }

    public function show(Appointment $appointment){
        return view('admin.appointments.show')->with('appointment', $appointment);
    }

    public function destroy(){
        
    }
}
