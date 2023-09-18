<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    //
    public function index()
    {
        $viewData = [];
        $viewData['title']= 'Admin Page - Category - Milktea shop';
        $viewData['Category'] = Category::all();
        return view('admin.category.index')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            ]);
        $creationData= $request->only(['name', 'description']);
        Category::create($creationData);
        return redirect('/admin/category');
    }

    public function delete($category)
    {
        Category::destroy($category);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];
        $category = Category::findOrFail($id);
        $viewData['title']= 'Admin Page - Edit category ';
        $viewData["category"] = $category;
        return view('admin/category/edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
        "name" => "required|max:255",
        "description" => "required",
        ]);
        $category = Category::findOrFail($id);
        $category->setName($request->input('name'));
        $category->setDescription($request->input('description'));
        $category->save();
        return redirect('/admin/category');
    }
}
