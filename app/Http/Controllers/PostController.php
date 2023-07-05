<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   //Display all existing posts


    public function index()
    {
        $posts = Post::all();
      //  retrieve all posts as a json response
        return response()->json($posts);
    }



    //Display a specific post


    public function show($id)
    {
        $post = Post::findOrFail($id);
        //  retrieve a single post
        return response()->json($post);
    }



   // Creating a new post.



    public function store(Request $request)
    {
         // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

         // Create a new post
        $post = Post::create($validatedData);

       // Return the created post as a JSON response
        return response()->json($post, 201);
    }





    //Update an existing post.



    public function update(Request $request, $id)
    {
    // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

    // Update the post with the validated data
        $post->update($validatedData);

    // Return the updated post as a JSON response
        return response()->json($post);
    }





    // Delete a post.


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
    // Soft delete the post
        $post->delete();

     // Return a JSON response indicating successful deletion
        return response()->json('Post deleted successfully');
    }



    public function search(Request $request)
{
    $query = $request->input('query');

    $posts = Post::where('title', 'like', "%$query%")
                 ->orWhere('content', 'like', "%$query%")
                 ->get();

    return response()->json($posts);
}

        public function attachCategories(Request $request, $postId)
        {
            $post = Post::findOrFail($postId);
            $categories = $request->input('categories');

            $post->categories()->attach($categories);

            return response()->json(['message' => 'Categories attached successfully']);
        }


        public function detachCategories(Request $request, $postId)
        {
            $post = Post::findOrFail($postId);
            $categories = $request->input('categories');

            $post->categories()->detach($categories);

            return response()->json(['message' => 'Categories detached successfully']);
        }



}
