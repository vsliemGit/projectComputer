<!DOCTYPE html>
<html lang="en" ng-app="latopApp" >

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('theme/cozastore/images/icons/favicon.png') }}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/slick/slick.css') }}">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/Magnifi======cPopup/magnific-popup.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/css/main.css') }}">
	<!--===============================================================================================-->

	<!-- Các custom style của backend -->
	<link rel="stylesheet" href="{{ asset('theme/cozastore/css/custom-styles.css') }}">

	<!-- Các custom style dành riêng cho từng view -->
	@yield('custom-css')

	<!-- Style dành cho chatbot -->
	<link rel="stylesheet" href="{{ asset('cssChatbot/style.css') }}">
	<!-- End style dành cho chatbot-->


</head>

<body class="animsition">

	<!-- Header -->
	@include('frontend.layouts.partials.header')

	<!-- Cart -->
	@include('frontend.layouts.partials.cart')

	<!-- Content -->
	@yield('main-content')

	<!-- Footer -->
	@include('frontend.layouts.partials.footer')

	<!-- Back to top-->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Chat Messages-->
	<div class="chat-popup" id="myForm">
	  <form action="" class="form-container">
	    <img src="{{ asset('image/bot.png') }}" alt="Avatar" 
	    	style="display: inline;
				  max-width: 35px;
				  width: 35%;
				  margin: 0 3px 0px 5px;
				  border-radius: 50%;">
		<span class="status"></span>
	    <h3 style="color: #0000FF; display: inline;">Messager</h3>
	    <div id="mdiv" onclick="closeForm()"><div class="mdiv"><div class="md"></div></div></div>
	    <div id="boxChat" class="boxChat">
	    	<div class="ctn">
  				<img src="{{ asset('image/bot.png') }}" alt="Avatar">
  				<p>Xin chào! Tôi có thể giúp gì cho bạn?</p>
 				<span class="time-right" style="font-size: 10px;"><div id="time"></div></span>
			</div>
	    </div>
	    <!--<textarea placeholder="Type message.." name="msg" id="mess" required></textarea>-->
	    <div><input type="text" id="mess" name="msg" placeholder="Type message.."></div>
	    <span style="display: inline; margin: 0 5px 0 5px;">
	    	<button type="submit" id="btnSend" class="btn">Gửi</button>
	    	<button type="button" class="btn cancel" onclick="closeForm()">Đóng</button>
		</span>
	  </form>
	</div>

	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/animsition/js/animsition.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('theme/cozastore/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('theme/cozastore/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('theme/cozastore/js/slick-custom.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/parallax100/parallax100.js') }}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/isotope/isotope.pkgd.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/js/main.js') }}"></script>

	<!-- Include AngularJS -->
	<script src="{{ asset('vendor/angularjs/angular.min.js') }}"></script>
	<!-- Include thư viện quản lý Cart - AngularJS -->
	<script src="{{ asset('vendor/ngCart/dist/ngCart.js') }}"></script>
	
	<script>
	// Khởi tạo ứng dụng AngularJS, sử dụng plugin ngCart
	// Do Laravel và AngularJS đều sử dụng dấu `Double bracket` để render dữ liệu
	// => để tránh bị xung đột cú pháp, ta sẽ đổi cú pháp render dữ liệu của AngularJS thành <% %>
	var app = angular.module('latopApp', ['ngCart'], 
		function($interpolateProvider) {
			$interpolateProvider.startSymbol('<%');
			$interpolateProvider.endSymbol('%>');
		});
	</script>

	<!-- Script dành cho chatbot -->
	 <script type="text/javascript">
  		function getTime() {
  			var d = new Date();
  			document.getElementById("time").innerHTML =  d.getHours() +":"+d.getMinutes();
		}
  	</script>
	<button class="open-button" id="iconChat" onclick="openForm(), getTime()">Chat</button>

	<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		  document.getElementById("myBtn").style.display = "none";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
	</script>

	<!--Import thu vien Socketio -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js" integrity="sha256-yr4fRk/GU1ehYJPAs8P4JlTgu0Hdsp4ZKrx8bDEDC3I=" crossorigin="anonymous"></script>
	<!-- Import thu vien  javaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!--Script xu ly su kien -->
	<script type="text/javascript">
		$('#iconChat').on('click', function(){

			var socket = io.connect('http://localhost:1000')
			
			socket.on('connect', function(mess) {
				console.log('User connected!');
			});

			/*Gui mess*/
			$('#btnSend').on('click', function(e){
				e.preventDefault()
				socket.send($('#mess').val());
				var d = new Date();
				// var length_mess = $('#mess').val().length;
				// var size_div_mess = "";
				// if(length_mess <= 3){
				// 	size_div_mess = "width: 15%;";
    //             }else if(length_mess <= 8){
				// 	size_div_mess = "width: 40%;";
    //             }else if(length_mess > 8 && length_mess <= 11){
    //                 size_div_mess = "width: 50%;";
    //    			}else if(length_mess > 12 && length_mess <= 16){
    //                 size_div_mess = "width: 80%;";
    //             }else 
    //             	size_div_mess = "width: 90%;";
    //             console.log(length_mess);
    //             console.log(size_div_mess);

				var message = "<div class='ctn darker' style='display:inline-block;'>"
			              // +"<img src='{{ asset('image/person.png')}}' alt='Avatar' class='right'>"
			  			  +"<p>"+$('#mess').val()+"</p>"
			  			  +"<span class='time-left'>"
			  			  		+d.getHours() +":"+d.getMinutes()+"</span>"
						  +"</div>";
				$('#boxChat').append(message);
				$('#mess').val('');
				var messageBody = document.querySelector('#boxChat');
				messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
			});

			//Nhan mess

			socket.on('message', function(msg){
				var d = new Date();
				var message = "<div class='ctn' style='display:inline-block;'>"
  				+"<img src='{{ asset('image/bot.png')}}' alt='Avatar'>"
  				+"<p>"+msg+"</p>"
 				+"<span class='time-right' style='font-size: 10px;'>"
 						+d.getHours() +":"+d.getMinutes()+"</span>"
				+"</div>";
				$('#boxChat').append("<div class='ctn' id='wait-chat' style='display:inline-block; width:40%'><img src='{{ asset('image/bot.png')}}' alt='Avatar'><p class='loading' style:padding:20px 0 0 10px;></p></div>");
				var messageBody = document.querySelector('#boxChat');
					messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
				setTimeout(() => {
					document.getElementById("wait-chat").remove();
					$('#boxChat').append(message);
					var messageBody = document.querySelector('#boxChat');
					messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
				}, 2000);
			});

		} );

	</script>

	<!-- EndsCript dành cho chatbot -->

	
	<!-- Các custom script dành riêng cho từng view -->
	@yield('custom-scripts')
</body>

</html>