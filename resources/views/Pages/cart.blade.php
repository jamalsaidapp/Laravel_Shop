@extends('Layouts.frontend')

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Panier</h2>-
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                            <li class="breadcrumb-item active">Panier</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 table-responsive-xs">
                    <cart></cart>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="/shop" class="btn btn-solid">continuer mes achats</a></div>
                <div class="col-6"><a href="/checkout" class="btn btn-solid">caisse</a></div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
