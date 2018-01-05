<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minovate - Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">





        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        
        <link rel="stylesheet" href="{{URL::to('/')}}/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/vendor/animate.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/js/vendor/animsition/css/animsition.min.css">


        <!-- project main css files -->
        <link rel="stylesheet" href="{{URL::to('/')}}/css/main.css">
        <!--/ stylesheets -->
        <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">


        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="{{URL::to('/')}}/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>



    </head>





    <body id="minovate" class="appWrapper">




        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
<div id="wrap" class="animsition">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="{{URL::to('/')}}/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="{{URL::to('/')}}/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


            });
        </script>
        <!--/ Page Specific Scripts -->





        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>