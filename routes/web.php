<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SemenceController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\AppMobileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SpeculationController;
use App\Http\Controllers\AgribusinessController;
use App\Http\Controllers\ExportToExcelController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ImportViaExcelController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize:clear');
    $exitCode = Artisan::call('view:clear');
    return 'DONE'; //Return anything
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('auth.showLoginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/login-refonte', function () {
        return view('auth.login-refonte');
    });
    Route::post('forget', [AuthController::class, 'forget'])->name('auth.forget');
    Route::post('restore', [AuthController::class, 'restore'])->name('auth.restore');
    Route::get('password-reset', [ResetPasswordController::class, 'passwordReset'])->name('users.password-reset.form');
    Route::post('password-reset', [ResetPasswordController::class, 'changePassword'])->name('users.password-reset');
});

Route::group(['middleware' => 'auth'], function() {
        Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
       
        Route::prefix('profile')->group(function() {
            Route::get('/{user}/edit',  [ProfileController::class,'edit'])->name('profile.edit');
            Route::post('/{user}/update', [ProfileController::class,'update'])->name('profile.update');
        });

        Route::prefix('cooperatives')->group(function() {
            Route::view('/', 'agribusinesses.index')->name('agribusinesses');
            Route::get('/index', [AgribusinessController::class,'index'])->name('agribusinesses.index');
            Route::post('/store', [AgribusinessController::class, 'store'])->name('agribusinesses.store');
        });

        Route::prefix('roles')->group(function() {
            Route::view('/', 'roles.index')->name('roles');
            Route::get('/index', [RoleController::class,'index'])->name('roles.index');
            Route::get('/{role}/permissions', [RoleController::class,'showAssignPermissionForm'])->name('roles.permission');
            Route::post('/{role}/permissions', [RoleController::class,'assignPermission'])->name('roles.permission.assign');
    
        });

        Route::prefix('projets')->group(function(){
            Route::view('/','projets.index')->name('projets');
            Route::get('/index',[ProjectController::class,'index'])->name('projets.index');
            Route::get('/invitation', [InvitationController::class,'index'])->name('projets.invitation');
            Route::get('/invitation/create', [InvitationController::class,'create'])->name('projets.invitation.create');
        });

        Route::prefix('permissions')->group(function() {
            Route::view('/', 'permissions.index')->name('permissions');
            Route::get('/index', [PermissionController::class,'index'])->name('permissions.index');
            Route::get('/create', [PermissionController::class,'create'])->name('permissions.create');
        });

        Route::prefix('producteurs')->group(function() {
            Route::view('/', 'farmers.index')->name('farmers');
            Route::get('/index', [FarmerController::class,'index'])->name('farmers.index');
            Route::get('/create', [FarmerController::class,'create'])->name('farmers.create');
            Route::post('/store', [FarmerController::class,'store'])->name('farmers.store');
            Route::get('/{farmer}/show', [FarmerController::class,'show'])->name('farmers.show');
            
            Route::get('/{farmer}/edit', [FarmerController::class,'edit'])->name('farmers.edit');
            Route::post('/{farmer}/update', [FarmerController::class,'update'])->name('farmers.update');
            Route::delete('/{farmer}', [FarmerController::class,'destroy'])->name('farmers.delete');

            Route::prefix('import-excel')->group(function() {
                Route::get('/create', [ImportViaExcelController::class, 'create'])->name('farmers.import.create');
                Route::post('/store',  [ImportViaExcelController::class, 'store'])->name('farmers.import.store');
            });

            Route::prefix('export-excel')->group(function() {
                Route::get('/', [ExportToExcelController::class,'create'])->name('farmers.export');
            });
            
        });

        Route::prefix('users')->group(function() {
            Route::view('/', 'users.index')->name('users');
            Route::get('/index', [UserController::class,'index'])->name('users.index');
    
            Route::get('/{user}/roles', [UserRoleController::class,'create'])->name('users.role.create');
            Route::post('/{user}/roles', [UserRoleController::class,'store'])->name('users.role.store');
        });

        Route::prefix('parcelles')->group(function() {
            Route::get('/{farmerId}', [PlotController::class,'index'])->name('plots.index');
            Route::delete('/{plot}',  [PlotController::class,'destroy'])->name('plots.delete');
        });
    
        Route::prefix('appli-mobile')->group(function() {
            Route::get('/', [AppMobileController::class,'index'])->name('app-mobile.index');
        });

        Route::prefix('speculations')->group(function(){
            Route::view('/', 'speculation.index')->name('speculations');
            Route::get('/index', [SpeculationController::class,'index'])->name('speculations.index');
            
        });

        Route::prefix('semences')->group(function(){
            Route::view('/{speculation_id}', 'semences.index')->name('semences');
            Route::get('/index/{speculation_id}', [SemenceController::class,'index'])->name('semences.index');
        });
        
});