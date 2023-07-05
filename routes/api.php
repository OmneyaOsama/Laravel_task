<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for Posts
Route::get('posts', [PostController::class, 'index']);  // Display all posts
Route::get('posts/{id}', [PostController::class, 'show']); //Display a single post
Route::post('posts', [PostController::class, 'store']);   // Create a new post
Route::put('posts/{id}', [PostController::class, 'update']);  // Update an existing post
Route::delete('posts/{id}', [PostController::class, 'destroy']);  // Delete a post
Route::get('/posts/search', [PostController::class,'search']);




Route::get('categories', [CategoryController::class, 'index']);       //Display all categories
Route::get('categories/{id}', [CategoryController::class, 'show']);   //Display a single category
Route::post('categories', [CategoryController::class, 'store']);      // Create a new category
Route::put('categories/{id}', [CategoryController::class, 'update']);   // Update an existing category
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);   // Delete a category
