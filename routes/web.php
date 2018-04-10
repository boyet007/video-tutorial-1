<?php

use App\Task;

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

Route::get('/tasks', function(){
	//$tasks = DB::table('tasks')->get();
	$tasks = Task::all();
	//return $tasks;

	return view ('tasks.index', compact('tasks'));
});

Route::get('/latest', function(){
	$tasks = DB::table('tasks')->latest()->get();

	return view ('welcome', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){

	//dd($id);
	//$task = DB::table('tasks')->find($id);

	$task = Task::find($id);

	//dd($task);

	return view ('tasks.show', compact('task'));
});



Route::get('about', function () {
    return view('about');
});


