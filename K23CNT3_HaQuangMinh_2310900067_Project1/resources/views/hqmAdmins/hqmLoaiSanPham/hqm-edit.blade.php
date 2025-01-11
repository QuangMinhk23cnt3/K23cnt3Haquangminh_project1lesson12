
@extends('_layouts.admins._master')
@section('title','Sửa Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the hqmMaLoai as a parameter -->
                <form action="{{ route('hqmadmins.hqmloaisanpham.hqmEditSubmit') }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $hqmLoaiSanPham->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="hqmMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="hqmMaLoai" name="hqmMaLoai" value="{{ $hqmLoaiSanPham->hqmMaLoai }}" >
                                @error('hqmMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="hqmTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="hqmTenLoai" name="hqmTenLoai" value="{{ old('hqmTenLoai', $hqmLoaiSanPham->hqmTenLoai) }}" >
                                @error('hqmTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="hqmTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="hqmTrangThai1" name="hqmTrangThai" value="1" {{ old('hqmTrangThai', $hqmLoaiSanPham->hqmTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="hqmTrangThai1">Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0" {{ old('hqmTrangThai', $hqmLoaiSanPham->hqmTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="hqmTrangThai0">Hiển Thị</label>
                                </div>
                                @error('hqmTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('hqmAdmins.hqmLoaiSanPham') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
