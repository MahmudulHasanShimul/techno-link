<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnoLinkController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function about()
    {
        return view('website.about.about');
    }

    public function services()
    {
        return view('website.services.services');
    }

    public function package()
    {
        return view('website.package.package');
    }

    public function support()
    {
        return view('website.support.support');
    }

    public function contact()
    {
        return view('website.contact.contact');
    }
}
