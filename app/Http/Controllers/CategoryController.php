<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{


    // retrieve all existing categories


    public function index()
    {
        $categories = Category::all();
         //Display all categories as json response
        return response()->json($categories);
    }




   // retrieve a specific category


    public function show($id)
    {
        $category = Category::findOrFail($id);
      // retrieve a single category
        return response()->json($category);
    }





    // Create a new category.


    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        // Create a new category
        $category = Category::create($validatedData);

        // Return the created category as a JSON response
        return response()->json($category, 201);
    }


    //Update an existing category.


    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $category = Category::findOrFail($id);
        // Update the category with the validated data
        $category->update($validatedData);

        // Return the updated category as a JSON response
        return response()->json($category);
    }



    //Delete a category.
    

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Soft delete the category
        $category->delete();

        // Return a JSON response indicating successful deletion
        return response()->json('Category deleted successfully');
    }
}
