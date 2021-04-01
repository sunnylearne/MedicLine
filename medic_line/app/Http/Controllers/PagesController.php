<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function staff()
    {
        return view('pages.staffs');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function sub()
    {
        return view('pages.subscriptions');
    }

    public function testimony()
    {
        return view('pages.testimonials');
    }

}
