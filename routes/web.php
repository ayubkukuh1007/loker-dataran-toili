<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminlokerController;
use App\Http\Controllers\LokasikerjaController;
use App\Http\Controllers\LulusankerjaController;
use App\Http\Controllers\TipekerjaController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\RequestClientController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SearchlowonganController;

Route::get('/', [MainController::class,'index']);
Route::get('page/{page}', [MainController::class,'pagination']);
//search job
Route::get('search-lowongan', [SearchlowonganController::class,'searchjob']);
Route::get('search-lowongan', [SearchlowonganController::class,'index']);
Route::get('format-iklan', function () {return view('websiteloker.formatiklan');});
Route::get('kebijakan', function () {return view('websiteloker.kebijakan');});
Route::get('kontak', function () {return view('websiteloker.kontak');});
Route::get('tentang-kami', function () {return view('websiteloker.tentangkami');});
Route::get('pasang-lowongan', function () {return view('websiteloker.pasanglowongan');});
Route::get('detail-lowongan', function () {return view('websiteloker.detailloker');});
// request client
Route::get('getlocations',[RequestClientController::class,'getlocations']);
Route::get('graduates',[RequestClientController::class,'getgraduations']);
Route::get('jobtype',[RequestClientController::class,'getjobtype']);
Route::get('jobs',[RequestClientController::class,'getjobs']);

Route::get('admin-login', [AuthController::class, 'showFormLogin'])->name('admin-login');
Route::post('login', [AuthController::class, 'login']);
Route::get('admin-logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin-loker', [AdminlokerController::class, 'index'])->name('adminloker');
    Route::get('master-lokasi-kerja', [LokasikerjaController::class, 'index']);
    Route::post('master-lokasi-kerja/store', [LokasikerjaController::class, 'store']);
    Route::post('master-lokasi-kerja/edit', [LokasikerjaController::class, 'edit']);
    Route::post('master-lokasi-kerja/delete', [LokasikerjaController::class, 'deletedata']);
    Route::get('master-lokasi-kerja/show', [LokasikerjaController::class, 'getdata']); 

    Route::get('master-lulusan-kerja', [LulusankerjaController::class, 'index']);
    Route::post('master-lulusan-kerja/store', [LulusankerjaController::class, 'store']);
    Route::post('master-lulusan-kerja/edit', [LulusankerjaController::class, 'edit']);
    Route::post('master-lulusan-kerja/delete', [LulusankerjaController::class, 'deletedata']);
    Route::get('master-lulusan-kerja/show', [LulusankerjaController::class, 'getdata']); 

    Route::get('master-tipe-kerja', [TipekerjaController::class, 'index']);
    Route::post('master-tipe-kerja/store', [TipekerjaController::class, 'store']);
    Route::post('master-tipe-kerja/edit', [TipekerjaController::class, 'edit']);
    Route::post('master-tipe-kerja/delete', [TipekerjaController::class, 'deletedata']);
    Route::get('master-tipe-kerja/show', [TipekerjaController::class, 'getdata']); 

    Route::get('pasang-lowongan-kerja', [LokerController::class, 'index']);
    Route::get('pasang-lowongan-kerja/getdatafield', [LokerController::class, 'getdatafield']);
    Route::post('pasang-lowongan-kerja/store', [LokerController::class, 'store']);
    Route::post('pasang-lowongan-kerja/edit', [LokerController::class, 'edit']);
    Route::post('pasang-lowongan-kerja/delete', [LokerController::class, 'deletedata']);
    Route::get('pasang-lowongan-kerja/show', [LokerController::class, 'getdata']); 
    Route::get('pasang-lowongan-kerja/close', [LokerController::class, 'getdataclose']); 
    Route::post('pasang-lowongan-kerja/getdetail', [LokerController::class, 'getdetail']); 
    
});

