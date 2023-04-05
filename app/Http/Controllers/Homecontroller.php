<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view("about");
    }
    public function platform(){
        return view("platform");
    }
    public function layout(){
        return view("layout");
    }
    public function faqs(){
        return view("FAQs");
    }
    public function types(){
        return view("account-type");
    }
    public function funding(){
        return view("funding-method");
    }
    public function withdrawal(){
        return view("withdrawal-method");
    }
    public function asset(){
        return view("trading-asset");
    }
    public function partners(){
        return view("partners");
    }
}
