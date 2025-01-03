@extends('_layouts.admins._master')
@section('title','Tao Moi Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('hqmadmins.hqmkhachhang.hqmcreatesubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="hqmMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="hqmMaKhachHang" name="hqmMaKhachHang" value="{{ old('hqmMaKhachHang') }}" >
                                @error('hqmMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="hqmHoTenKhachHang" name="hqmHoTenKhachHang" value="{{ old('hqmHoTenKhachHang') }}" >
                                @error('hqmHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="hqmEmail" name="hqmEmail" value="{{ old('hqmEmail') }}" >
                                @error('hqmEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="hqmMatKhau" name="hqmMatKhau" value="{{ old('hqmMatKhau') }}" >
                                @error('hqmMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="hqmDienThoai" name="hqmDienThoai" value="{{ old('hqmDienThoai') }}" >
                                @error('hqmDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="hqmDiaChi" name="hqmDiaChi" value="{{ old('hqmDiaChi') }}" >
                                @error('hqmDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="hqmNgayDangKy" name="hqmNgayDangKy" value="{{ old('hqmNgayDangKy') }}" >
                                @error('hqmNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0" checked/>
                                    <label for="hqmTrangThai1"> Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai1" name="hqmTrangThai" value="1"/>
                                    <label for="hqmTrangThai0">Tạm Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai2" name="hqmTrangThai" value="2"/>
                                    <label for="hqmTrangThai0">Khóa</label>
                                </div>
                                @error('hqmTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('hqmadmins.hqmkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
