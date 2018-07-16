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

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function (){
	Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});
/**
 * Route for testing
 **/
Route::get('/test', function () {
	return view('navbar');
})->name('test');
/*
 * Testing add:product Command in Route
 */
Route::get('/product',function () {
		$code = Artisan::call('add:product',[
			'name' => 'test',
			'desc' => 'just',
			'quantity' => 4
		]);
})->name('product');

Route::get('/get/{id}',function(App\Product $id){

	return $id->desc;

});	
