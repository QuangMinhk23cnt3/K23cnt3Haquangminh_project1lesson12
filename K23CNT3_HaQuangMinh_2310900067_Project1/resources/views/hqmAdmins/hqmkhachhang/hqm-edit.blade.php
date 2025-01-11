
@extends('_layouts.admins._master')
@section('title','Sửa Loại Khách Hàng')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the hqmMaKhachHang as a parameter -->
                <form action="{{ route('hqmadmins.hqmkhachhang.hqmeditsubmit', ['id' => $hqmkhachhang->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $hqmkhachhang->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="hqmMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="hqmMaKhachHang" name="hqmMaKhachHang" value="{{ $hqmkhachhang->hqmMaKhachHang}}" >
                                @error('hqmMaKhachHang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="hqmHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="hqmHoTenKhachHang" name="hqmHoTenKhachHang" value="{{ old('hqmHoTenKhachHang', $hqmkhachhang->hqmHoTenKhachHang) }}" >
                                @error('hqmHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="hqmEmail" name="hqmEmail" value="{{ old('hqmEmail', $hqmkhachhang->hqmEmail) }}" >
                                @error('hqmEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="hqmMatKhau" name="hqmMatKhau" value="{{ old('hqmMatKhau', $hqmkhachhang->hqmMatKhau) }}" >
                                @error('hqmMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="hqmDienThoai" name="hqmDienThoai" value="{{ old('hqmDienThoai', $hqmkhachhang->hqmDienThoai) }}" >
                                @error('hqmDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="hqmDiaChi" name="hqmDiaChi" value="{{ old('hqmDiaChi', $hqmkhachhang->hqmDiaChi) }}" >
                                @error('hqmDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hqmNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="hqmNgayDangKy" name="hqmNgayDangKy" value="{{ old('hqmNgayDangKy', $hqmkhachhang->hqmNgayDangKy) }}" >
                                @error('hqmNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="hqmTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0" {{ old('hqmTrangThai', $hqmkhachhang->hqmTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="hqmTrangThai0">Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai1" name="hqmTrangThai" value="1" {{ old('hqmTrangThai', $hqmkhachhang->hqmTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="hqmTrangThai1">Tạm Khóa</label>
                           
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai2" name="hqmTrangThai" value="2" {{ old('hqmTrangThai', $hqmkhachhang->hqmTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="hqmTrangThai0">Khóa</label>
                                </div>
                                @error('hqmTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('hqmadmins.hqmkhachhang') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

