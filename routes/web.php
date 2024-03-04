<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ADD A PREFIX TO THE ROUTES
Route::prefix('laradmin')->group(function () {
    Route::get('/install',  [InstallerController::class, 'welcomeMessage'])->name('install.welcome');
    Route::prefix('install')->group(function () {
        Route::get('/check-requirements', [InstallerController::class, 'checkRequirements'])->name('install.check-requirements');
        Route::get('/environmentsetup', [InstallerController::class, 'environmentSetup'])->name('install.environment-setup');
        Route::post('/edit-env', [InstallerController::class, 'changeEnvData']);
        Route::get('/finish', [InstallerController::class, 'finishInstall'])->name('install.finishInstall');
    });
});

Route::middleware('web', 'check.installation')->group(function () {
    Route::prefix('laradmin')->group(function () {
        Route::get('/', function () { return view('auth.login'); });
        Route::get('/login', function () { return view('auth.login'); });
    });

    Route::get('/' , function () { return "This website is managed by Laradminify"; });
});




