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

    // rotta parametrica dettaglio video
    public function detailPhoto($title){
        $photos = [
            [
            "title" => "photo1",
            "author" => "elena",
            "link" => "/media/img/DSC_2523.JPG"
            ],

            [
            "title" => "photo2",
            "author" => "elena",
            "link" => "/media/img/DSC_2575.JPG"
            ],

            [
            "title" => "photo3",
            "author" => "elena",
            "link" => "/media/img/DSC_2582.JPG"
            ],

            [
            "title" => "photo4",
            "author" => "elena",
            "link" => "/media/img/DSC_2596.JPG"
            ],
        ];

        foreach($photos as $photo){
            if ($photo['title'] == $title){
                return view("detailPhoto", ['photo' => $photo]);
            } 
        }

    }
}
