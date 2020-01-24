<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloWorldController extends Controller
{
    function showAboutUs() {
        return view('aboutUs');
    }
    function showContactUs() {
        return view('contactUs');//this is the view the router needs to show.
    }
    function showHome() {
        return view('home');
    }
}
