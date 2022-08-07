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

Route::group([
    'namespace' => 'Front',
    ], function() {
        Route::get('/', 'IndexController')->name('index');
        Route::get('/about', 'AboutController')->name('about');
        Route::get('/services', 'ServicesController')->name('services');
        Route::get('/service/{slug}', 'ServiceController')->name('service');
    }
);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
