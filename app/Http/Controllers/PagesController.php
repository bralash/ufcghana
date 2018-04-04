<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function legality() {
        return view('legality');
    }

    public function signUp() {
        $providers = Provider::all();
        return view('register', compact('providers'));
    }
}
