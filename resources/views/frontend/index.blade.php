{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.index` --}}
@extends('frontend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.index` --}}
@section('title')
LATOP - Trang Chủ
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.index` --}}
@section('main-content')
<div class="container text-center">
    <h1>{{ __('WELCOME TO LATOP') }}</h1>
</div>

<!-- Slider -->
@include('frontend.widgets.homepage-slider')

<!-- Banner -->
@include('frontend.widgets.homepage-banner', [$data = $top_3_sp])

<!-- Product -->
@include('frontend.widgets.product-list', [$data = $ds_sp])

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.index` --}}
@section('custom-scripts')
@endsection