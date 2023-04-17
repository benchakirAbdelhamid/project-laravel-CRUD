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

// Route::get('/', function () {
//     return view('welcome');
// });

// application CRUD create read update delete
Route::get('/','\App\Http\Controllers\c1@getDataFromDB');
Route::view('AddModules', 'addModules');
Route::get('/update/{c}','\App\Http\Controllers\c1@updateData');
Route::post('/saveAddModules','\App\Http\Controllers\c1@InsertData');
Route::post('/saveUpdate','\App\Http\Controllers\c1@saveData');
Route::get('/delete/{d}','\App\Http\Controllers\c1@deleteData');
