<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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
    return view('login');
});

//Login
Route::get('/login',[LoginController::class,'getLogin'])->name('getLogin');
Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');

Route::get('/access', function () {
    return view('access');
})->name('access');

Route::get('/checkTrial', [MasterController::class, 'checkTrial'])->name('checkTrial');
Route::post('/checkTrial/renew', [MasterController::class, 'trialRenew'])->name('trialRenew');

Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/dashboard',[MasterController::class,'dashboard'])->name('dashboard');

    Route::prefix('/data')->group(function () {
        Route::get('/list',[CitizenController::class,'citizenRead'])->name('citizenRead');
        Route::post('/citizen-create',[CitizenController::class,'citizenCreate'])->name('citizenCreate');
        Route::get('/citizen-moreinfo/{encryptedId}',[CitizenController::class,'citizenMoreInfo'])->name('citizenMoreInfo');
        Route::post('/citizen-upmoreinfo',[CitizenController::class,'MoreInfoUpdate'])->name('MoreInfoUpdate');
        Route::get('/list/pdf/{id}', [CitizenController::class, 'citizenReadPdf'])->name('citizenReadPdf');
    });

    Route::prefix('/generate')->group(function () {
        Route::get('/reports',[ReportsController::class,'reportsRead'])->name('reportsRead');
    });

    Route::prefix('/all')->group(function () {
        Route::get('/users/list',[UserController::class,'userRead'])->name('userRead');
        Route::post('/users/list/add',[UserController::class,'userCreate'])->name('userCreate');
        Route::get('users/edit/{id}', [UserController::class, 'userEdit'])->name('userEdit');
        Route::post('users/update', [UserController::class, 'userUpdate'])->name('userUpdate');
        Route::post('users/updatePass', [UserController::class, 'userUpdatePassword'])->name('userUpdatePassword');
    });

    Route::prefix('/acccount')->group(function () {
        Route::get('/information',[ProfileController::class,'profileRead'])->name('profileRead');
        Route::post('/information/update',[ProfileController::class,'profileUpdate'])->name('profileUpdate');
        Route::post('/information/updatePass',[ProfileController::class,'profilePassUpdate'])->name('profilePassUpdate');
    });

    
    Route::get('/citizen/delete{id}', [CitizenController::class,'citizenDelete'])->name('citizenDelete');
    Route::get('/users/delete{id}', [UserController::class,'userDelete'])->name('userDelete');
    //Logout
    Route::get('/logout',[MasterController::class,'logout'])->name('logout');
});
