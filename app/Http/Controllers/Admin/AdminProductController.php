<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    //
    public function index()
    {
        $viewData = [];
        $viewData['title']= 'Admin Page - Products - Online Store';
        $viewData['products'] = Product::all();
        $viewData['category'] = Category::all();
        return view('admin.product.index')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image"
            ]);
        $creationData= $request->only(['name', 'description','price','category_id']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $creationData['image'] = $imageName;
        }
        Product::create($creationData);
        return back();
    }

    public function delete($product)
    {
        Product::destroy($product);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['category'] = Category::all();
        $viewData['title']= 'Admin Page - Edit Products - Online Store';
        $viewData["product"] = $product;
        return view('admin.product.edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
        "name" => "required|max:255",
        "description" => "required",
        "price" => "required|numeric|gt:0",
        'image' => 'image',
        ]);
        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
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
