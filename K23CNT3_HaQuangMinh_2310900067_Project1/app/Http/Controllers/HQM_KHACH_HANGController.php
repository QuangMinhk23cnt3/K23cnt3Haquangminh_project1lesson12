<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HQM_KHACH_HANG;

class HQM_KHACH_HANGController extends Controller
{
    public function hqmList()
    {
        $hqmkhachhangs = HQM_KHACH_HANG::all();
        return view('hqmAdmins.hqmkhachhang.hqm-list',['hqmkhachhangs'=>$hqmkhachhangs]);
    }

    public function hqmDetail($id)
    {
        $hqmkhachhang = HQM_KHACH_HANG::where('id',$id)->first();
        return view('hqmAdmins.hqmkhachhang.hqm-detail',['hqmkhachhang'=>$hqmkhachhang]);
    }

    public function hqmCreate()
    {
        return view('hqmAdmins.hqmkhachhang.hqm-create');
    }

    public function hqmCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'hqmMaKhachHang' => 'required|unique:hqm_khach_hang,hqmMaKhachHang',
            'hqmHoTenKhachHang' => 'required|string',
            'hqmEmail' => 'required|email|unique:hqm_khach_hang,hqmEmail',  
            'hqmMatKhau' => 'required|min:6',
            'hqmDienThoai' => 'required|numeric|unique:hqm_khach_hang,hqmDienThoai',  
            'hqmDiaChi' => 'required|string',
            'hqmNgayDangKy' => 'required|date',  
            'hqmTrangThai' => 'required|in:0,1,2',
        ]);

        $hqmkhachhang = new HQM_KHACH_HANG;
        $hqmkhachhang->hqmMaKhachHang = $request->hqmMaKhachHang;
        $hqmkhachhang->hqmHoTenKhachHang = $request->hqmHoTenKhachHang;
        $hqmkhachhang->hqmEmail = $request->hqmEmail;
        $hqmkhachhang->hqmMatKhau = $request->hqmMatKhau;
        $hqmkhachhang->hqmDienThoai = $request->hqmDienThoai;
        $hqmkhachhang->hqmDiaChi = $request->hqmDiaChi;
        $hqmkhachhang->hqmNgayDangKy = $request->hqmNgayDangKy;
        $hqmkhachhang->hqmTrangThai = $request->hqmTrangThai;

        $hqmkhachhang->save();

        return redirect()->route('hqmadmins.hqmkhachhang');
    }

    public function hqmEdit($id)
    {
        // Lấy khách hàng theo id
        $hqmkhachhang = HQM_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$hqmkhachhang) {
            return redirect()->route('hqmadmins.hqmkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('hqmAdmins.hqmkhachhang.hqm-edit', ['hqmkhachhang' => $hqmkhachhang]);
    }

    public function hqmEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'hqmMaKhachHang' => 'required|unique:hqm_khach_hang,hqmMaKhachHang,' . $id, // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'hqmHoTenKhachHang' => 'required|string',
            'hqmEmail' => 'required|email|unique:hqm_khach_hang,hqmEmail,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'hqmMatKhau' => 'nullable|min:6', // Mật khẩu không bắt buộc khi cập nhật
            'hqmDienThoai' => 'required|numeric|unique:hqm_khach_hang,hqmDienThoai,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'hqmDiaChi' => 'required|string',
            'hqmNgayDangKy' => 'required|date',
            'hqmTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $hqmkhachhang = HQM_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$hqmkhachhang) {
            return redirect()->route('hqmadmins.hqmkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $hqmkhachhang->hqmMaKhachHang = $request->hqmMaKhachHang;
        $hqmkhachhang->hqmHoTenKhachHang = $request->hqmHoTenKhachHang;
        $hqmkhachhang->hqmEmail = $request->hqmEmail;
        $hqmkhachhang->hqmMatKhau = $request->hqmMatKhau;
        $hqmkhachhang->hqmDienThoai = $request->hqmDienThoai;
        $hqmkhachhang->hqmDiaChi = $request->hqmDiaChi;
        $hqmkhachhang->hqmNgayDangKy = $request->hqmNgayDangKy;
        $hqmkhachhang->hqmTrangThai = $request->hqmTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $hqmkhachhang->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('hqmadmins.hqmkhachhang')->with('success', 'Cập nhật khách hàng thành công!');
    } 

    public function hqmDelete($id)
    {
        HQM_KHACH_HANG::where('id',$id)->delete();
        return back()->with('khachhang_deleted','Đã xóa Khách hàng thành công!');
    }
}
