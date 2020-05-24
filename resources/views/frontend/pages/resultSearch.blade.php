{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.index` --}}
@extends('frontend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.index` --}}
@section('title')
LATOP - Kết quả tìm kiếm
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.index` --}}
@section('main-content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('theme/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        RESULT SEARCH
    </h2>
</section>
<hr><hr><hr>
<section>
     <!-- Container -->
     <div class="container"> <!-- Container -->
                <h3>Từ khóa tìm kiếm : <strong>{{ $tuKhoa }}</strong></h3>
                <br>     
                <h4> <i>Đã tìm được</i> <div style="color: red; display: inline;">{{count($result)}}</div> <i>sản phẩm</i></h4>
                <br><br><br>
                <div class="row isotope-grid">
                @foreach($result as $index=>$sp)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item sp-{{ $sp->sp_ma }}">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" alt="IMG-PRODUCT">

							<a href="{{ route('frontend.productDetail', ['id' => $sp->sp_ma]) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Xem thông tin
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{ route('frontend.productDetail', ['id' => $sp->sp_ma]) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Tên: <span style="color: blue;"> {{ $sp->sp_ten }} </span>
								</a>

								<span class="stext-105 cl3">
									Giá: &nbsp <div style="color: red; float:right" >
												<% 	{{ $sp->sp_giaBan }} | currency : '$' : 0 %>
												</div>
                                </span>
                                
                                <span class="stext-105 cl3">
									HSX:  {{ $sp->ctsp_hang }}
								</span>
							</div>
						</div>
					</div>

					<!-- Modal quick view -->
				</div>
                @endforeach
			</div>
        </div>
    <!-- End Container -->
</section>
        
@endsection