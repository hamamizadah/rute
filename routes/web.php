<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])
-> name('viewlogin');

Route::post('login', [AuthController::class, 'login'])
-> name('login');

Route::get('/logout', [AuthController::class, 'logout'])
->name('logout');



Route::middleware(['cek_login'])->group(function () {
    Route::post('rute/tambah-rute', [RuteController::class, 'store'])-> name('tambah_rute');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('rute/create', [HomeController::class, 'create'])->name('rute.create');
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard'); 
});





