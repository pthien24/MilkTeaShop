<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        "price" => "required|numeric|gt:0",
        'image' => 'image',
        ]);
        $product = Category::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
        if ($request->hasFile('image')) {
            $imageName = $product->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $product->setImage($imageName);
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }
}
