@extends('Layouts.frontend')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>product</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    <div><img alt="" class="img-fluid blur-up lazyload"
                                              src="/frontend/assets/images/pro3/1.jpg"></div>
                                    <div><img alt="" class="img-fluid blur-up lazyload"
                                              src="/frontend/assets/images/pro3/2.jpg"></div>
                                    <div><img alt="" class="img-fluid blur-up lazyload"
                                              src="/frontend/assets/images/pro3/27.jpg"></div>
                                    <div><img alt="" class="img-fluid blur-up lazyload"
                                              src="/frontend/assets/images/pro3/27.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-10 col-xs-12 order-up">
                        <div class="product-right-slick">
                            <div><img alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"
                                      src="/frontend/assets/images/pro3/1.jpg"></div>
                            <div><img alt="" class="img-fluid blur-up lazyload image_zoom_cls-1"
                                      src="/frontend/assets/images/pro3/2.jpg"></div>
                            <div><img alt="" class="img-fluid blur-up lazyload image_zoom_cls-2"
                                      src="/frontend/assets/images/pro3/27.jpg"></div>
                            <div><img alt="" class="img-fluid blur-up lazyload image_zoom_cls-3"
                                      src="/frontend/assets/images/pro3/27.jpg"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-description-box">
                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img alt="image" class="img-fluid" src="/frontend/assets/images/fire.gif">
                                        <span class="p-counter">37</span>
                                        <span class="lang">orders in last 24 hours</span>
                                    </li>
                                    <li>
                                        <img alt="image" class="img-fluid user_img"
                                             src="/frontend/assets/images/person.gif">
                                        <span class="p-counter">44</span>
                                        <span class="lang">active view this</span>
                                    </li>
                                </ul>
                            </div>
                            <h2>Women Pink Shirt</h2>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>The Model is wearing a white blouse from our stylist's collection, see the image for
                                    a mock-up of what the actual blouse would look like.</p>
                            </div>
                            <div class="single-product-tables border-product detail-section">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Febric:</td>
                                        <td>Chiffon</td>
                                    </tr>
                                    <tr>
                                        <td>Color:</td>
                                        <td>Red</td>
                                    </tr>
                                    <tr>
                                        <td>Material:</td>
                                        <td>Crepe printed</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">share it</h6>
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">100% SECURE PAYMENT</h6>
                                <div class="payment-card-bottom">
                                    <ul>
                                        <li>
                                            <a href="#"><img alt="" src="/frontend/assets/images/icon/visa.png"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img alt=""
                                                             src="/frontend/assets/images/icon/mastercard.png"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img alt="" src="/frontend/assets/images/icon/paypal.png"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img alt=""
                                                             src="/frontend/assets/images/icon/american-express.png"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img alt="" src="/frontend/assets/images/icon/discover.png"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-form-box">
                            <h4>
                                <del>$459.00</del>
                                <span>55% off</span></h4>
                            <h3>$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0 active"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div id="selectSize" class="addeffect-section product-description border-product">
                                <h6 class="product-title">Sales Ends In</h6>
                                <div class="timer">
                                    <p id="demo"></p>
                                </div>
                                <h6 class="product-title">select size</h6>
                                <div id="sizemodal" aria-hidden="true" aria-labelledby="exampleModalLabel"
                                     class="modal fade"
                                     role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 id="exampleModalLabel" class="modal-title">Sheer Straight Kurta</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                                        type="button"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><img alt=""
                                                                         class="img-fluid blur-up lazyload"
                                                                         src="/frontend/assets/images/size-chart.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="error-message">please select size</h6>
                                <div class="size-box">
                                    <ul>
                                        <li><a href="javascript:void(0)">s</a></li>
                                        <li><a href="javascript:void(0)">m</a></li>
                                        <li><a href="javascript:void(0)">l</a></li>
                                        <li><a href="javascript:void(0)">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button
                                                class="btn quantity-left-minus"
                                                data-field=""
                                                data-type="minus"
                                                type="button"><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input class="form-control input-number" name="quantity" type="text" value="1">
                                        <span class="input-group-prepend"><button class="btn quantity-right-plus"
                                                                                  data-field=""
                                                                                  data-type="plus" type="button"><i
                                                    class="ti-angle-right"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons"><a id="cartEffect"
                                                            class="btn btn-solid hover-solid btn-animation"
                                                            href="javascript:void(0)">add to
                                    cart</a> <a class="btn btn-solid"
                                                href="#">wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <single-product></single-product>
    <!-- Section ends -->
@endsection
