<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Các custom style của Login Form -->
  <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('images_formLogin/icons/favicon.ico')}}"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_formLogin/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts_formLogin/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts_formLogin/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_formLogin/animate/animate.css')}}">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_formLogin/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_formLogin/animsition/css/animsition.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('vendor_formLogin/select2/select2.min.css')}}">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_formLogin/daterangepicker/daterangepicker.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css_formLogin/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_formLogin/main.css')}}">
  <!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('images_formLogin/bg-01.jpg')}}');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Admin Login
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="{{ route('postLogin' )}}">
          @csrf
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="Username" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="Password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>
          <div>
            @if(session('error'))
              <div style="color:red; padding: 20px;" role="alert">
              <strong>{{session('error')}}</strong>
              </div>
            @endif
          </div>
          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!-- Các script cho form login -->
  <!--==========================================================================================-->
  <script src="{{ asset('vendor_formLogin/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('vendor_formLogin/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('vendor_formLogin/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('vendor_formLogin/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('vendor_formLogin/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('vendor_formLogin/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('vendor_formLogin/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('vendor_formLogin/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('js_formLogin/main.js') }}"></script>
  <!-- endCript cho form login -->

  </body>
</html>