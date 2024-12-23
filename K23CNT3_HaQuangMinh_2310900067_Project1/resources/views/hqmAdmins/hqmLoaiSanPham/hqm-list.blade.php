@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Danh sach loai san pham</h1>
            </div>
        </div>

        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ma loai</th>
                        <th>Ten loai</th>
                        <th>Trang thai</th>
                        <th>Chuc nang</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($hqmLoaiSanPhams as $item)
                        <tr>
                            <td class="text-centre">{{$loop->iteration}}</td>
                            <td>{{$item->hqmMaLoai}}</td>
                            <td>{{$item->hqmTenLoai}}</td>
                            <td>{{$item->hqmTrangThai}}</td>
                            <td>
                                view / 
                                <a href="/hqm-admins/hqm-loai-san-pham/hqm-edit/{{$item->id}}">edit</a>
                                <a href="/hqm-admins/hqm-loai-san-pham/hqm-delete/{{$item->id}}"
                                    onclick="return confirm('Ban co chac chan xoa ko?')"    
                                >
                                delete</a>
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Chua co thong tin loai san pham</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection