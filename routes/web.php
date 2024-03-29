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


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:administrator']], function () {

    Route::get('/', function () {

        return view('admin.index');
    });
    Route::get('/students/result/', 'StudentController@result')->name('student.result');

    Route::resource('users', 'UserController');
    Route::resource('students', 'StudentController');
    Route::resource('psikotest', 'PsikotestController');
});

Route::group(['prefix' => 'siswa', 'middleware' => ['auth', 'role:siswa']], function () {

    Route::get('/', function () {
        return view('siswa.index');
    })->name('siswas');
    Route::get('/students/result/{id}', 'StudentController@result_id')->name('student.result.id');
    Route::get('/students/view/{id}', 'StudentController@view')->name('student.view.id');
    Route::put('/students/update/{id}', 'StudentController@updatesis')->name('student.update.id');

    Route::resource('answer', 'AnswerController');
    Route::get('psikotest', 'PsikotestController@soal')->name('psikotest.soal');
});

Route::group(['prefix' => 'kepsek', 'middleware' => ['auth', 'role:kepsek']], function () {

    Route::get('/', function () {
        return view('kepsek.index');
    });
    Route::get('/students/all', 'StudentController@get_all')->name('student.get.all');
});
Route::post('/user/add/', 'UserController@created')->name('createda');


Route::get('/', function () {

    return view('welcome');
})->name('slash');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
