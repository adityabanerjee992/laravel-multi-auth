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

Route::get('test-methods', function(){
	$email = 'aditya@gmail.com';
	$id = App\Parents::getIdFromEmail($email);
	echo "<pre>";
	print_r($id);
});

Route::get('/auth-check', function () {
    $auth = Auth::guard('parents');
    echo "<pre>";
    print_r($auth->check());
});

Route::get('/add-subjects', function() {
	$subjects = ['physics', 'maths', 'science', 'politics', 'engineering'];
	foreach($subjects as $subject) {
		App\Subject::create(['name' => $subject]);
		echo "done";
	}
	
});

Route::get('out', function(){
	Auth::logout();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/parent', 'ParentController@index')->name('home.parent');
Route::get('/student', 'ChildController@index')->name('home.student');
Route::get('/teacher', 'TeacherController@index')->name('home.teacher');
