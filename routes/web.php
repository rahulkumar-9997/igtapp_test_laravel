<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\UploadXmlController;
use App\Http\Controllers\Backend\ImageController;
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
    return view('backend.auth.index');
});
// //Auth::routes();
Route::post('admin-login', [LoginController::class, 'adminLogin'])->name('admin.login'); 
//Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('employee', EmployeeController::class);
    Route::get('xml-create', [UploadXmlController::class, 'create'])->name('xml.create'); 
    Route::post('xml-store', [UploadXmlController::class, 'store'])->name('xml.store'); 
    Route::get('image-create', [ImageController::class, 'create'])->name('image.create'); 
    Route::post('image-store', [ImageController::class, 'store'])->name('image.store'); 
});