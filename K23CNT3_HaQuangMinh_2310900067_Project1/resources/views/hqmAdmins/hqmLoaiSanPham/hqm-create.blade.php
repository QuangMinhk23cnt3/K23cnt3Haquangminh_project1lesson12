@extends('_layouts.admins._master')
@section('title','Quản trị nội dung')

@section('content-body')
    <div class="container">
        <div class="row">
           
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('hqmadmins.hqmloaisanpham.hqmcreatesubmit')}}" method="post">
                
                <div class="card">
                <div class="card-header">
                    <h2>Thêm mới loại sản phẩm</h2>
                </div>

                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="hqmMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            id="hqmMaLoai" name="hqmMaLoai" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            id="hqmTenLoai" name="hqmTenLoai" />
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
                    <a href="{{route('hqmadmins.hqmloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection