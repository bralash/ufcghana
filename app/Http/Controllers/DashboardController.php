<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $words = explode(" ", Auth::user()->firstname . ' ' . Auth::user()->surname);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= $w[0];
        }
        return view('admin.index', compact('acronym'));
    }
}
