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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-subjects', function() {
	$subjects = ['physics', 'maths', 'science', 'politics', 'engineering'];
	foreach($subjects as $subject) {
		App\Subject::create(['name' => $subject]);
		echo "done";
	}
	
});

