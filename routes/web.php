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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/set/theme', 'HomeController@setTheme');
//Customers
Route::get('/customer/index', 'CustomerController@index')->name('customer-index');
Route::get('/add/edit/customer', 'CustomerController@create');


//Schemes
Route::get('/chit/scheme/index', 'SchemeController@schemeIndex')->name('scheme-index');
Route::post('/chit/schem/store', 'SchemeController@chitSchemeInsertAndUpdate')->name('chit-scheme-store');
// chit groups
Route::get('/chit/group/index', 'SchemeController@chitGroupIndex')->name('chit-group-index');
Route::post('/chit/group/store', 'SchemeController@chitGroupInsertAndUpdate')->name('chit-group-store');
Route::get('/chit/mapping', 'SchemeController@chitMapping');
Route::get('/map/customers/to/group/{chit_group_id}', 'SchemeController@mapCustomersToGroup');
Route::post('/map/members/to/chit', 'SchemeController@mapMembersToChit')->name('map-chit-members');
//settings
//Users
Route::get('/user/index', 'UserController@index')->name('user-index');
Route::post('/user/store', 'UserController@userInsertAndUpdate')->name('user-store');

//branch
Route::get('/branch/index', 'Settings\SettingsController@branchIndex')->name('branch-index');
Route::post('/branch/store', 'Settings\SettingsController@branchInsertAndUpdate')->name('branch-store');
//bank
Route::get('/bank/index', 'Settings\SettingsController@Bankindex')->name('bank-index');

//MY REGISTOR
Route::get('/my/registor/index', 'MyRegistorController@myRegistorIndex')->name('my-registor-index');