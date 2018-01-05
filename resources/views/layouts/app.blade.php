<!DOCTYPE html>
<html class="no-js" lang=""> 

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SathyChits - @yield('title')</title>
        <link rel="icon" type="image/ico" href="{{URL::to('/')}}/images/favicon.ico" />
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
        <!--/ modernizr -->




    </head>

      @php
      
            $theme = '';
            
            if(Auth::User() && Auth::User()->theme_id) {

                  $theme_id = Auth::User()->theme_id;
                  $theme_arr = $theme_model->find($theme_id);
                  $theme_name = $theme_arr->additional_theme_name;    
                  $file_extension = $theme_arr->file_extension;    
                  $file_type = $theme_arr->file_type;
                  $theme = $theme_name.'.'.$file_extension;
            } else {
                  
                  $theme_id = config('settings.theme')['default_theme_id'];
                  $theme_arr = $theme_model->find($theme_id);
                
                  $theme_name = $theme_arr->additional_theme_name;    
                  $file_extension = $theme_arr->file_extension;    
                  $file_type = $theme_arr->file_type;
                  $theme = $theme_name.'.'.$file_extension;
            }  

      @endphp
      @if($file_type == 1)
      <style>      
            body {
                background-image: url("{{ URL::to('/') }}/bg-images/{{$theme}}");
            } 
      </style>
      @elseif($file_type == 2)
      <div class="video-container" data-theme-id="light:video-grass">
            <video class="theme-video"  autoplay="true" loop="true" muted="true" playsinline="true" class="theme-video" data-theme-id="light:video-grass">
                  <source src="{{ URL::to('/') }}/bg-images/{{$theme}}" type="video/mp4">  
                  <source src="{{ URL::to('/') }}/bg-images/{{$theme}}" type="video/mp4">  
            </video>
      </div>
      @endif


   <!--  <body id="minovate" class="appWrapper"> -->
<body id="minovate" class="appWrapper hz-menu">
      
    <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
    <div id="wrap" class="animsition">


       

        <!-- Page wraper -->
   <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wrapper -->
        @include('layouts.topnavbar')
        @if(Auth::User())
            <button id="demo-set-btn" class="btn"><i class="fa fa-cog fa-4x"></i></button>
            @endif
            <div id="demo-set" class="demo-set">
                    <div id="demo-set-body" class="demo-set-body">
                        <div id="demo-set-alert"></div>
                        <div class="pad-hor bord-btm clearfix" style="background: url(http://noveruscreative.com/wp-content/uploads/2017/12/logo-background-1.png);background-size: cover;background-position: top;">
                            <div class="pull-right pad-top custom">
                                <button id="demo-set-btn1" class="btn">
                                    <i class="fa fa-close"></i>
                                </button>
                            </div>
                            <div class="media" style="background:transparent;">
                                <div class="media-left"  style="background:transparent;">
                                </div>
                                <div class="media-body"  style="background:transparent;">
                                    <h2 class="page-title" style="margin-top: 0px; color:#333;">Themes</h2>

                                    <!-- start -->
                                          <div class="row"  style="background:transparent;">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">

                  @php
                        $themes_arr = json_decode($theme_json_arr);
               

                  @endphp

                
                    <div class="ibox-content col-md-12 size" style="background:transparent;"> 
                        <div class="lightBoxGallery" >
                            @foreach($themes_arr as $key => $theme_data) 
                            
                            <div class="col-md-3 zoom"> 
                            @if($theme_data->file_type == 1)                    
                              <a class="theme_set" data-theme_id="{{$theme_data->theme_id}}" data-gallery="">
                                <img src="{{ URL::to('/') }}/bg-images/{{$theme_data->additional_theme_name}}.jpg" class="style" height="200px" width="230px">
                                <i class="fa fa-picture-o position" aria-hidden="true"></i>
                              </a> 
                            @else
                              <a class="theme_set" data-theme_id="{{$theme_data->theme_id}}" data-gallery="">
                                <img src="{{ URL::to('/') }}/bg-images/{{$theme_data->additional_theme_name}}.jpg" class="video-icon" height="200px" width="230px">
                                <i class="fa fa-play-circle position" aria-hidden="true"></i>
                              </a> 
                            @endif
                            </div>
                            

                            @endforeach
                      
                        </div>

                    </div>

                </div>
            </div>

            </div>
            <br>
            <br>
            <br>
            </div>
            </div>
            </div>

            </div>
            </div>
            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
        <!-- @include('layouts.footer') -->

  
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="{{URL::to('/')}}/js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="{{URL::to('/')}}/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="{{URL::to('/')}}/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="{{URL::to('/')}}/js/vendor/parsley/parsley.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="{{URL::to('/')}}/js/main.js"></script>
        <!--/ custom javascripts -->







        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');

            $(window).load(function() {
                $('.form1').parsley().subscribe('parsley:field:validate', function () {
                    if ($('.form1').parsley().isValid()) {
                       
                        $('.form1Submit').prop('disabled', false);
                    } else {
                        $('.form1Submit').prop('disabled', true);
                    }
                });

                $('.form1Submit').on('click', function() {
                    $('.form1').submit();
                });
            });


            var a=$("#demo-set"),
              n=($("#demo-set-icon"),$("#demo-set-btngo"),$("#container")),
              s=$("#mainnav-container"),
              t=$("#aside-container");
              if(a.length){var d=function(){for(var e=window.location.search.substring(1),a=e.split("&"),n=0;n<a.length;n++){var s=a[n].split("=");if("offcanvas"==s[0])return s[1]}return!1}();"push"!=d&&"slide"!=d&&"reveal"!=d||($(".mainnav-toggle").removeClass("push slide reveal").addClass(d),n.removeClass("mainnav-lg mainnav-sm").addClass("mainnav-out "+d));var a=$("#demo-set"),o=($("#demo-set-body"),$("#demo-set-btn"));$("html").on("click",function(e){a.hasClass("in")&&($(e.target).closest("#demo-set-body").length||a.removeClass("in"))}),o.on("click",function(){return a.toggleClass("in"),!1})};

          var a=$("#demo-set"),n=($("#demo-set-icon"),$("#demo-set-btn1go"),$("#container")),s=$("#mainnav-container"),t=$("#aside-container");if(a.length){var d=function(){for(var e=window.location.search.substring(1),a=e.split("&"),n=0;n<a.length;n++){var s=a[n].split("=");if("offcanvas"==s[0])return s[1]}return!1}();"push"!=d&&"slide"!=d&&"reveal"!=d||($(".mainnav-toggle").removeClass("push slide reveal").addClass(d),n.removeClass("mainnav-lg mainnav-sm").addClass("mainnav-out "+d));var a=$("#demo-set"),o=($("#demo-set-body"),$("#demo-set-btn1"));$("html").on("click",function(e){a.hasClass("in")&&($(e.target).closest("#demo-set-body").length||a.removeClass("in"))}),o.on("click",function(){return a.toggleClass("in"),!1})};

            @if(Auth::User())
            /* ajax to set theme*/
            $(".theme_set").click(function() {

                  var arr = {};
                  arr['_token'] = '{{csrf_token()}}';
                  arr['theme_id'] = $(this).attr('data-theme_id');
                  arr['user_id'] = '{{Auth::User()->id}}';

            // alert($(this).attr('data-theme_id'));
                  $.ajax({
                        method:"POST",
                        url:"{{url('set/theme')}}",
                        data: arr,
                        success:function(data) {
                             
                              setTimeout(function(){// wait for 5 secs(2)
                                   location.reload(); // then reload the page.(3)
                              }, 300); 
                             
                        }
                  });
            });
            @endif
        </script>
<style type="text/css">
      /* general settings popup start */
      #demo-set-btn,.demo-set
        {
            display:none;
        }
        @media (min-width:1200px)
        {
           
            .demo-set,.demo-set.in{
                transition:background-color .5s;
            }
            .demo-set{
                background-color:rgba(0,0,0,0);
                color:#5e5e5e;
                display:block;
                position:fixed;
                left:0;
                right:0;
                top:0;
                bottom:0;
                z-index:99999;
                direction:rtl;
                visibility:hidden;
                opacity: 0;

            }
            .demo-set.in{
              opacity: 1;
                /*display: block !important;*/
                visibility: visible;
                background-color:rgba(0,0,0,.45);
                transition:all .3s;
            }
            .effect~.demo-set .collapsing{
                transition-duration: .3s !important
            }
            .demo-set .mar-btm{
                margin-bottom:10px
            }
            .demo-set-body>.demo-set-content{
                padding:10px 5px 20px
            }
            .demo-set-body .icon-wrap{
            padding:7px
            }
            .demo-set-body{
                background-color:#fff;
                border-left:7px solid #34495e;
                position:relative;
                direction:ltr;
                margin-top:100px;
                max-width:1120px;
                max-height:600px;
                z-index:999;
                transform:translateX(1120px);
                transition:all .3s;
            }
            .demo-set.in .demo-set-body{
                transform:translateX(0);
                box-shadow:0 0 20px 1px rgba(0,0,0,.5);
                transition:all .3s;
            }
            #demo-set-btn{
                display:inline-block;
                background-color:#34495e;
                border-radius:7px 0 0 7px!important;
                color:#fff;
                border:0;
                position:fixed;
                right:0;
                top:160px;
                margin-left:-48px;
                box-shadow:none;
                z-index:99999;
                transition:all .3s;
            }
            #demo-set-btn i{
                font-size:25px;
                display:block;
                margin:5px 0;
                height:1em;
                animation-iteration-count:infinite !important;
                animation-duration:1.5s !important;
                animation-play-state:running
            }
            #demo-set-btn i:before{
                display:block;
                line-height:1em
            }
            .demo-set.in+#demo-set-btn
            {
            right:1120px;
            transition:all .3s;
            }
            .demo-set.in+#demo-set-btn i{
                animation-play-state:paused
            }
        }
i.fa.fa-cog.fa-4x {
  animation: fa-spin 2s infinite linear;
}
/* general settings popup end */
.video-container {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
    transform: translateZ(0px);
}
.theme-video {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
}
.theme-video {
    width: 100%;
    height: auto;
}


img.style {
  background: #607D8B !important;
  padding: 1px;
}

i.fa.fa-play-circle.position,i.fa.fa-picture-o.position {
  position: absolute;
  top: 45%;
  left: 47%;
  font-size: 25px;
  color: white;
  opacity: .6;
}

img.video-icon {
    padding: 1px;
    background: #607D8B;
}

.col-md-3.zoom:hover a img {
  moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.02);
  transition: 1s;
}

.col-md-3.zoom a img {
  transition: 1s;
}

.ibox-content.col-md-12.size {
  height: 400px;
  overflow-y: scroll;
}

.ibox-content.col-md-12.size::-webkit-scrollbar {
    width: 1em;
}
 
.ibox-content.col-md-12.size::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
.ibox-content.col-md-12.size::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}
</style>
@section('scripts')
@show
