<?php

use App\Http\Controllers\HQM_QUAN_TRIController;
use App\Http\Controllers\HQM_LOAI_SAN_PHAMController;
use App\Http\Controllers\HQM_SAN_PHAMController;
use App\Http\Controllers\HQM_KHACH_HANGController;
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
//login
Route::get('/admins/hqm-login',[HQM_QUAN_TRIController::class,'hqmLogin'])->name('admins.hqmLogin');
Route::post('/admins/hqm-login',[HQM_QUAN_TRIController::class,'hqmLoginSubmit'])->name('admins.hqmLoginSubmit');

//admins
Route::get('/hqm-admins',function(){
    return view('hqmAdmins.index');
});
//loai_san_pham
#list
Route::get('/hqm-admins/hqm-loai-san-pham',[HQM_LOAI_SAN_PHAMController::class,'hqmList'])->name('hqmAdmins.hqmLoaiSanPham');
#detail
Route::get('/hqmadmins/hqm-loai-san-pham/hqm-detail/{id}',[HQM_LOAI_SAN_PHAMController::class,'hqmDetail'])->name('hqmadmins.hqmloaisanpham.hqmdetail');
#create
Route::get('/hqm-admins/hqm-loai-san-pham/hqm-create',[HQM_LOAI_SAN_PHAMController::class,'hqmCreate'])->name('hqmadmins.hqmloaisanpham.hqmcreate');
Route::post('/hqm-admins/hqm-loai-san-pham/hqm-create',[HQM_LOAI_SAN_PHAMController::class,'hqmCreateSubmit'])->name('hqmadmins.hqmloaisanpham.hqmcreatesubmit');

#edit
Route::get('/hqmadmins/hqm-loai-san-pham/hqm-edit/{id}',[HQM_LOAI_SAN_PHAMController::class,'hqmEdit'])->name('hqmadmins.hqmloaisanpham.hqmedit');
Route::post('/hqmadmins/hqm-loai-san-pham/hqm-edit',[HQM_LOAI_SAN_PHAMController::class,'hqmEditSubmit'])->name('hqmadmins.hqmloaisanpham.hqmEditSubmit');

#delete
Route::get('/hqm-admins/hqm-loai-san-pham/hqm-delete/{id}',[HQM_LOAI_SAN_PHAMController::class,'hqmDelete'])->name('hqmadmins.hqmloaisanpham.hqmdelete');

//san_pham
#list
Route::get('/hqmadmins/hqm-san-pham',[HQM_SAN_PHAMController::class,'hqmList'])->name('hqmadmins.hqmsanpham');
#create
Route::get('/hqmadmins/hqm-san-pham/hqm-create',[HQM_SAN_PHAMController::class,'hqmCreate'])->name('hqmadmins.hqmsanpham.hqmcreate');
Route::post('/hqmadmins/hqm-san-pham/hqm-create',[HQM_SAN_PHAMController::class,'hqmCreateSubmit'])->name('hqmadmins.hqmsanpham.hqmcreatesubmit');

#detail
Route::get('/hqmadmins/hqm-san-pham/hqm-detail/{id}',[HQM_SAN_PHAMController::class,'hqmDetail'])->name('hqmadmins.hqmsanpham.hqmdetail');

#delete
Route::get('/hqmadmins/hqm-san-pham/hqm-delete/{id}',[HQM_SAN_PHAMController::class,'hqmDelete'])->name('hqmadmins.hqmsanpham.hqmdelete');

#edit
Route::get('/hqmadmins/hqm-san-pham/hqm-edit/{id}', [HQM_SAN_PHAMController::class, 'hqmEdit'])->name('hqmadmins.hqmsanpham.hqmedit');
Route::post('/hqmadmins/hqm-san-pham/hqm-edit/{id}', [HQM_SAN_PHAMController::class, 'hqmEditSubmit'])->name('hqmadmins.hqmsanpham.hqmeditsubmit');


//quan_tri
#list
Route::get('/hqmadmins/hqm-quan-tri',[HQM_QUAN_TRIController::class,'hqmList'])->name('hqmadmins.hqmquantri');
#create
Route::get('/hqmadmins/hqm-quan-tri/hqm-create',[HQM_QUAN_TRIController::class,'hqmCreate'])->name('hqmadmins.hqmquantri.hqmcreate');
Route::post('/hqmadmins/hqm-quan-tri/hqm-create',[HQM_QUAN_TRIController::class,'hqmCreateSubmit'])->name('hqmadmins.hqmquantri.hqmcreatesubmit');
#detail
Route::get('/hqmadmins/hqm-quan-tri/hqm-detail/{id}',[HQM_QUAN_TRIController::class,'hqmDetail'])->name('hqmadmins.hqmquantri.hqmdetail');
#edit
Route::get('/hqmadmins/hqm-quan-tri/hqm-edit/{id}', [HQM_QUAN_TRIController::class,'hqmEdit'])->name('hqmadmins.hqmquantri.hqmedit');
Route::post('/hqmadmins/hqm-quan-tri/hqm-edit/{id}', [HQM_QUAN_TRIController::class,'hqmEditSubmit'])->name('hqmadmins.hqmquantri.hqmeditsubmit');
#delete
Route::get('/hqmadmins/hqm-quan-tri/hqm-delete/{id}',[HQM_QUAN_TRIController::class,'hqmDelete'])->name('hqmadmins.hqmquantri.hqmdelete');


//khach_hang
#list
Route::get('/hqmadmins/hqm-khach-hang',[HQM_KHACH_HANGController::class,'hqmList'])->name('hqmadmins.hqmkhachhang');
#detail
Route::get('/hqmadmins/hqm-khach-hang/hqm-detail/{id}',[HQM_KHACH_HANGController::class,'hqmDetail'])->name('hqmadmins.hqmkhachhang.hqmdetail');
#create
Route::get('/hqmadmins/hqm-khach-hang/hqm-create',[HQM_KHACH_HANGController::class,'hqmCreate'])->name('hqmadmins.hqmkhachhang.hqmcreate');
Route::post('/hqmadmins/hqm-khach-hang/hqm-create',[HQM_KHACH_HANGController::class,'hqmCreateSubmit'])->name('hqmadmins.hqmkhachhang.hqmcreatesubmit');
#edit
Route::get('/hqmadmins/hqm-khach-hang/hqm-edit/{id}', [HQM_KHACH_HANGController::class,'hqmEdit'])->name('hqmadmins.hqmkhachhang.hqmedit');
Route::post('/hqmadmins/hqm-khach-hang/hqm-edit/{id}', [HQM_KHACH_HANGController::class,'hqmEditSubmit'])->name('hqmadmins.hqmkhachhang.hqmeditsubmit');
#delete
Route::get('/hqmadmins/hqm-khach-hang/hqm-delete/{id}',[HQM_KHACH_HANGController::class,'hqmDelete'])->name('hqmadmins.hqmkhachhang.hqmdelete');


//hoa_don
#list
#detail
#create
#edit
#delete


//ct_hoa_don
#list
#detail
#create
#edit
#delete