<?php

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
    return view('welcome');

    // return view('index' , ['name' => 'Juan c']);
});

// Route::get('/hellow', function(){

//     return response('<h1> Hellow world </h1>',200)
//     -> header('Content-type','text/plain');
// });

Route::get('/posts/{id}', function($id){

    ddd($id);
    return response('Post ' .$id)
    -> header('Content-type','text/plain');

})-> where('id', '[0-9]+');

Route:: get('/search', function(Request $request){

     
});
