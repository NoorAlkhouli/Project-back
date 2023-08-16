<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.show', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            // 'category_id' => 'required',
            'is_available' => 'nullable|boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('_token');




        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/product_images');
            $data['image'] = str_replace('public/', '', $imagePath);
        }

        // if ($request->hasFile('image')) {

        //     $imagePath = $request->file('image')->store('product_images');


            // $data['image'] = 'product_images/' . str_replace('public/', '', $imagePath);
            // $data['image'] = '' . $imagePath;

            // $data['image'] = str_replace('public/', '', $imagePath);
        // }

        Product::create($data);

        return redirect()->route('dashboard.products')->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $product = Product::findOrFail($id);

        // Find the product along with its associated category data
        $product = Product::with('category')->findOrFail($id);

        // Fetch all categories to populate the dropdown in the form
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            // 'category_id' => 'required',
            'is_available' => 'nullable|boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('_token', '_method');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/product_images');
            $data['image'] = str_replace('public/', '', $imagePath);
        }

        $product = Product::findOrFail($id);
        $product->update($data);

        return redirect()->route('dashboard.products')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('dashboard.products')->with('success', 'Product deleted successfully.');
    }


    //Functions for APIs :

    public function GetProducts()
    {
        $products = Product::all();

        return response()->json($products);
    }




    public function GetCategory1()
    {


        $category_id = 1; // Assuming you want products with category_id = 1

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }

    public function GetCategory2()
    {

        $category_id = 2; // Assuming you want products with category_id =2

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }

    public function GetCategory3()
    {
        $category_id = 3; // Assuming you want products with category_id = 3

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }



    public function GetCategory4()
    {

        $category_id = 4; // Assuming you want products with category_id = 4

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }


    public function GetCategory5()
    {
        $category_id = 5; // Assuming you want products with category_id = 5

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }



    public function GetCategory6()
    {

        $category_id = 6; // Assuming you want products with category_id = 6

        $products = Product::where('category_id', $category_id)->get();

        return response()->json($products);
    }



    public function showProductAPI($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product);
    }
}
