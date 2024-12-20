<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('guim-site.pages.home');
    }

    public function about(){

        return view('guim-site.pages.about');
    }

    public function service(){

        return view('guim-site.pages.service');
    }

    public function ressource(){

        return view('guim-site.pages.ressource');
    }

    public function contact(){

        return view('guim-site.pages.contact');
    }
}
