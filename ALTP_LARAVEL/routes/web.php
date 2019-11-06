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
    return view('layout');
})->name('dashboard');

Route::prefix('linh-vuc')->group(function(){
    Route::name('linh-vuc.')->group(function(){
        
        Route::get('/', function() {
            return view('ds-linh-vuc');
        })->name('danh-sach');

        Route::get('/them-moi', function() {
            return view('them-moi-linh-vuc');
        })->name('them-moi');

    });
});