<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage() {
        return view('home');
    }
    public function aboutpage() {
        return view('about');
    }
    public function servicepage() {
        return view('services');
    }
    public function contactpage() {
        return view('contact');
    }
}
