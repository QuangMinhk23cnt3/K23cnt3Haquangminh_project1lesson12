
@extends('_layouts.admins._master')
@section('title','Xem THông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Khách Hàng</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$hqmkhachhang->hqmMaKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$hqmkhachhang->hqmHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$hqmkhachhang->hqmEmail}}
                            </p>

                            <p class="card-text">
                                <b>Mật Khẩu:</b>
                                {{$hqmkhachhang->hqmMatKhau}}
                            </p>

                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$hqmkhachhang->hqmDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$hqmkhachhang->hqmDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Đăng Ký:</b>
                                {{$hqmkhachhang->hqmNgayDangKy}}
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$hqmkhachhang->hqmTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('hqmadmins.hqmkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
