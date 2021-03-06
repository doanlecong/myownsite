@extends('layouts.admin')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Danh Sách Các Tag</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Mới Tag</li>
        </ol>
    </nav>
@endsection

@section('contentAdmin')
    <div class="col-lg no-padding-left-right">
        <div class="card">
            <div class="card-header card_header_gradient">Thêm mới Tag</div>
            <div class="card-body">
                <form action="{{route('tag.store')}}" method="POST" enctype="application/x-www-form-urlencoded">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title" class="text-danger">Tiêu đề :</label>
                        <input class="form-control" name="name" type="text" placeholder="Nhập tiêu đề cho kiểu bài viết">
                    </div>
                    <div class="form-group">
                        <label for="title" class="text-danger">Viết Tắt :</label>
                        <input class="form-control" name="abbrev" type="text" placeholder="Tag Viết Tắt , Cẩn Thận Không Trùng">
                    </div>
                    <div class="form-group">
                        <label for="title" class="text-danger">Kiểu loại Tag :</label>
                        <select class="form-control" name="type_tag">
                            @foreach($arrTypeTag as $key => $type)
                                <option value="{{ $key }}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="text-danger"> Miêu tả:</label>
                        <textarea class="form-control" name="description" type="text" placeholder="Thông tin mô tả cho kiểu bài biết" rows="5"></textarea>
                    </div>
                    <div class="devider-line"></div>
                    <button class="btn btn-outline-primary" type="submit">Lưu Thông Tin</button>
                </form>
            </div>
        </div>
    </div>

@endsection