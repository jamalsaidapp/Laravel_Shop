@extends('Layouts.frontend')
@section('content')
    <!-- breadcrumb start -->
    <div id="app" class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Boutique</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn"><span
                                                            class="filter-btn btn btn-theme"><i class="fa fa-filter"
                                                                                                aria-hidden="true"></i> Filter</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">
                                                        <div class="search-count">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="/frontend/assets/images/icon/2.png" alt=""
                                                                         class="product-2-layout-view"></li>
                                                                <li><img src="/frontend/assets/images/icon/3.png" alt=""
                                                                         class="product-3-layout-view"></li>
                                                                <li><img src="/frontend/assets/images/icon/4.png" alt=""
                                                                         class="product-4-layout-view"></li>
                                                                <li><img src="/frontend/assets/images/icon/6.png" alt=""
                                                                         class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page
                                                                </option>
                                                                <option value="Low to High">50 Products Par Page
                                                                </option>
                                                                <option value="Low to High">100 Products Par Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                @foreach($products as $product)
                                                    <div class=" col-lg-4 col-md-3 col-xs-6 col-grid-box">
                                                        <div class="ratio_asos game-product">
                                                            <div class="product-box border">
                                                                <div class="img-wrapper">
                                                                    <div class="lable-block">
                                                                        @if($product->sale)
                                                                            <span class="lable3">new</span>
                                                                        @endif
                                                                        @if($product->new)
                                                                            <span class="lable4">onsale</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="front">
                                                                        <a href="/products/{{$product->slug}}">
                                                                            @foreach($product->images as $img)
                                                                                @if($img->is_main)
                                                                                    <img src="{{$img->path}}"
                                                                                         class="img-fluid blur-up lazyload bg-img"
                                                                                         alt="">
                                                                                @endif
                                                                            @endforeach


                                                                        </a>
                                                                    </div>
                                                                    <product-action
                                                                        :product-id="{{ $product->id }}"></product-action>
                                                                </div>
                                                                <div class="product-detail text-center">
                                                                    <a href="#">
                                                                        <h5>{{$product->name}}</h5>
                                                                    </a>
                                                                    <h4 class="mt-1 text-theme">{{$product->price}}{{$config->shop_currency}}
                                                                        <del>{{$product->old_price}}</del>
                                                                    </h4>
                                                                    <div class="rating mt-1"><i class="fa fa-star"></i>
                                                                        <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i>
                                                                    </div>

                                                                    <p>{{$product->discription}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                                         aria-label="Previous"><span
                                                                            aria-hidden="true"><i
                                                                                class="fa fa-chevron-left"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link"
                                                                                                href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                                         href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                                         href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                                         aria-label="Next"><span
                                                                            aria-hidden="true"><i
                                                                                class="fa fa-chevron-right"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                                                                             aria-hidden="true"></i> back</span>
                            </div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="zara">
                                            <label class="form-check-label" for="zara">zara</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="vera-moda">
                                            <label class="form-check-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="forever-21">
                                            <label class="form-check-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="roadster">
                                            <label class="form-check-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="only">
                                            <label class="form-check-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="wrapper mt-3">
                                        <div class="range-slider">
                                            <input type="text" class="js-range-slider" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                        <!-- side-bar single product slider start -->
                        <div class="theme-card">
                            <h5 class="title-border">new product</h5>
                            <div class="offer-slider slide-1">
                                <div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/1.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/011.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/16.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="/frontend/assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a
                                                href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner">
                            <a href="#"><img src="/frontend/assets/images/side-banner.png"
                                             class="img-fluid blur-up lazyload"
                                             alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection

