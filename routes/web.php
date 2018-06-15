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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
 
    return view('welcome');
})->middleware('guest');


Route::get('/', function () {
 
    return view('home');
})->middleware('auth');


Auth::routes();

//Route::get('/mylog','MyLogController@index');
Route::post('/mylog','MyLogController@authenticate')->name('mylog');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/compte','CompteController@index');
Route::get('/password','PasswordController@index');
Route::post('/password','PasswordController@changePassword')->name('changePassword');
Route::get('/login2', 'Login2Controller@index')->name('login2');



Route::get('/carte', 'CarteConroller@index')->name('carte');
Route::get('/consomation', 'ConsomationController@index');
Route::get('/chargement', 'ChargementController@index');
Route::get('/notification', 'NotificationController@index')->name('notification');

Route::get('/nsms', 'NSmsController@index')->name('notificationSms');
Route::get('/nemail', 'NEmailController@index')->name('notificationEmail');
/*
Route::get('/changepassword','PswdController@showChangePasswordForm');
Route::post('/changepassword','PswdController@changePassword')->name('changePassword');
*/




/*
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}','TasksController@show');
*/
