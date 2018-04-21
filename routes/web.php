<?php
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

Route::get('/', function () {
    return view('home-1');
});
Route::get('/index', function () {
    return view('home-1');

});
/*!!!!!!!!!!!!NEED TO DELETE FOR LOGIN WORK*/
Route::get('/home', function () {
    return view('home-1');
});

Route::get('/home-1', function () {
    return view('home-1');
});
Route::get('/shop', function () {
    return view('shop');
});
    Route::get('/regulations', function () {
        return view('regulations');

});
Route::get('/agreement', function () {
    return view('agreement');
});
Route::get('/about', function () {
        return view('about');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('shop1/armrests', 'armrestshop@carsnamelist');

Route::get('/shop1/armrests/all/{id}', 'armrestshop@showarmrest');

Route::get('/shop1/armrests/model/{id}', 'armrestshop@showmodels');

Route::get('/contacts', 'armrestshop@contacts');
Route::post('/contacts', 'armrestshop@validaterequest');

Route::post('/contact-3', 'armrestshop@validaterequest3');

Route::get('/contact-3', 'armrestshop@contacts3');
Route::get('/sitemap.xml', 'armrestshop@sitemap');

/*Auth::routes();*/

/*Route::get('/home', 'HomeController@index')->name('home');*/
