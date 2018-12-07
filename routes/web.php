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

//Auth::routes();
/* CoreUI templates */
	
	//Login
	
	Route::get('', 'LoginController@form')->name('login.form');
	Route::post('loginattempt', 'LoginController@attempt')->name('login.attempt');
	Route::get('logout', 'LoginController@logout')->name('login.logout');
	Route::get('register', 'RegisterController@form')->name('register.form');
	Route::post('registerattempt', 'RegisterController@attempt')->name('register.attempt');
	Route::get('verify', 'VerifyController@form')->name('verify.form');
    Route::post('verifyattempt', 'VerifyController@attempt')->name('verify.attempt');
    Route::get('datapribadi', 'DataPribadiController@form')->name('datapribadi.form');
// 	Route::middleware('auth')->group(function() {

// 	
// 	Route::view('/dokumen-awal', 'menu.dokumenawal')->name('dokumen-awal');
// 	Route::view('/dokumen-penilaian', 'menu.dokumenpenilaian')->name('dokumen-penilaian');
	
// 	Route::view('/', 'panel.blank');
	
// 	// Section CoreUI elements
// 	Route::view('/sample/dashboard','samples.dashboard');
// 	Route::view('/sample/buttons','samples.buttons');
// 	Route::view('/sample/social','samples.social');
// 	Route::view('/sample/cards','samples.cards');
// 	Route::view('/sample/forms','samples.forms');
// 	Route::view('/sample/modals','samples.modals');
// 	Route::view('/sample/switches','samples.switches');
// 	Route::view('/sample/tables','samples.tables');
// 	Route::view('/sample/tabs','samples.tabs');
// 	Route::view('/sample/icons-font-awesome', 'samples.font-awesome-icons');
// 	Route::view('/sample/icons-simple-line', 'samples.simple-line-icons');
// 	Route::view('/sample/widgets','samples.widgets');
// 	Route::view('/sample/charts','samples.charts');
// });
// // Section Pages
// Route::view('/sample/error404','errors.404')->name('error404');
// Route::view('/sample/error500','errors.500')->name('error500');