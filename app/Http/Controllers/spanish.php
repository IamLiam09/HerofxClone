<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spanish extends Controller
{
    public function login(){
        return view("spanish-login");
    }
    public function register(){
        return view("spanish-register");
    }
}
