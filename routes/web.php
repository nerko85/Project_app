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

// Route::get('/', function () {
//     $name = "Kewser Bosnjak";
//     return view('welcome', [
//         "name"=>"Sumeja Karalic",
//         "kcerka"=> $name
//     ]);
// });

// Route::get('/', function(){
//     return view('welcome')->withName("Nermin");
// });


// Route::get('/projects', function(){
//     $projects = [
//         "Beacon project",
//         "Reimagine website",
//         "Some new project",
//         "Learning backend for Imperea"
//     ];
//     return view('projects.index')->withProjects($projects);
// });

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{id}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{id}', 'ProjectsController@update');
// Route::delete('/projects/{id}', 'ProjectsController@destroy');
// Route::get('/projects/{id}', 'ProjectsController@show');

Route::get('/projects/api', 'ProjectsController@api');
Route::resource('projects','ProjectsController');

