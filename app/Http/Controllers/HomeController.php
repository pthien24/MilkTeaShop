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
        $viewData = [];
        $viewData['title'] = "Your Orders";
        $viewData['subtitle'] = "orders";
        return view('home.orders')->with("viewData", $viewData);
    }
    // public function profile()
    // {
    //     $viewData = [];
    //     $viewData['title'] = "My profile";
    //     $viewData['subtitle'] = "profile";
    //     return view('home.profile')->with("viewData", $viewData);
    // }
    // public function login()
    // {
    //     $viewData = [];
    //     $viewData['title'] = "Home Page - food Store";
    //     return view('home.login')->with("viewData", $viewData);
    // }

    // public function register()
    // {
    //     $viewData = [];
    //     $viewData['title'] = "Home Page - food Store";
    //     return view('home.register')->with("viewData", $viewData);
    // }
}
