<?php

use App\Http\Controllers\Companies\CompanyController;
use App\Http\Controllers\Reports\ReportController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Users\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/**
 * Roles and permissions routes
 */
Route::group(['middleware' => ['auth', 'role:super-admin']], function () {
    Route::resource('roles', RoleController::class);
});

/**
 * Roles and permissions routes
 */

/**
 * Authenticated grouped routes
 */
Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::resource('users', UserController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('companies', CompanyController::class);
    Route::get('companies/{id}/restore', [CompanyController::class, 'restore'])->name('restorecompany');
    Route::get('users/{id}/restore', [UserController::class, 'restore'])->name('restoreuser');
});
