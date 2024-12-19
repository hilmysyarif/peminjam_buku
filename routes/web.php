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
    return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard.index');

    // Data Master
    Route::resource('/users', 'Admin\UserController');
    Route::resource('/book-types', 'Admin\BookTypeController');
    Route::resource('/books', 'Admin\BookController');
    Route::resource('/book-borrowers', 'Admin\BookUserController');
    Route::resource('/book-return', 'Admin\BookReturnController');
    Route::resource('/book-borrowers-history', 'Admin\BookBorrowerHistoryController');
    Route::resource('/users-history', 'Admin\UserHistoryController');


    // Detail book on JSON
    Route::get('/book-json/{id}', 'Admin\JsonResponseController@detailBook')->name('json-book.show');

    // Detail user on JSON
    Route::get('/user-json/{id}', 'Admin\JsonResponseController@detailUser')->name('json-user.show');

    // Book borrower approved button
    Route::put('/book-approved/{id}', 'Admin\JsonResponseController@approvedBookBorrower')->name('json-book.approved');

    // Book return approved button
    Route::put('/book-returned/{id}', 'Admin\JsonResponseController@bookReturn')->name('json-book.return');

    // Book borrower not approve button
    Route::put('/book-not-approved/{id}', 'Admin\JsonResponseController@notApproveBookBorrower')->name('json-book.not-approved');
});

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
