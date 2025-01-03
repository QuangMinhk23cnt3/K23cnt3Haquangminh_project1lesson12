<?php

namespace App\Http\Controllers;

use App\Models\HQM_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class HQM_LOAI_SAN_PHAMController extends Controller
{
    public function hqmList()
    {
        $hqmLoaiSanPhams = HQM_LOAI_SAN_PHAM::all();

        return view('hqmAdmins.hqmLoaiSanPham.hqm-list',['hqmLoaiSanPhams'=>$hqmLoaiSanPhams]);
    }

    public function hqmCreate()
    {
        return view('hqmadmins.hqmloaisanpham.hqm-create');
    }

    public function hqmCreateSubmit(Request $request)
    {
        $validationDate = $request->validate([
            'hqmMaLoai'=>'required|unique:hqm_loai_san_pham',
            'hqmTenLoai'=>'required',

        ]);

        // ghi dữ liệu xuống DB
        $hqmLoaiSanPham = new HQM_LOAI_SAN_PHAM;
        $hqmLoaiSanPham->hqmMaLoai = $request->hqmMaLoai;
        $hqmLoaiSanPham->hqmTenLoai = $request->hqmTenLoai;
        $hqmLoaiSanPham->hqmTrangThai = $request->hqmTrangThai;

        $hqmLoaiSanPham->save();

        return redirect()->route('hqmAdmins.hqmLoaiSanPham');
    }

    // edit 
    public function hqmEdit($id)
    {
        $hqmLoaiSanPham = HQM_LOAI_SAN_PHAM::find($id);
        return view('hqmAdmins.hqmLoaiSanPham.hqm-edit',['hqmLoaiSanPham'=>$hqmLoaiSanPham]);
    }

    // Post: nkpEditSubmit
    public function hqmEditSubmit(Request $request)
    {
        $validationDate = $request->validate([
            'hqmMaLoai'=>'required',
            'hqmTenLoai'=>'required',

        ]);

        // ghi de du lieu xuong db
        $hqmLoaiSanPham = HQM_LOAI_SAN_PHAM::find($request->id);

        $hqmLoaiSanPham->hqmMaLoai = $request->hqmMaLoai;
        $hqmLoaiSanPham->hqmTenLoai = $request->hqmTenLoai;
        $hqmLoaiSanPham->hqmTrangThai = $request->hqmTrangThai;

        $hqmLoaiSanPham->save();

        return redirect()->route('hqmAdmins.hqmLoaiSanPham');
    }

    public function hqmDelete($id)
    {
        $hqmLoaiSanPham = HQM_LOAI_SAN_PHAM::find($id);
        $hqmLoaiSanPham->delete();
        return redirect()->route('hqmAdmins.hqmLoaiSanPham');
    }
}
