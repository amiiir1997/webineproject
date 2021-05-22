<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\PackageController;

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
Route::get('/newattribute', function () {
    return view('newattribute');
});
Route::get('/newpackage',[PackageController::class, 'createpackage']);
Route::get('/packages',[PackageController::class, 'packages']);

Route::post('/newattributeinsert', [AttributeController::class, 'insertattribute']);
Route::post('/newpackageinsert', [PackageController::class, 'insertpackage']);