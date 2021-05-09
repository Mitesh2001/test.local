<?php

use App\Http\Controllers\AssignementController;
use App\Http\Controllers\ClassController;
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

Route::resource('class', ClassController::class);
Route::resource('assignement', AssignementController::class);
Route::get('downloadFile/{id}', [AssignementController::class,'downloadFile']);
Route::get('/', function () {
    return redirect()->route('class.index');
});
