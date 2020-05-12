{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.index` --}}
@extends('frontend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.index` --}}
@section('title')
LATOP - Chi tiết sản phẩm
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.index` --}}
@section('main-content')

@include('frontend.widgets.product-info', ['sp' => $sp, 'ctsp' => $ctsp, 'hinhanhlienquan' => $danhsachhinhanhlienquan])
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.index` --}}
@section('custom-scripts')
@endsection