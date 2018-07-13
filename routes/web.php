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