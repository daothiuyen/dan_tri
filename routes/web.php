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
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::resource('account','Admin\AccountController');

    Route::resource('category','Admin\CategoryController');

    Route::resource('book','Admin\BookController');

    Route::resource('blog','Admin\BlogController');

    Route::resource('slider','Admin\SliderController');

    Route::resource('author','Admin\AuthorController');

    Route::resource('member','Admin\MemberController');

    Route::resource('cooperate','Admin\CooperateController');

});
//Route::get('/admin','Admin\HomeController@index')->name('admin');



//Route::get('/admin/category','Admin\CategoryController@index')->name('category.list');
Route::get('/admin/category/add','Admin\CategoryController@create')->name('category.create');
//
//Route::get('/admin/book','Admin\BookController@index')->name('book.list');
//Route::get('/admin/book/add','Admin\BookController@create')->name('book.create');
//
//Route::get('/admin/blog','Admin\BlogController@index')->name('blog.list');
//Route::get('/admin/blog/add','Admin\BlogController@create')->name('blog.create');
//
//Route::get('/admin/slider','Admin\SliderController@index')->name('slider.list');
//Route::get('/admin/slider/add','Admin\SliderController@create')->name('slider.create');
//
//Route::get('/admin/author','Admin\AuthorController@index')->name('author.list');
//Route::get('/admin/author/add','Admin\AuthorController@create')->name('author.create');
//
//Route::get('/admin/account','Admin\AccountController@index')->name('account.list');
//Route::get('/admin/account/add','Admin\AccountController@create')->name('account.create');
//
//Route::get('/admin/member','Admin\MemberController@index')->name('member.list');
//Route::get('/admin/member/add','Admin\MemberController@create')->name('member.create');
//
//Route::get('/admin/cooperate','Admin\CooperateController@index')->name('cooperate.list');
//Route::get('/admin/cooperate/add','Admin\CooperateController@create')->name('cooperate.create');
//Route::get('/', function () {
//    return view('welcome');
//});


//Route::resource('event', 'EventController');
//Route::get('{event}/channel/create','ChannelController@create')->name('channel.create');
//Route::post('{event}/channel/create','ChannelController@store')->name('channel.store');
//
//Route::get('{event}/ticket/create','TicketController@create')->name('ticket.create');
//Route::post('{event}/ticket/create','TicketController@store')->name('ticket.store');
//
//Route::get('{event}/room/create','RoomController@create')->name('room.create');
//Route::post('{event}/room/create','RoomController@store')->name('room.store');
//
//Route::get('{event}/session/create','SessionController@create')->name('session.create');
//Route::post('{event}/session/create','SessionController@store')->name('session.store');
//
//Route::get('{event}/session/{session_id}/edit','SessionController@edit')->name('session.edit');
//Route::post('{event}/session/{session_id}/edit','SessionController@update')->name('session.update');
//
//Route::get('login', 'Auth\LoginController@login')->name('login');
//Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
