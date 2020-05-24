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
						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
					</div>
				</nav>
		</div>	
	</div>
	</div>

	    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{ route('frontend.home') }}"><img src="{{ asset('storage/img/logo1.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <!-- Hiển thị nút summart cart -->
			<ngcart-summary class="js-show-cart" template-url="{{ asset('vendor/ngCart/template/ngCart/summary_mobile.html') }}"></ngcart-summary>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Uy tín & chất lượng là tiêu chí hàng đầu
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>
                   @if(!isset($auth))
                    <a href="{{ route('getLogin') }}" class="flex-c-m p-lr-10 trans-04">
                        Đăng nhập
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Đăng kí
                    </a>
                    @else
							@if(isset($auth))
		                    <a href="#" class="flex-c-m p-lr-10 trans-04">
		                        {{$auth->nv_hoTen}}
		                    </a>
		                    <a href="{{ route('sanpham.index') }}" class="flex-c-m p-lr-10 trans-04">
		                        Trang quản trị
		                    </a>
		                    <a href="{{ route('logout') }}" class="flex-c-m p-lr-10 trans-04">
		                        Đăng xuất
		                    </a>
		                    @endif
					@endif
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="">Homepage 1</a></li>
                    <li><a href="">Homepage 2</a></li>
                    <li><a href="">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="{{ route('frontend.home') }}">Trang chủ</a>
            </li>

            <li>
                <a href="{{ route('frontend.product') }}" class="label1 rs1" data-label1="hot">Sản phẩm</a>
            </li>

            <li>
                <a href="{{ route('frontend.cart') }}">Giả hàng</a>
            </li>

            <li>
                <a href="{{ route('frontend.about') }}">Giới thiệu</a>
            </li>

            <li>
                <a href="{{ route('frontend.contact') }}">Liên hệ</a>
            </li>
        </ul>
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