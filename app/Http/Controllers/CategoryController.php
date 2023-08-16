<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.show', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        $category = Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('dashboard.category')->with('success', 'categorycreated successfully.');
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except('_token', '_method');


        $category = Category::findOrFail($id);
        $category->update($data);

        return redirect()->route('dashboard.category')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $category = Category::findOrFail($id);

        // //if ($category.)
        // //$category->delete();

        // return redirect()->route('dashboard.category')->with('success', 'Category status has been changed successfully.');

        $category = Category::findOrFail($id);

        // Toggle the product's status between activate (1) and deactivate (0)
        $category->status = !$category->status;
        $category->save();

        return redirect()->route('dashboard.category')->with('success', 'Category status has been changed successfully.');
    }



    public function GetCategories()
    {
        $categories = Category::all();

        return response()->json($categories);
    }
}
