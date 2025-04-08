<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MGMPController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MutasiMasukController;
use App\Http\Controllers\MutasiKeluarController;
use App\Http\Controllers\IjinController;


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
route::get('/',[LoginController::class,'landing'])->name('landing');

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');






Route::group(['middleware' => ['auth','ceklevel:admin,guru,siswa']], function (){
    route::get('/home',[HomeController::class,'index'])->name('home');
    // Route::get('/home', [HomeController::class, 'home'])->name('home');
    
    // route::get('/home',[HomeController::class,'penghargaan'])->name('home');
    
});








route::get('/admin/search',[AdminController::class,'search'])->name('admin.search');
route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::delete('/admin/{id}', [AdminController::class,'destroy'])->name('admin.destroy');
route::get('/add_admin',[AdminController::class,'add_admin'])->name('add_admin');
Route::post('/admin/store',[AdminController::class,'store']);
Route::get('/admin/{id}/edit_admin  ',[AdminController::class,'edit']);
Route::put('/admin/{id}',[AdminController::class,'update']);



route::get('/mutasi-keluar',[MutasiKeluarController::class,'mutasiKeluar'])->name('mutasiKeluar');
Route::delete('/mutasi-keluar/{id}', [MutasiKeluarController::class, 'destroy'])->name('mutasi-keluar.destroy');
route::get('/add_mutasi-keluar',[MutasiKeluarController::class,'add_MutasiKeluar'])->name('add_MutasiKeluar');
Route::post('/mutasi-keluar/store',[MutasiKeluarController::class,'store']);
Route::get('/mutasi-keluar/{id}/edit_mutasi-keluar  ',[MutasiKeluarController::class,'edit']);
Route::put('/mutasi-keluar/{id}', [MutasiKeluarController::class, 'update'])->name('mutasi-keluar.update');


route::get('/mutasi-masuk',[MutasiMasukController::class,'mutasiMasuk'])->name('mutasiMasuk');
Route::delete('/mutasi-masuk/{id}', [MutasiMasukController::class, 'destroy'])->name('mutasi-masuk.destroy');
route::get('/add_mutasi-masuk',[MutasiMasukController::class,'add_MutasiMasuk'])->name('add_MutasiMasuk');
Route::post('/mutasi-masuk/store',[MutasiMasukController::class,'store']);
Route::get('/mutasi-masuk/{id}/edit_mutasi-masuk  ',[MutasiMasukController::class,'edit']);
Route::put('/mutasi-masuk/{id}', [MutasiMasukController::class, 'update'])->name('mutasi-masuk.update');


route::get('/mgmp',[MGMPController::class,'MGMP'])->name('MGMP');
Route::delete('/mgmp/{id}', [MGMPController::class, 'destroy'])->name('mgmp.destroy');
route::get('/add_mgmp',[MGMPController::class,'add_Mgmp'])->name('add_Mgmp');
Route::post('/mgmp/store',[MGMPController::class,'store']);
Route::get('/mgmp/{id}/edit_mgmp  ',[MGMPController::class,'edit']);
Route::put('/mgmp/{id}', [MGMPController::class, 'update'])->name('mgmp.update');




Route::get('/ijin-operasi', [IjinController::class, 'index'])->name('ijin.index');
Route::get('/add_ijin', [IjinController::class, 'create'])->name('ijin.create');
Route::post('/ijin/store',[IjinController::class,'store']);
Route::get('/ijin/{id}/edit_ijin  ',[IjinController::class,'edit']);
Route::put('/ijin/{id}', [IjinController::class, 'update'])->name('ijin.update');
Route::delete('/ijin/{id}', [IjinController::class, 'destroy'])->name('ijin.destroy');

