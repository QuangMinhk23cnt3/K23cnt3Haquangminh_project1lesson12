@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach loai san pham</h1>
                    <a href="{{route('hqmadmins.hqmloaisanpham.hqmcreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma loai</th>
                            <th>ten loai</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $hqmLoaiSanPhams  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->hqmMaLoai}}</td>
                                <td>{{$item->hqmTenLoai}}</td>
                                <td>{{$item->hqmTrangThai}}</td>
                                <td>
                                    <a href="/hqmadmins/hqm-loai-san-pham/hqm-detail/{{ $item->id }}" class="btn btn-success btn-sm" title="Xem">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/hqmadmins/hqm-loai-san-pham/hqm-edit/{{ $item->id }}" class="btn btn-primary btn-sm" title="Chỉnh sửa">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    
                                    <a href="/hqm-admins/hqm-loai-san-pham/hqm-delete/{{ $item->id }}" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Bạn muốn xóa Mã Loại này không? ID: {{ $item->id }}');" title="Xóa">
                                         <i class="fa-regular fa-trash-can"></i>
                                     </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5">chua co thong tin loai san pham</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
           </div>
        </div>
    </div>
@endsection