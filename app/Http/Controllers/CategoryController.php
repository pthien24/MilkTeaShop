<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
>>>>>>> 6c106f6d7bc73b163005cafb3b6cc7299d3ec430
    }
}
