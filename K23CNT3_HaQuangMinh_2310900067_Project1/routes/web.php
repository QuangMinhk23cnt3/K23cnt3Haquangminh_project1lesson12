<?php

use App\Http\Controllers\HQM_QUAN_TRIController;
use App\Http\Controllers\HQM_LOAI_SAN_PHAMController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/hqm-login',[HQM_QUAN_TRIController::class,'hqmLogin'])->name('admins.hqmLogin');
Route::post('/admins/hqm-login',[HQM_QUAN_TRIController::class,'hqmLoginSubmit'])->name('admins.hqmLoginSubmit');

#admins
Route::get('/hqm-admins',function(){
    return view('hqmAdmins.index');
});

#list
Route::get('/hqm-admins/hqm-loai-san-pham',[HQM_LOAI_SAN_PHAMController::class,'hqmList'])->name('hqmAdmins.hqmLoaiSanPham');
#create
Route::get('/hqm-admins/hqm-loai-san-pham/hqm-create',[HQM_LOAI_SAN_PHAMController::class,'hqmCreate'])->name('hqmAdmins.hqmLoaiSanPham.hqmCreate');
Route::post('/hqm-admins/hqm-loai-san-pham/hqm-create',[HQM_LOAI_SAN_PHAMController::class,'hqmCreateSubmit'])->name('hqmAdmins.hqmLoaiSanPham.nkpCreateSubmit');

#edit
Route::get('/hqm-admins/hqm-loai-san-pham/hqm-edit/{id}',[HQM_LOAI_SAN_PHAMController::class,'hqmEdit'])->name('hqmadmins.hqmloaisanpham.hqmedit');
Route::post('/hqm-admins/hqm-loai-san-pham/hqm-edit',[HQM_LOAI_SAN_PHAMController::class,'hqmEditSubmit'])->name('hqmadmins.hqmloaisanpham.hqmEditSubmit');

#delete
Route::get('/hqm-admins/hqm-loai-san-pham/hqm-delete/{id}',[HQM_LOAI_SAN_PHAMController::class,'hqmDelete'])->name('hqmadmins.hqmloaisanpham.hqmdelete');
