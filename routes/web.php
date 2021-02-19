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

// That view should contain your first name, last name. 
Route::get('user/{name}/{last}', function ($name,$last) {
    return $name." ".$last;
})->where(['name'=>'[a-zA-Z]+','last'=>'[a-zA-Z]+']);
