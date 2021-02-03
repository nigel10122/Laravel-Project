<?php

use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','iniciocontroller@index');
Route::resource('inicio','iniciocontroller');
Route::resource('nosotros','nosotroscontroller');
Route::resource('equipos','equiposcontroller');
Route::resource('contacto','contactocontroller');
Route::resource('iniciodesession','iniciodesessioncontroller');
//Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/register', 'RegistrationController@index');
Route::post('/insertevents','eventscontroller@store');
Route::get('/insertevents','eventscontroller@store');

Route::post('/updateevents','eventscontroller@update');
Route::get('/updateevents','eventscontroller@update');
Route::post('/deleteevents','eventscontroller@delete');
Route::get('/deleteevents','eventscontroller@delete');
Route::resource('Events','eventscontoller');

Route::post('/insertdiscussions','discussionscontroller@store');
Route::get('/insertdiscussions','discussionscontroller@store');

Route::post('/updatediscussions','discussionscontroller@update');
Route::get('/updatediscussions','discussionscontroller@update');
Route::post('/deletediscussions','discussionscontroller@delete');
Route::get('/deletediscussions','discussionscontroller@delete');
Route::resource('discussions','discussionscontoller');

Route::post('/insertteams','teamscontroller@store');
Route::get('/insertteams','teamscontroller@store');

Route::post('/updateteams','teamscontroller@update');
Route::get('/updateteams','teamscontroller@update');
Route::post('/deleteteams','teamscontroller@delete');
Route::get('/deleteteams','teamscontroller@delete');
Route::resource('teams','teamscontoller');

Route::post('/subscribe','subscribecontroller@store');
Route::get('/subscribe','subscribecontroller@index');
Route::post('/contactme','contactmecontroller@store');
Route::get('/contactme','contactmecontroller@index');
Route::get('/viewevents','viewtables@viewevents');
Route::get('/viewdiscussions','viewtables@viewdiscussions');
Route::get('/viewteams','viewtables@viewteams');




Route::post('/login', 'logincontroller@login');
Route::get('/login', 'logincontroller@index');
Route::resource('admin','admincontroller');
Route::resource('home','usercontroller');
//Route::get('/logout', function () {
  //  return redirect('iniciodesession');
//});

/*Route::resource('userevents','usereventscontroller');
Route::resource('userdiscussions','userdiscusiionscontroller');
Route::resource('userteams','userteamscontroller');
Route::resource('admin','admincontroller');
Route::resource('adminevents','admineventscontroller');
Route::resource('admindiscussions','admindiscussionscontroller');
Route::resource('adminteams','adminteamscontroller');*/



