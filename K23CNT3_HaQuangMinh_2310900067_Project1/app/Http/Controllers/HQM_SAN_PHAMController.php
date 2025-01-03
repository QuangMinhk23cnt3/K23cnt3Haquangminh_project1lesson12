<?php

namespace App\Http\Controllers;

use App\Models\HQM_SAN_PHAM;
use App\Models\HQM_LOAI_SAN_PHAM;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HQM_SAN_PHAMController extends Controller
{
    // CRUD

    // GET:Read all
    public function hqmList()
    {
        $hqmSanPhams = HQM_SAN_PHAM::where('hqmTrangThai',0)->get();

        return view('hqmAdmins.hqmSanPham.hqm-List',['hqmSanPhams'=>$hqmSanPhams]);
    }
    //Create
    public function hqmCreate()
    {
        //Doc du lieu tu bang hqm_loai_san_pham
        $hqmLoaiSanPhams = HQM_LOAI_SAN_PHAM::all();
        return view ('hqmAdmins.hqmSanPham.hqm-Create',['hqmLoaiSanPhams'=>$hqmLoaiSanPhams]);
    }
    public function hqmCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'hqmMaSanPham' => 'required|unique:hqm_SAN_PHAM,hqmMaSanPham',
            'hqmTenSanPham' => 'required|string|max:255',
            'hqmHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Kiểm tra hình ảnh và loại định dạng
            'hqmSoLuong' => 'required|numeric|min:1',
            'hqmDonGia' => 'required|numeric',
            'hqmMaLoai' => 'required|exists:HQM_LOAI_SAN_PHAM,id',
            'hqmTrangThai' => 'required|in:0,1',
        ]);
    
        // Khởi tạo đối tượng vtd_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
        $hqmSanPham = new HQM_SAN_PHAM;
        $hqmSanPham->hqmMaSanPham = $request->hqmMaSanPham;
        $hqmSanPham->hqmTenSanPham = $request->hqmTenSanPham;
    
        // Kiểm tra nếu có tệp hình ảnh
        if ($request->hasFile('hqmHinhAnh')) {
            // Lấy tệp hình ảnh
            $file = $request->file('hqmHinhAnh');
    
            // Kiểm tra nếu tệp hợp lệ
            if ($file->isValid()) {
                // Tạo tên tệp dựa trên mã sản phẩm
                $fileName = $request->hqmMaSanPham . '.' . $file->extension();
    
                // Lưu tệp vào thư mục public/img/san_pham
                $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham
    
                // Lưu đường dẫn vào cơ sở dữ liệu
                $hqmSanPham->hqmHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn tương đối trong CSDL
            }
        }
    
        // Lưu các thông tin còn lại vào cơ sở dữ liệu
        $hqmSanPham->hqmSoLuong = $request->hqmSoLuong;
        $hqmSanPham->hqmDonGia = $request->hqmDonGia;
        $hqmSanPham->hqmMaLoai = $request->hqmMaLoai;
        $hqmSanPham->hqmTrangThai = $request->hqmTrangThai;
    
        // Lưu dữ liệu vào cơ sở dữ liệu
        $hqmSanPham->save();
    
        // Chuyển hướng người dùng về trang danh sách sản phẩm
        return redirect()->route('hqmadmins.hqmsanpham');
    }

    public function hqmDetail($id)
    {
        // Tìm sản phẩm theo ID
        $hqmSanPham = HQM_SAN_PHAM::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('hqmAdmins.hqmSanPham.hqm-Detail', ['hqmSanPham' => $hqmSanPham]);
    }

    public function hqmEdit($id)
    {
            // Tìm sản phẩm theo ID
        $hqmSanPham = HQM_SAN_PHAM::findOrFail($id);

        // Lấy tất cả các loại sản phẩm từ bảng HQM_LOAI_SAN_PHAM
        $hqmLoaiSanPham = HQM_LOAI_SAN_PHAM::all();

        // Trả về view với dữ liệu sản phẩm và loại sản phẩm
        return view('hqmadmins.hqmsanpham.hqm-Edit', [
            'hqmSanPham' => $hqmSanPham,
            'hqmLoaiSanPham' => $hqmLoaiSanPham
        ]);
    }
    
    public function hqmEditSubmit(Request $request)
    {
        $validationDate = $request->validate([
            'hqmMaSanPham'=>'required',
            'hqmTenSanPham'=>'required',
            'hqmHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hqmSoLuong' => 'required|integer',
            'hqmDonGia' => 'required|numeric',
            'hqmMaLoai' => 'required|max:10',
            'hqmTrangThai' => 'required|in:0,1',
        ]);

        // ghi de du lieu xuong db
        $hqmSanPham = HQM_SAN_PHAM::find($request->id);

        $hqmSanPham->hqmMaSanPham = $request->hqmMaSanPham;
        $hqmSanPham->hqmTenSanPham = $request->hqmTenSanPham;
        $hqmSanPham->hqmHinhAnh = $request->hqmHinhAnh;
        $hqmSanPham->hqmSoLuong = $request->hqmSoLuong;
        $hqmSanPham->hqmDonGia = $request->hqmDonGia;
        $hqmSanPham->hqmMaLoai = $request->hqmMaLoai;
        $hqmSanPham->hqmTrangThai = $request->hqmTrangThai;

        if ($request->hasFile('hqmHinhAnh')) 
        {
            // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
            if ($hqmSanPham->hqmHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $hqmSanPham->hqmHinhAnh)) {
                // Xóa file cũ nếu tồn tại
                Storage::disk('public')->delete('img/san_pham/' . $hqmSanPham->hqmHinhAnh);
            }
            // Lưu hình ảnh mới
            $imagePath = $request->file('hqmHinhAnh')->store('img/san_pham', 'public');
            $hqmSanPham->hqmHinhAnh = $imagePath;
        }

        $hqmSanPham->save();

        return redirect()->route('hqmadmins.hqmsanpham');
    }


    public function hqmDelete($id)
    {
        $hqmSanPham = HQM_SAN_PHAM::find($id);
        $hqmSanPham->delete();
        return redirect()->route('hqmadmins.hqmsanpham');
    }
}
