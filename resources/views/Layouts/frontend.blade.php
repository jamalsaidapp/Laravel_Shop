<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon/1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>{{$config->shop_name}}</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/font-awesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/bootstrap.css')}}">

    <!-- Price range icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/price-range.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custom.css')}}">

    <!-- Scripts -->
    @vite( 'resources/js/app.js')
    <script>window.require = () => {
        }</script>


</head>
<body class="theme-color-19">
<div id="app">
    @include('components.theme.navbar')

    @yield('content')

    @include('components.theme.footer')

    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" alt=""
                                                             class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                                                                           class="btn quantity-left-minus"
                                                                                                           data-type="minus"
                                                                                                           data-field=""><i
                                                        class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                   value="1"> <span class="input-group-prepend"><button type="button"
                                                                                                        class="btn quantity-right-plus"
                                                                                                        data-type="plus"
                                                                                                        data-field=""><i
                                                        class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a
                                        href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->
</div>


<!-- latest jquery-->
<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- fly cart ui jquery-->
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>

<!-- exitintent jquery-->
<script src="{{asset('frontend/assets/js/jquery.exitintent.js')}}"></script>
<script src="{{asset('frontend/assets/js/exit.js')}}"></script>

<!-- menu js-->
<script src="{{asset('/frontend/assets/js/menu.js')}}"></script>

<!-- price range js -->
<script src="{{asset('/frontend/assets/js/price-range.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('frontend/assets/js/bootstrap-notify.min.js')}}"></script>

<!-- Zoom js-->
<script src="{{asset('frontend/assets/js/jquery.elevatezoom.js')}}"></script>

<!-- sticky cart bottom js-->
<script src="{{asset('frontend//assets/js/sticky-cart-bottom.js')}}"></script>

<!-- Fly cart js-->
<script src="{{asset('frontend/assets/js/fly-cart.js')}}"></script>


<script>

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

<!-- slick js-->
<script src="{{asset('frontend/assets/js/slick.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('frontend/assets/js/theme-setting.js')}}"></script>
<script type="module" src="{{asset('frontend/assets/js/script.js')}}"></script>


</body>
</html>
