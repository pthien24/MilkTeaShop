<?php

namespace App\Http\Controllers;

use App\Models\Product;

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

    public function menu()
    {
        $viewData = [];
        $viewData['title'] = "our Menu";
        $viewData['subtitle'] = "menu";
        $viewData["products"] = Product::all();

        return view('home.menu')->with('viewData', $viewData);
    }

    public function orders()
    {
        $viewdata = [];
        $viewdata['title'] = "Your Orders";
        $viewdata['subtitle'] = "orders";
        return view('home.menu')->with("viewdata", $viewdata);
    }

    public function login(){
        $viewdata = [];
        $viewdata['title'] = "Home Page - food Store";
        return view('home.login')->with("viewdata", $viewdata);
    }

    public function register(){
        $viewdata = [];
        $viewdata['title'] = "Home Page - food Store";
        return view('home.register')->with("viewdata", $viewdata);
    }
}
