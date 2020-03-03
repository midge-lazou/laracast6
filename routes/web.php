<?php

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

Route::get('/', function () { return view('welcome'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/about', function (){
    return view('about');
});


//putting your name in the blade trough url
//Route::get('/', function () {
//    $name = request('name');
//
//    return view('test',[
//        'name' => request('name')
//    ]);
//});



//putting your url to blade ->made and moved to PostsController
//Route::get('/posts/{post}', function ($post){
//     $posts = [
//         'my-first-post'=> 'Hello this is my firts blogpost',
//         'my-second-post'=>'Now i get the hang of this bloggy thing',
//         'my-third-post'=>'i can do this all day'
//     ];
//     if (! array_key_exists($post, $posts)){
//         abort(404,'Sorry the post was not found');
//     }
//
//     return view('post',[
//         'post'=> $posts[$post]
//     ]);
//});


Route::get('/posts/{post}', 'PostsController@show');
