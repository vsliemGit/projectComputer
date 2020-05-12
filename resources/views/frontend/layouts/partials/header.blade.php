<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Uy tín & chất lượng là tiêu chí hàng đầu
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						@if(!isset($auth))
						<a href="{{ route('getLogin') }}" class="flex-c-m trans-04 p-lr-25">
							Đăng nhập
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Đăng Ký
						</a>
						@else
							@if(isset($auth))
								<a href="" class="flex-c-m trans-04 p-lr-25">
									{{$auth->nv_hoTen}}
								</a>
								<a href="{{ route('sanpham.index') }}" class="flex-c-m trans-04 p-lr-25">
									Trang quản trị
								</a>

								<a href="{{ route('logout') }}" class="flex-c-m trans-04 p-lr-25">
									Đăng xuất
								</a>
                            @endif
						@endif
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container" >
					
					<!-- Logo desktop -->		
					<a href="{{ route('frontend.home') }}" class="logo">
						<img src="{{ asset('storage/img/logo1.png') }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="{{ Request::is('') ? 'active-menu' : '' }}">
								<a href="{{ route('frontend.home') }}">Trang chủ</a>
							</li>

							<li class="label1 {{ Request::is('san-pham') ? 'active-menu' : '' }}" data-label1="hot">
								<a href="{{ route('frontend.product') }}">Sản phẩm</a>
							</li>

							<li class=" {{ Request::is('gio-hang') ? 'active-menu' : '' }}" >
								<a href="{{ route('frontend.cart') }}">Giỏ hàng</a>
							</li>

							<li class="{{ Request::is('gioi-thieu') ? 'active-menu' : '' }}">
								<a href="{{ route('frontend.about') }}">Giới thiệu</a>
							</li>

							<li class="{{ Request::is('lien-he') ? 'active-menu' : '' }}">
								<a href="{{ route('frontend.contact') }}">Liên hệ</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
						<!-- Hiển thị nút summart cart -->
						<ngcart-summary class="js-show-cart" template-url="{{ asset('vendor/ngCart/template/ngCart/summary.html') }}"></ngcart-summary>
					</div>
				</nav>
		</div>	
	</div>

	</div>
		<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{ asset('theme/cozastore/images/icons/icon-close2.png') }}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15" action="{{ route('frontend.search') }}" method="GET">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="tuKhoa" placeholder="Search...">
				</form>	
			</div>
		</div>
	</header>