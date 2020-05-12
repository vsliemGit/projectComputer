@if(session('error'))
<?php

  echo '<script type="text/javascript">';
  echo "setTimeout(function () { swal({
			title: 'Thông báo!',
			text: 'Sản phẩm hiện chưa có thông tin. Chúng tôi sẽ cập nhật trong thời gian sớm nhất!',
			type: 'error',
			confirmButtonText: 'Cool'
 		 });";
  echo '}, 1000);</script>';
?>
@endif
<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Tất cả
					</button>
<!-- 
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".ctsp-HP">
						HP
					</button> -->
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<form action="{{ route('frontend.search') }}" method="GET">
					<div class="bor8 dis-flex p-l-15">
					
						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="tuKhoa" placeholder="Search">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
					
					</div>
					</form>	
				</div>
				

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="{{ route('frontend.product') }}" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="{{ route('frontend.sort', ['id' => 0]) }}" class="filter-link stext-106 trans-04">
										Giá: thấp -> cao
									</a>
								</li>

								<li class="p-b-6">
									<a href="{{ route('frontend.sort', ['id' => 1]) }}" class="filter-link stext-106 trans-04">
										Giá: cao -> thấp
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Giá
							</div>

							<ul>
								<li class="p-b-6">
									<a href="{{ route('frontend.product') }}" class="filter-link stext-106 trans-04">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="{{ route('frontend.findPrice1') }}" class="filter-link stext-106 trans-04">
										7 triệu -> 10 triệu
									</a>
								</li>

								<li class="p-b-6">
									<a href="{{ route('frontend.findPrice2') }}" class="filter-link stext-106 trans-04">
										10 triệu -> 20 triệu
									</a>
								</li>

								<li class="p-b-6">
									<a href="{{ route('frontend.findPrice3') }}" class="filter-link stext-106 trans-04">
										20 triệu trở lên
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Hãng
							</div>

							<ul>
								<li class="p-b-6">
									<a href="" class="filter-link stext-106 trans-04">
										DELL
									</a>
								</li>

								<li class="p-b-6">
									<a href="" class="filter-link stext-106 trans-04">
										HP
									</a>
								</li>

								<li class="p-b-6">
									<a href="" class="filter-link stext-106 trans-04">
										MACBOOK
									</a>
								</li>

								<li class="p-b-6">
									<a href="" class="filter-link stext-106 trans-04">
										ASUS
									</a>
								</li>
								<li class="p-b-6">
									<a href="" class="filter-link stext-106 trans-04">
										LENOVO
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="row isotope-grid">
                @foreach($data as $sp)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ">
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
									Tên sản phẩm: <div style="color: blue;"> {{ $sp->sp_ten }} </div>
								</a>

								<span class="stext-105 cl3">
									Giá: &nbsp <div style="color: red; float:right" >
												<% 	{{ $sp->sp_giaBan }} | currency : '$' : 0 %>
												</div>
								</span>
							</div>
						</div>
					</div>

					<!-- Modal quick view -->
				</div>
                @endforeach
			</div>
			<!-- Pagination -->
			@if($showPagination)
   				{{$data->links()}}
			@endif
			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		</div>
	</div>