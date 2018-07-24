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

Route::get('/',[
   'uses'=> 'AdvertisementController@index',
    'as'=>'/'
]);


Route::get('/add-advertisement',[
    'uses'=> 'AdvertisementController@addAdvertisementInfo',
    'as'=> 'add-advertisement'
    ]);
Route::post('/store-advertisement',[
     'uses'=>'AdvertisementController@storeAdvertisement',
    'as'=> 'store-advertisement'
]);

Route::get('/manage-advertisement',[
   'uses'=> 'AdvertisementController@manageAdvertisement',
    'as'=> 'manage-advertisement'
]);

Route::post('/delete-advertisement',[
   'uses'=> 'AdvertisementController@deleteAdvertisement',
    'as'=> 'delete-advertisement'
]);

Route::get('/edit-advertisements/{id}',[
   'uses'=> 'AdvertisementController@editAdvertisements',
    'as'=> 'edit-advertisements'
]);

Route::post('/update-advertisements',[
   'uses'=> 'AdvertisementController@updateAdvertisements',
    'as'=> 'update-advertisements'
]);
//-------------------------------------------Category-------------------------------------------

Route::get('/add-categories',[
   'uses'=> 'CategoryController@addCategories',
    'as'=> 'add-categories'
]);

Route::post('/store-categories',[
   'uses'=> 'CategoryController@storeCategories',
    'as'=> 'store-categories'
]);

Route::get('/manage-categories',[
   'uses'=> 'CategoryController@manageCategories',
    'as'=> 'manage-categories'
]);

//------------------------------------------------Show Property---------------------------------------------------
Route::get('/show-advertisement',[
   'uses'=> 'AdvertisementController@showAdvertisement',
    'as'=> 'show-advertisement'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


