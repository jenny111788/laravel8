<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about() {
        // return "hi";
        return view('pages.about');
    }
}
