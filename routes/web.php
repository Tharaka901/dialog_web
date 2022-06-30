<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DsrController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ItemController;

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
    return view('auth/login');
});

Route::group(['prefix'=>'admin','middleware'=>['admin','admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store']) ->name('admin .login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'destroy']) ->name('admin.logout');

//User All Route
Route::get('/user/login', [MainUserController::class, 'Logout']) ->name('user.logout');

Route::get('/user/profile', [MainUserController::class, 'UserProfile']) ->name('user.profile');

Route::get('/user/profile/edit', [MainUserController::class, 'UserProfileEdit']) ->name('profile.edit');

Route::post('/user/profile/store', [MainUserController::class, 'UserProfileStore']) ->name('profile.store');

Route::get('/user/password/view', [MainUserController::class, 'UserPasswordView']) ->name('user.password.view');

Route::post('/user/password/update', [MainUserController::class, 'UserPasswordUpdate']) ->name('password.update');

Route::get('/logout', [AdminController::class, 'destroy']);

// User Management All Route

Route::prefix('users')->group(function(){

Route::get('/view', [UserController::class, 'UserView']) ->name('user.view');

});

Route::get('/view', [UserController::class, 'UserView']) ->name('user.view');

Route::get('/editUser',[UserController::class, 'editUser']);

Route::get('/auth.register',[UserController::class, 'AddUser']);


// DSR
Route::get('/pendingDsr', [DsrController::class, 'loadPendingDsr']);

Route::get('/completeDsr',[DsrController::class, 'completeDsr']);

Route::get('/approve',[DsrController::class, 'approveDsr']);

//Dashboard
Route::get('/dashBoard', [UserController::class, 'dashBoard']);

// Report
Route::get('/salesSummery',[ReportController::class, 'salesSummery']);

Route::get('/collection',[ReportController::class, 'CollectionReport']);

//Item
Route::get('/item',[ItemController::class, 'Item']);

Route::get('/item_registor',[ItemController::class,'ItemRegistor']);

Route::get('/item_update',[ItemController::class,'ItemUpdate']);






