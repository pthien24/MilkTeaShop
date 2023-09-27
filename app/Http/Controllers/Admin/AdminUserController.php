<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title']= 'Admin Page - user - Milktea shop';
        $viewData['users'] = User::all();
        return view('admin.user.index')->with('viewData', $viewData);
    }
    public function delete($user)
    {
        User::destroy($user);
        return back();
    }
    public function editRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:admin,client',
        ]);
        $User = User::findOrFail($id);
        $User->role = $request->input('role');
        $User->save();
        return redirect()->back();
    }
}
