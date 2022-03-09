<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{url('admins/')}}/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{url('admins/')}}/css/app.css" rel="stylesheet">
    <link type="text/css" href="{{url('admins/')}}/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{url('admins/')}}/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="{{url('admins/')}}/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{url('admins/')}}/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="{{url('admins/')}}/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133433427-1');
</script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '327167911228268');
  fbq('track', 'PageView');
</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=327167911228268&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body class="layout-login">
    <div class="layout-login__overlay"></div>
    <div class="layout-login__form bg-white" data-simplebar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src="{{url('admins/')}}/images/logo/color.png" width="100" alt="Stack">
            </a>
        </div>

        <h4 class="m-0">Welcome back!</h4>
        <p class="mb-5">Login to access your Stack Account </p>
        {{-- @if(isset(Auth::user()->email))
            <script>window.location="/admin/dashboard"</script>
        @endif --}}
        @if($message=Session::get('admin_login'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
        @endif
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @if(Session()->has('login_error'))
        <div class="alert alert-danger">
            <ul>

                <li>{{Session()->has('login_error')}}</li>

            </ul>
        @endif
        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="text-label" for="email_2">Email Address:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="password_2">Password:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="remember">
                    <label class="custom-control-label" for="remember">Remember me</label>
                </div>
            </div> --}}
            <div class="form-group text-center">
                <button class="btn btn-primary mb-5" type="submit">Login</button><br>
                <a href="">Forgot password?</a>
            </div>
        </form>
    </div>


    <!-- jQuery -->
    <script src="{{url('admins/')}}/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{url('admins/')}}/vendor/popper.min.js"></script>
    <script src="{{url('admins/')}}/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="{{url('admins/')}}/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{url('admins/')}}/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{url('admins/')}}/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="{{url('admins/')}}/js/toggle-check-all.js"></script>
    <script src="{{url('admins/')}}/js/check-selected-row.js"></script>
    <script src="{{url('admins/')}}/js/dropdown.js"></script>
    <script src="{{url('admins/')}}/js/sidebar-mini.js"></script>
    <script src="{{url('admins/')}}/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{url('admins/')}}/js/app-settings.js"></script>





</body>

</html>