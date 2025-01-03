@extends('_layouts.admins._master')
@section('title','Quản trị san pham')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('hqmadmins.hqmsanpham.hqmcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card">
                    <div class="card-header">
                        <h2>Thêm mới loại sản phẩm</h2>
                    </div>

                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="hqmMaSanPham" class="col-sm-2 col-form-label">Mã San Pham</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                value="{{old('hqmMaLoai')}}"
                                id="hqmMaSanPham" name="hqmMaSanPham" />
                            @error('hqmMaSanPham')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hqmTenSanPham" class="col-sm-2 col-form-label">Tên San Pham</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                value="{{old('hqmTenSanPham')}}"
                                id="hqmTenSanPham" name="hqmTenSanPham"/>
                            @error('hqmTenSanPham')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hqmHinhAnh" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" id="hqmHinhAnh" name="hqmHinhAnh" accept="image/*">
                            @error('hqmHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="hqmSoLuong" class="col-sm-2 col-form-label">So Luong</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control"
                                value="{{old('hqmSoLuong')}}"
                                id="hqmSoLuong" name="hqmSoLuong"/>
                            @error('hqmSoLuong')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hqmDonGia" class="col-sm-2 col-form-label">Don gia</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control"
                                value="{{old('hqmDonGia')}}"
                                id="hqmDonGia" name="hqmDonGia"/>
                            @error('hqmDonGia')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="hqmMaLoai" class="col-sm-2 col-form-label">Loại danh muc</label>
                            <div class="col-sm-10">
                                <select name="hqmMaLoai" id="hqmMaLoai" class="form-control">
                                    @foreach ($hqmLoaiSanPhams as $item)
                                        <option value="{{$item->hqmMaLoai}}">{{$item->hqmTenLoai}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hqmTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="hqmTrangThai1" name="hqmTrangThai" value="1"
                                checked/>
                                <label for="hqmTrangThai1">Hiển thị</label>
                                    &nbsp;
                                    <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0"/>
                                    <label for="hqmTrangThai0">Khóa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-success">Ghi lại</button>
                        <a href="{{route('hqmadmins.hqmsanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
