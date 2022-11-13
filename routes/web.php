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


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:administrator']], function() {

    Route::get('/', function () {

        return view('admin.index');
    });
    Route::resource('users', 'UserController');
    Route::resource('students', 'StudentController');
    Route::resource('psikotest', 'PsikotestController');
});

Route::group(['prefix' => 'siswa', 'middleware' => ['auth', 'role:siswa']], function() {

    Route::get('/', function () {
        return view('siswa.index');
    });
    Route::resource('answer', 'AnswerController');
    Route::get('psikotest', 'PsikotestController@soal')->name('psikotest.soal');
});

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



