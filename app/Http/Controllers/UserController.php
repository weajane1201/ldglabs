<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $username = "Wea";
        return view('home', ['username'=>$username, 'lastname'=>'Mahinay']);
    }

    public function showContact(){
        $contacts = ["Wea", "Joseph", "Elaine", "Christian", "Alvin"];
        return view('contact', ['contacts'=>$contacts]);
    }

    public function showAbout(){
        $contacts = ["Wea", "Joseph", "Elaine", "Christian", "Alvin"];
        return view('about-ldg');
    }

    public function showLdgcert(){
       return view('ldg-certifications');
    }

    public function showportal(){
        return view('portal');
    }

    public function showverifyDiamonds(){
        return view('verify-diamonds');
    }
}
