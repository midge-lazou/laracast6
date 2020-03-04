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

Route::get('/', 'PagesController@home');

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index'); // Selects all articles
Route::post('/articles', 'ArticlesController@store'); // Creates an article
Route::put('/articles/{article}', 'ArticlesController@update'); // Updates an article
Route::get('/articles/create', 'ArticlesController@create'); // Gets a view to create an article
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show'); // Selects 1 article
Route::get('/articles/{article}/edit', 'ArticlesController@edit'); // Gets a view to edit an article

// Ep 22 Restful Routing

// GET /articles | Select/Show all articles
// GET /articles/:id | Select/Show 1 article
// POST /articles | Insert/Create an article
// PUT /articles/:id | Update an article
// DELETE /articles/:id | Delete an article


// Example with videos

// GET /videos | Select/Show all videos
// GET /videos/create | Select fields to put in a form to create a video
// POST /videos | Insert/Create a video
// GET /videos/2 | Select/Show 1 video
// GET /videos/2/edit | Select data to show a form to edit the video
// PUT /videos/2 | Update a video
// DELETE /video/5 | Delete a video
