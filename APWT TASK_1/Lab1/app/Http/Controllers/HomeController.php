<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('page.index.landingPage');
    }
    public function service(){
        $data = array(

            
            "2"=>array(
                "name"=> "2 Event",
                "details"=> "This is the 2 event"
            ),
            "1"=>array(
                "name"=> "1 Event",
                "details"=> "This is the 1 event"
            ),
            );
        return view ('service', ['data' => $data]);
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
