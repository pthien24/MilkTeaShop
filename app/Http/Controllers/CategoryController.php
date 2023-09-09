<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Import the Product model

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $query = $request->get('q');
        $viewData["search"] = $query;
        $viewData["products"] = Category::query()
            ->where('name', 'like', '%' . $query . '%')
            ->paginate();
        // $viewData["products"] = Product::paginate(8);
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Category::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Online Store";
        $viewData["subtitle"] = $product->getName() . " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
