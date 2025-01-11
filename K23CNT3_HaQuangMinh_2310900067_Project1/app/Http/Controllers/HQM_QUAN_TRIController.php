<?php

namespace App\Http\Controllers;
use App\Models\HQM_QUAN_TRI;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

use Illuminate\Http\Request;

class HQM_QUAN_TRIController extends Controller
{
    //get: login
    public function hqmLogin()
    {
        return view('HqmLogin.hqm-login');
    }
    //post: login 
    public function hqmLoginSubmit(Request $request)
    {
        $request->validate([
            'hqmTaiKhoan' => 'required|string',
            'hqmMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng vtd_QUAN_TRI
        $user = HQM_QUAN_TRI::where('hqmTaiKhoan', $request->hqmTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->hqmMatKhau, $user->hqmMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->hqmTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/hqm-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['hqmMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    public function hqmList()
    {
        $hqmQuanTris = HQM_QUAN_TRI::all(); // Lấy tất cả quản trị viên
        return view('hqmAdmins.hqmquantri.hqm-list', ['hqmQuanTris'=>$hqmQuanTris]);
    }
    public function hqmCreate()
    {
        return view('hqmAdmins.hqmquantri.hqm-create');
    }

    public function hqmCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'hqmTaiKhoan' => 'required|string|unique:hqm_quan_tri,hqmTaiKhoan',
            'hqmMatKhau' => 'required|string|min:6',
            'hqmTrangThai' => 'required|in:0,1', 
        ]);

        // Tạo bản ghi mới trong cơ sở dữ liệu
        $hqmquantri = new HQM_QUAN_TRI();
        $hqmquantri->hqmTaiKhoan = $request->hqmTaiKhoan;
        $hqmquantri->hqmMatKhau = Hash::make($request->hqmMatKhau); // Mã hóa mật khẩu
        $hqmquantri->hqmTrangThai = $request->hqmTrangThai;

        $hqmquantri->save();

        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('hqmadmins.hqmquantri')->with('success', 'Thêm quản trị viên thành công');
    }

    public function hqmDetail($id)
    {
        $hqmquantri = HQM_QUAN_TRI::where('id', $id)->first();
        return view('hqmadmins.hqmquantri.hqm-detail',['hqmquantri'=>$hqmquantri]);

    }

    public function hqmEdit($id)
    {
        $hqmquantri = HQM_QUAN_TRI::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
        if (!$hqmquantri) {
            return redirect()->route('hqmAdmins.hqmquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        return view('hqmAdmins.hqmquantri.hqm-edit', ['hqmquantri'=>$hqmquantri]);
    }

    public function hqmEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'hqmTaiKhoan' => 'required|string|unique:hqm_quan_tri,hqmTaiKhoan,' . $id,
            'hqmMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
            'hqmTrangThai' => 'required|in:0,1',
        ]);

        // Lấy quản trị viên cần sửa
        $hqmquantri = HQM_QUAN_TRI::find($id);
        if (!$hqmquantri) {
            return redirect()->route('hqmAdmins.hqmquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }

        // Cập nhật thông tin
        $hqmquantri->hqmTaiKhoan = $request->hqmTaiKhoan;
        if ($request->hqmMatKhau) {
            $hqmquantri->hqmMatKhau = Hash::make($request->hqmMatKhau); // Cập nhật mật khẩu nếu có
        }
        $hqmquantri->hqmTrangThai = $request->hqmTrangThai;
        $hqmquantri->save();

        return redirect()->route('hqmadmins.hqmquantri')->with('success', 'Cập nhật quản trị viên thành công');
    }

    public function hqmDelete($id)
    {
        $hqmquantri = HQM_QUAN_TRI::find($id); // Tìm quản trị viên cần xóa
        if (!$hqmquantri) {
            return redirect()->route('hqmadmins.hqmquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        $hqmquantri->delete(); // Xóa bản ghi

        return redirect()->route('hqmadmins.hqmquantri')->with('success', 'Xóa quản trị viên thành công');
    }
}
