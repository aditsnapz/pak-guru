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

Auth::routes();
/* CoreUI templates */
	
	//Verify
	Route::get('/verify','VerifyController@verify')->name('verify.form');
	Route::post('/validateVerify','VerifyController@validateVerify')->name('validateverify.form');
	
	

	Route::middleware('auth')->group(function() {
	Route::view('/', 'menu.dashboard')->name('dashboard');
	Route::view('/data_pribadi','menu.data_pribadi')->name('data_pribadi');
	// Route::view('/dokumen_awal','menu.dokumen_awal')->name('dokumen_awal');
	Route::get('/dokumen_awal', 'CobaController@index')->name('dokumen_awal');
	Route::view('/dokumen_penilaian','menu.dokumen_penilaian')->name('dokumen_penilaian');

	Route::view('/admin', 'admin.dashboard');
	Route::view('/admin/guru', 'admin.list');
	Route::view('/admin/guru/{id}', 'admin.detail');
	Route::view('/admin/{id}', 'admin.profile');
	
	// Section CoreUI elements
	Route::view('/sample/dashboard','samples.dashboard');
	Route::view('/sample/buttons','samples.buttons');
	Route::view('/sample/social','samples.social');
	Route::view('/sample/cards','samples.cards');
	Route::view('/sample/forms','samples.forms');
	Route::view('/sample/modals','samples.modals');
	Route::view('/sample/switches','samples.switches');
	Route::view('/sample/tables','samples.tables');
	Route::view('/sample/tabs','samples.tabs');
	Route::view('/sample/icons-font-awesome', 'samples.font-awesome-icons');
	Route::view('/sample/icons-simple-line', 'samples.simple-line-icons');
	Route::view('/sample/widgets','samples.widgets');
	Route::view('/sample/charts','samples.charts');
});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');