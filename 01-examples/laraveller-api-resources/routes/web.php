<?php

use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    $post = Post::all();
    $post = Post::with('user')->get();
    return PostResource::collection($post);
});

Route::get('/{id}', function ($id) {
    $post = Post::with('user')->findOrFail($id);
    return new PostResource($post);
});


Route::get('/user/{id}', function ($id) {
    $user = User::with('posts')->findOrFail($id);
    return new UserResource($user);
});
