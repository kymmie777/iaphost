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
use App\student;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/register', [
    'as'   => 'student.register',
    'uses' => 'welcomeController@register'
]);

Route::get('fees', [
    'as'   => 'fees',
    'uses' => 'welcomeController@index'
]);

Route::get('search/index', [
    'as'   => 'search',
    'uses' => 'searchController@index'
]);

Route::resource('student','studentController');
Route::resource('fee','feesController');
Route::post('pay','feesController@pay'); 
Route::post('/search','feesController@getUsers'); 

Route::get('/', 'feesController@index'); // localhost:8000/
Route::get('/getUsers/{id}','feesController@getUsers');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
