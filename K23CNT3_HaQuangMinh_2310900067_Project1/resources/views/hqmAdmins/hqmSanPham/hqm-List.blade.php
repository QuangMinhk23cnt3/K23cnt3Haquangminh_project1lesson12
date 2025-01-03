@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')

@section ('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h2>Danh sach san pham</h2>
                    <a href="{{route('hqmadmins.hqmsanpham.hqmcreate')}}" class="btn btn-success">Them moi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ma San Pham</th>
                        <th>Ten San Pham</th>
                        <th>Hinh Anh</th>
                        <th>So Luong</th>
                        <th>Don Gia</th>
                        <th>Trang thai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($hqmSanPhams as $item)
                        <tr>
                            <td class="text-centre">{{$loop->iteration}}</td>
                            <td>{{$item->hqmMaSanPham}}</td>
                            <td>{{$item->hqmTenSanPham}}</td>
                            <td class="text-center" style="height: 100px;">
                                <img src="{{ asset('storage/' . $item->hqmHinhAnh) }}" alt="Sản phẩm {{ $item->hqmMaSanPham }}" class="img-fluid" style="max-height: 80px;">
                            </td>
                            <td>{{$item->hqmSoLuong}}</td>
                            <td>{{$item->hqmDonGia}}</td>
                            <td>
                                @if($item->hqmTrangThai == 0)
                                    <span class="badge bg-success">Hiển Thị</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('hqmadmins.hqmsanpham.hqmdetail', $item->id) }}" class="btn btn-success btn-sm" title="Xem">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('hqmadmins.hqmsanpham.hqmedit', $item->id) }}" class="btn btn-warning btn-sm" title="Chỉnh sửa">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="/hqmadmins/hqm-san-pham/hqm-delete" class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Bạn muốn xóa Mã sản phẩm này không? ID: {{ $item->id }}');" title="Xóa">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
