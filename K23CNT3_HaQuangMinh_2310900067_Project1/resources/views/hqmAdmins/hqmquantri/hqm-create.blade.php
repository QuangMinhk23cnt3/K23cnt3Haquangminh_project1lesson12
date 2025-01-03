
@extends('_layouts.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('hqmadmins.hqmquantri.hqmcreatesubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="hqmTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="hqmTaiKhoan" name="hqmTaiKhoan" required>
                @error('hqmTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="hqmMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="hqmMatKhau" name="hqmMatKhau" required>
                @error('hqmMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="hqmTrangThai">Trạng Thái</label>
                <select name="hqmTrangThai" id="hqmTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm</button>
            <a href="{{route('hqmadmins.hqmquantri')}}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
