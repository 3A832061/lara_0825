<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    /*Post::create([
        'title' => 'test title',
        'content' => 'test content',
    ]);*/

    /*$post = new Post();
    $post->title = 'test title';
    $post->content = 'test content';
    $post->save();*/

    /*$posts = Post::all();
    dd($posts);*/

    /*$post = Post::find(1);
    dd($post);*/

    /*$post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);*/

    /*$post = Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();*/

    /*$post = Post::find(1);
    $post->delete();*/

    //Post::destroy(2);

    //Post::destroy(3, 5, 7);

    /*$allPosts = Post::all();
    dd($allPosts);*/

    /*$featuredPosts = Post::where('is_feature', 1)->get();
    dd($featuredPosts);*/

    $fourthPost = Post::find(4);
    dd($fourthPost);

    return view('welcome');
});

Route::get('posts', [\App\Http\Controllers\PostsController::class,'index'])->name('posts.index');
Route::get('post', [\App\Http\Controllers\PostsController::class,'show'])->name('posts.show');
Route::get('contact', [\App\Http\Controllers\PostsController::class,'contact'])->name('posts.contact');
Route::get('about', [\App\Http\Controllers\PostsController::class,'about'])->name('posts.about');
