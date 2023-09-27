<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categoryId = $request->input('category_id');
        $search = $request->input('search');
        $viewData = [];
        $products = Product::query();
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if ($search) {
            $products->where('name', 'like', '%' . $search . '%');
        }

        $viewData["products"] = $products->paginate(9);
        $viewData["category"] = Category::all();
        $viewData['title'] = "our Menu";
        $viewData['search'] = $search;
        $viewData['subtitle'] = "menu";
        return view('product.index')->with("viewData", $viewData);
    }

    public function index1()
    {
        $viewData = [];
        $viewData['title'] = "our Menu";
        $viewData['subtitle'] = "menu";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Milkteashop";
        $viewData["subtitle"] = $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
