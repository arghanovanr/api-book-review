<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
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

//CRUD Book
Route::get("Book/{id?}", [BookController::class, 'index']);             // Take all book data
Route::get("Book/Comment/{id}", [BookController::class, 'comment']);    // Take all comment from spesific book
Route::post("Book", [BookController::class, 'store']);                  // Store book data
Route::put("Book/{id}", [BookController::class, 'update']);             // Update book data
Route::delete("Book/{id}", [BookController::class, 'delete']);          // Delete book data

//CRUD Comment
Route::post("Comment", [CommentController::class, 'store']);            // Store comment data to spesific book
Route::put("Comment", [CommentController::class, 'update']);            // Update comment data to spesific book
Route::delete("Comment", [CommentController::class, 'delete']);         // Delete comment data to spesific book
