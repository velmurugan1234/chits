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
Route::post('/store/customer', 'CustomerController@store')->name('customer-store');

//Schemes
// Route::get('/chit/scheme/index', 'SchemeController@schemeIndex')->name('scheme-index');
// Route::post('/chit/schem/store', 'SchemeController@chitSchemeInsertAndUpdate')->name('chit-scheme-store');
//Schemes
Route::get('/chit/scheme/index', 'SchemeController@schemeIndex')->name('scheme-index');
Route::post('/chit/schem/store', 'SchemeController@chitSchemeInsertAndUpdate')->name('chit-scheme-store');
Route::post('/chit/scheme/edit', 'SchemeController@chitSchemeEdit')->name('chit-scheme-edit');
Route::post('/chit/scheme/delete', 'SchemeController@chitSchemeDelete')->name('chit-scheme-delete');
Route::post('chit/scheme/update/{id}', 'SchemeController@chitSchemeInsertAndUpdate')->name('chit-scheme-update');
// chit groups
// Route::get('/chit/group/index', 'SchemeController@chitGroupIndex')->name('chit-group-index');
// Route::post('/chit/group/store', 'SchemeController@chitGroupInsertAndUpdate')->name('chit-group-store');
Route::get('/chit/mapping', 'SchemeController@chitMapping');
Route::get('/mapped/chit/groups', 'SchemeController@mappedChitGroups');
Route::post('/approve/chit/group', 'SchemeController@approveChitGroups');
// chit groups
Route::get('/chit/group/index', 'SchemeController@chitGroupIndex')->name('chit-group-index');
Route::post('/chit/group/store', 'SchemeController@chitGroupInsertAndUpdate')->name('chit-group-store');
Route::post('/chit/group/edit', 'SchemeController@chitGroupEdit')->name('chit-group-edit');
Route::post('/chit/group/delete', 'SchemeController@chitGroupDelete')->name('chit-group-delete');
Route::post('chit/group/update/{id}', 'SchemeController@chitGroupInsertAndUpdate')->name('chit-group-update');

Route::get('/map/customers/to/group/{chit_group_id}', 'SchemeController@mapCustomersToGroup');
Route::post('/map/members/to/chit', 'SchemeController@mapMembersToChit')->name('map-chit-members');
//settings
//Users
// Route::get('/user/index', 'UserController@index')->name('user-index');
// Route::post('/user/store', 'UserController@userInsertAndUpdate')->name('user-store');

//branch
// Route::get('/branch/index', 'Settings\SettingsController@branchIndex')->name('branch-index');
// Route::post('/branch/store', 'Settings\SettingsController@branchInsertAndUpdate')->name('branch-store');
//bank
// Route::get('/bank/index', 'Settings\SettingsController@Bankindex')->name('bank-index');
//Users
Route::get('/user/index', 'UserController@index')->name('user-index');
Route::post('/user/store', 'UserController@userInsertAndUpdate')->name('user-store');
Route::post('/chit/user/edit', 'UserController@chitUserEdit')->name('chit-user-edit');
Route::post('/chit/user/delete', 'UserController@chitUserDelete')->name('chit-user-delete');
Route::post('chit/user/update/{id}', 'UserController@userInsertAndUpdate')->name('chit-user-update');


//branch
Route::get('/branch/index', 'Settings\SettingsController@branchIndex')->name('branch-index');
Route::post('/branch/store', 'Settings\SettingsController@branchInsertAndUpdate')->name('branch-store');
Route::post('/branch/edit', 'Settings\SettingsController@branchEdit')->name('branch-edit');
Route::post('/branch/delete', 'Settings\SettingsController@branchDelete')->name('branch-delete');
Route::post('/branch/update/{id}', 'Settings\SettingsController@branchInsertAndUpdate')->name('branch-update');


//bank
Route::get('/bank/index', 'Settings\SettingsController@bankIndex')->name('bank-index');
Route::post('/bank/store', 'Settings\SettingsController@bankInsertAndUpdate')->name('bank-store');
Route::post('/bank/edit', 'Settings\SettingsController@bankEdit')->name('bank-edit');
Route::post('/bank/delete', 'Settings\SettingsController@bankDelete')->name('bank-delete');
Route::post('/bank/update/{id}', 'Settings\SettingsController@bankInsertAndUpdate')->name('bank-update');
//MY REGISTOR
Route::get('/my/registor/index', 'MyRegistorController@myRegistorIndex')->name('my-registor-index');