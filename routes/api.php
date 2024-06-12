<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Auth;
// 'headers' => [
//     'Accept' => 'application/json',
//     'Authorization' => 'Bearer '.$accessToken,
// ]
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [PassportAuthController::class, 'login']);
Route::get('employee-fetch/{id}', [EmployeeController::class, 'employeeFetch']);
Route::middleware('auth:api')->group(function () {
    
    // Route::apiResources([
    //     'employeeFetch' => EmployeeController::class,
    // ]);
    
    
});
