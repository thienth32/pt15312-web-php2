@extends('layouts.client.main')
@section('main-content')
    <!-- Start of Primary Slider Section -->
    <section class="primary-slider-section mb0 pos-r">
        <div id="primary_slider" class="swiper-container slider-type-1">

            <!-- Slides -->
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{PUBLIC_URL . 'assets/images/slider/home-1/slide-1.jpg' }}" class="visually-hidden" alt="Slider Image">                          
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-1">
                                        <p class="promo-title"><span>limited edition</span> Sale Offer 20% Off This Week</p>
                                        <h1 class="main-title"><span>Pebona Amazing</span> <span>Sport Sneakers 2018</span></h1>
                                        <p class="subtitle">Light knit upper adapts to the shape of your foot for flexible and natural movement.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{PUBLIC_URL . 'assets/images/slider/home-1/slide-2.jpg' }}" class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-2">
                                        <p class="promo-title"><span>limited edition</span> Sale Offer 20% Off This Week</p>
                                        <h1 class="main-title"><span>Pebona Air Zoom</span> <span>Mariah Flyknit Racer</span></h1>
                                        <p class="subtitle">The Nike Air Zoom Pegasus 34 Men's Running Shoe features an updated, lighter Flymesh material that helps reduce heat build-up when you run.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{PUBLIC_URL . 'assets/images/slider/home-1/slide-3.jpg' }}" class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content white-scheme layer-animation-3">
                                        <p class="promo-title"><span>Hot Sale OFF</span> Sale Offer 60% Off This Week</p>
                                        <h1 class="main-title"><span>Top 20% Sale</span> <span>Black History Month</span></h1>
                                        <p class="subtitle">The collection grows each year with original stories and design features, influenced by Abalia's employees.</p>
                                        <div class="slide-button">
                                            <a class="default-btn secondary" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->
            </div> <!-- end of swiper-slide -->

            <!-- Slider Navigation -->
            <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

            <!-- Slider Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End of Primary Slider Section -->
    
    <!-- Start of Support Section -->
    <section class="support-section mb0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Free Shipping</h2>
                        <p>Free shipping on all order</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Money Return</h2>
                        <p>30 days for free return</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Online Support</h2>
                        <p>Support 24 hours a day</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Deals &amp; Promotions</h2>
                        <p>Price savings, discounts, coupons</p>
                    </div>
                </div> <!-- end of feaure-box -->
            </div>
        </div>
    </section>
    <!-- End of Support Section -->

    <!-- Start of Banner Section -->
    <div class="banner-section mb-half">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{PUBLIC_URL . 'assets/images/banners/banner-1.jpg' }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{PUBLIC_URL . 'assets/images/banners/banner-2.jpg' }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{PUBLIC_URL . 'assets/images/banners/banner-3.jpg' }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Banner Section -->

    <!-- Start of New Arrivals Section -->
    <section class="new-arrivals-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>New Trending Products</h2>
                        <p class="subtitle">Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero est</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="new-products pos-r">
                        <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                @foreach ($trendingProducts as $item)
                                <article class="swiper-slide product-layout">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-20%</div>
                                                <div class="label-product label-new">New</div>
                                                <a href="{{BASE_URL . 'thong-tin-san-pham/' . $item->id}}">
                                                    <img src="{{ $item->image }}" alt="{{$item->name}}" title="{{$item->name}}">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">{{$item->category->cate_name}}</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="{{BASE_URL . 'thong-tin-san-pham/' . $item->id}}">{{$item->name}}</a></h4>
                                                <p class="product-price">
                                                    <span class="price-new">${{number_format($item->price, 0, '.', '.')}}</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                @endforeach
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Slider Navigation -->
                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                        </div> <!-- end of element-carousel -->
                    </div> <!-- end of new-products -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of New Arrivals Section -->

    <!-- Start of Promo Banner Section -->
    <section class="promo-banner-section bg-img-wrapper">
        <div class="image-placeholder pos-r">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="banner-with-text">
                            <img src="{{PUBLIC_URL . 'assets/images/backgrounds/bg-banner.jpg' }}" class="visually-hidden" alt="Promo Banner">
                            <div class="promo-text">
                                <h1>Hurry Up!</h1>
                                <h2><span>Hurry Up!</span> Daily Deal Of The Day</h2>
                                <p>Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the authorities in getting to Europe. The best way to do this, he reasoned, was to acquire another family as cover, and he found one. It was all a sham, however, just a means to an end.</p>
                                <a href="#" class="default-btn large">Discover Now</a>
                            </div>
                        </div> <!-- end of promo-banner -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of image-placeholder -->
    </section>
    <!-- End of Promo Banner Section -->

    <!-- Start of Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>Our Categories</h2>
                        <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">

                    <!-- Nav Pills -->
                    <ul class="nav nav-pills justify-content-center" id="our_categories" role="tablist">
                        @foreach ($tablistCate as $tl)
                        <li class="nav-item">
                            <a class="nav-link @if($loop->first) active @endif" id="nav_tablist-{{$tl->id}}" data-toggle="pill" href="#catelist-{{$tl->id}}" role="tab" aria-controls="catelist-{{$tl->id}}" aria-selected="true">{{$tl->cate_name}}</a>
                        </li>
                        @endforeach
                    </ul> <!-- end of nav -->

                    <!-- Tab Contents -->
                    <div class="tab-content" id="our_categories_contents">
                        @foreach ($tablistCate as $tl)
                        <div class="tab-pane @if($loop->first)active show @endif anime-tab" id="catelist-{{$tl->id}}" role="tabpanel" aria-labelledby="nav_tablist-{{$tl->id}}">
                            <div class="new-products pos-r">
                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        @foreach ($tl->getTablistProducts() as $tlPro)
                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-sale">-7%</div>
                                                        <div class="label-product label-new">New</div>
                                                        <a href="{{BASE_URL . 'thong-tin-san-pham/' . $item->id}}">
                                                            <img src="{{$tlPro->image}}" alt="{{$tlPro->name}}" title="{{tlPro}}">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div class="product-meta d-flex justify-content-between align-items-center">
                                                            <div class="product-manufacturer">
                                                                <a href="#">{{$tl->cate_name}}</a>
                                                            </div>
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a href="{{BASE_URL . 'thong-tin-san-pham/' . $item->id}}">{{$tlPro->name}}</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">${{number_format($tlPro->price, 0, '.', '.')}}</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->
                                        @endforeach
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div> <!-- end of tab-pane -->
                        @endforeach
                    </div> <!-- end of tab-content -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Categories Section -->

    <!-- Start of Instagram Section -->
    <section class="instagram-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title type-2 pt-full top-bordered">
                        <h2>Follow us On Instagram</h2>
                        <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="instagram-container">
                        <!-- Slides -->
                        <div id="instagram_feed" class="swiper-wrapper image-popup">
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of instagram-carousel -->
                    <div class="follow-link">
                        <a href="https://www.instagram.com/themeitems/" target="_blank">Follow us On Instagram</a>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Instagram Section -->
@endsection