<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientsController;


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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/',[UserController::class,'index'])->name('index');

Route::middleware(['auth:api'])->group(function () {
    Route::get('/user',[UserController::class,'user'])->name('authorised-user');
    Route::post("/register_patient",[PatientsController::class,'register_patient'])->name('patient.register');

    Route::get('/patients',[PatientsController::class,'patients'])->name('patients-list');
});
