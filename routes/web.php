<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Auth::routes();

/*
Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
});

Route::name('admin.')->prefix('admin')->middleware(['auth','admincheck'])->group(function () {

});
*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //user
    Route::name('users.')->prefix('users')->group(function () {
        Route::resource('/', 'UserContoller');
        Route::get('/profile', [UserContoller::class, 'profile'])->name('profile');
        Route::post('/profile', [UserContoller::class, 'postProfile'])->name('postProfile');
        Route::get('/password/change', [UserContoller::class, 'getPassword'])->name('userGetPassword');
        Route::post('/password/change', [UserContoller::class, 'postPassword'])->name('userPostPassword');
    });

    //role
    Route::resource('role', 'RoleController');
    // Route::group(['middleware' => ['role_or_permission:admin|create role|create permission']], function () {
    //     Route::resource('role', 'RoleController');
    // });

    //permission
    Route::resource('permissions', 'PermissionController');
});

//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserContoller@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermission", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');
