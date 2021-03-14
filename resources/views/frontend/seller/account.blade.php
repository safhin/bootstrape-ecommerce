@extends('frontend.layouts.app')

@section('content')
       <!-- ========================= SECTION PAGETOP ========================= -->
       <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title-page">Seller Dashboard</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <form action="{{ route('seller.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-light">Logout</button>
                    </form>
                    {{-- <a class="btn btn-light btn-lg">Logout</a> --}}
                    <a class="btn btn-primary ml-2"><i class="fa fa-plus-circle"></i> Create Product</a>
                </div>
            </div>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

    <section class="section-content bg padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-sm-3">
                    <div class="card card-filter">
                        <article class="card-group-item seller-profile">
                            <div class="user-profile">
                                <img src="{{ asset('frontend/images/user.jpg') }}" alt="">
                            </div>
                            <h5>Zahid Hasan</h5>
                            <button class="btn btn-success">Edit Profile</button>
                        </article>

                        <article class="card-group-item seller-settings">
                            <ul>
                                <li><a href=""><i class="fa fa-cog"></i> Logout</a></li>
                                <li><a href=""><i class="fa fa-power-off"></i> Delete Accout</a></li>
                            </ul>
                        </article>
                    </div>
                    <!-- card.// -->
                </aside>
                <!-- col.// -->
                <main class="col-sm-9">
                    <article class="card card-product">
                        <div class="card-body">
                            <div class="row">
                                <aside class="col-sm-3">
                                    <div class="img-wrap"><img src="{{ asset('frontend/images/items/2.jpg') }}"></div>
                                </aside>
                                <!-- col.// -->
                                <article class="col-sm-6">
                                    <h4 class="title"> Ut wisi enim ad minim veniam  </h4>
                                    <div class="rating-wrap  mb-2">
                                        <ul class="rating-stars">
                                            <li style="width:80%" class="stars-active">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                                </article>
                                <!-- col.// -->
                                <aside class="col-sm-3 border-left">
                                    <div class="action-wrap">
                                        <div class="price-wrap h4">
                                            <span class="price"> $56 </span>
                                            <del class="price-old"> $98</del>
                                        </div>
                                        <!-- info-price-detail // -->
                                        <p class="text-success">Free shipping</p>
                                        <br>
                                        <p>
                                            <a href="#" class="btn btn-primary"> Buy now </a>
                                            <a href="#" class="btn btn-secondary"> Details  </a>
                                        </p>
                                    </div>
                                    <!-- action-wrap.// -->
                                </aside>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                        </div>
                        <!-- card-body .// -->
                    </article>
                </main>
                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection