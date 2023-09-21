<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Prepare data for the view
            $viewData = [
                'title' => "My profile",
                'subtitle' => "profile",
                'user' => $user,
            ];
            return view('user.index')->with("viewData", $viewData);
        } else {
            return redirect()->route('login');
        }
    }
}
