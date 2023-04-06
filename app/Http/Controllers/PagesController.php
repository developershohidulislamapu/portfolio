<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Frontend Controller
    public function index(){
        return view('frontend.home');
    }

    // Backend Controller

    public function deshborad(){
        return view('backend.deshborad.deshborad');
    }
    public function logo(){
        return view('backend.logo.logo');
    }
    public function hero(){
        return view('backend.hero.hero');
    }
}
