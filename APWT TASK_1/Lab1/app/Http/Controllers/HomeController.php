<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('page.index.landingPage');
    }
    public function service(){
        return view ('product.service');
    }
    public function teams(){
        return view ('page.index.ourTeams');
    }
    
    public function about(){
        return view ('page.index.about');
    }

    public function contact(){
        return view ('page.index.contact');
    }
}
