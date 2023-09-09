<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function index()
    {
        $viewdata = [];
        $viewdata['title'] = "Home Page - food Store";
        return view('home.index')->with("viewdata", $viewdata);
    }
    public function about()
    {
        $viewdata = [];
        $viewdata['title'] = "about us";
        $viewdata['subtitle'] = "about";
        return view('home.about')->with("viewdata", $viewdata);
    }
    public function contact()
    {
        $viewdata = [];
        $viewdata['title'] = "contact us";
        $viewdata['subtitle'] = "contact";
        return view('home.contact')->with("viewdata", $viewdata);
    }
}
