@extends('_layouts.admins._master')
@section('title','Sua thong tin loai san pham')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
           
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex w-100 justify-content-between">
            </div>
            <form action="{{route('hqmadmins.hqmloaisanpham.hqmEditSubmit')}}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$hqmLoaiSanPham->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sua thong tin loai san pham</h2>
                        </div>

                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="hqmMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                value="{{$hqmLoaiSanPham->hqmMaLoai}}"
                            id="hqmMaLoai" name="hqmMaLoai" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                value="{{$hqmLoaiSanPham->hqmTenLoai}}"
                            id="hqmTenLoai" name="hqmTenLoai" />
                        </div>
                    </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="hqmTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                  <input type="radio"  id="hqmTrangThai1" name="hqmTrangThai" value="1"
                                  checked />
                                  <label for="hqmTrangThai">hien thi</label>
                                    &nbsp;
                                  <input type="radio" id="hqmTrangThai0" name="hqmTrangThai" value="0" />   
                                  <label for="hqmTrangThai0">khóa</label> 
                                </div>
                            </div>
                        </div>


                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{route('hqmAdmins.hqmLoaiSanPham')}}"class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection