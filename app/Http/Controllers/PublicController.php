<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PublicController extends Controller
{
    // home 
    public function welcome(){
        return view("welcome");
    }

    // bio 
    public function bio(){
        return view("bio");
    }

    // media 
    public function medias(){
        return view("medias");
    }

    // projects 
    public function projects(){
        return view("projects");
    }

    // teaching 
    public function teaching(){
        return view("teaching");
    }

    // contacts 
    public function contacts(){
        return view("contacts");
    }

    // multilingua 
    public function setLanguage($lang){
        // dd($lang);
        // session()->put('locale', $lang);
        App::setLocale($lang);
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
