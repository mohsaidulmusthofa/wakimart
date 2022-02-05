<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



/*
| -----------
| ROUTE USER
| -----------
*/
// route view page data user
Route::get('user', [UserController::class, 'index'])->name('vuser');
// route view page add user
Route::get('user/tambah', [UserController::class, 'create'])->name('vadduser');
// route add user
Route::post('user/tambah', [UserController::class, 'store'])->name('store.user');
// route view page edit user
Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('vedituser');
// route update user
Route::post('user/edit/{id}', [UserController::class, 'update'])->name('update.user');
// route delete user
Route::get('user/delete/{id}', [UserController::class, 'destroy'])->name('delete.user');
