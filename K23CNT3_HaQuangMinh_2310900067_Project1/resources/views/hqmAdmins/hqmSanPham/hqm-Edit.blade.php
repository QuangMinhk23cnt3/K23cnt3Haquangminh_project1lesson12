@extends('_layouts.admins._master')
@section('title','Sua thong tin san pham')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
           
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex w-100 justify-content-between">
            </div>
            <form action="{{route('hqmadmins.hqmsanpham.hqmeditsubmit', $hqmSanPham->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$hqmSanPham->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sua thong tin san pham</h2>
                        </div>

                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="hqmMaSanPham" class="col-sm-2 col-form-label">Mã loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                value="{{$hqmSanPham->hqmMaSanPham}}"
                            id="hqmMaSanPham" name="hqmMaSanPham" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmTenSanPham" class="col-sm-2 col-form-label">Tên loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                value="{{$hqmSanPham->hqmTenSanPham}}"
                            id="hqmTenSanPham" name="hqmTenSanPham" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="hqmHinhAnh" class="form-label">Hình ảnh</label>
                        <input type="file" name="hqmHinhAnh" class="form-control">
                        @if($hqmSanPham->hqmHinhAnh)
                            <img src="{{ asset('storage/' . $hqmSanPham->hqmHinhAnh) }}" alt="Sản phẩm {{ $hqmSanPham->hqmMaSanPham }}" width="200" class="mt-2">
                        @endif
                        @error('hqmHinhAnh')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hqmSoLuong" class="form-label">Số lượng</label>
                        <input type="number" name="hqmSoLuong" class="form-control" value="{{ old('hqmSoLuong', $hqmSanPham->hqmSoLuong) }}">
                        @error('hqmSoLuong')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hqmDonGia" class="form-label">Đơn giá</label>
                        <input type="number" name="hqmDonGia" class="form-control" value="{{ old('hqmDonGia', $hqmSanPham->hqmDonGia) }}">
                        @error('hqmDonGia')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hqmMaLoai" class="form-label">Loại Danh Muc</label>
                        <select name="hqmMaLoai" id="hqmMaLoai" class="form-control">
                            @foreach ($hqmLoaiSanPham as $item)
                                <option value="{{ $item->id }}" 
                                    {{ old('hqmMaLoai', $hqmSanPham->hqmMaLoai) == $item->id ? 'selected' : '' }}>
                                    {{ $item->hqmTenLoai }}
                                </option>
                            @endforeach
                        </select>
                        @error('hqmMaLoai')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="hqmTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                  <input type="radio"  id="hqmTrangThai1" name="hqmTrangThai" value="1"
                                  checked />
                                  <label for="hqmTrangThai">Hiện Thị</label>
                                    &nbsp;
                                  <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0" />   
                                  <label for="hqmTrangThai0">Khoá</label> 
                                </div>
                            </div>
                        </div>


                <div class="card-footer">
                    <button class="btn btn-success">Lưu</button>
                    <a href="{{route('hqmadmins.hqmsanpham')}}"class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection