<!-- loader start -->
<div class="loader_skeleton">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar"
                                                              aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/assets/images/icon/logo.png')}}"
                                                 class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav>
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                                                     aria-hidden="true"></i></div>
                                        </li>
                                        @foreach($navbarItems as $item)
                                            <li>
                                                <a href="{{$item->path}}">{{$item->title}}
                                                    <div @class(['lable-nav' => $item->badge_value])>{{$item->badge_value}}</div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav d-none d-sm-block">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="{{asset('frontend/assets/images/icon/search.png')}}"
                                                      onclick="openSearch()"
                                                      class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                                                                    onclick="openSearch()"></i>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="{{asset('frontend/assets/images/icon/setting.png')}}"
                                                      class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-settings"></i></div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{asset('frontend/assets/images/icon/cart.png')}}"
                                                      class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="home-slider">
        <div class="home"></div>
    </div>
    <section class="collection-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ldr-bg">
                        <div class="contain-banner">
                            <div>
                                <h4></h4>
                                <h2></h2>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ldr-bg">
                        <div class="contain-banner">
                            <div>
                                <h4></h4>
                                <h2></h2>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container section-b-space">
        <div class="row section-t-space">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="first"></p>
                    <p class="second"></p>
                </div>
            </div>
            <div class="col-12">
                <div class="no-slider row">
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- loader end -->


<!-- header start -->
@include('components.base.header')
<!-- header end -->
