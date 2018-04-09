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


//Route::get('/', function () {
///    return view('welcome', [
//    	'name' => 'Laravel',
//    	'age' => 3
//    ]);
//});

//Route::get('/', function(){
//	return view('welcome') -> with('name', 'World');
//});
//Route::get('/', function(){

//$name = 'Jeffrey';
//$age = 30;
//	return view('welcome', compact('name', 'age'));
//});

//Route::get('/', function(){
//	$tasks = [
//		'Go to store',
//		'Finish my screen', 
//		'Clean the house'
//	];
///
//	return view ('welcome', compact('tasks'));
//});

Route::get('/', function(){
	$tasks = DB::table('tasks')->get();
	return $tasks;

	//return view ('welcome', compact('tasks'));
});

Route::get('about', function () {
    return view('about');
});


