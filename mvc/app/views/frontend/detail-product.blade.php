@extends('layouts.client.main')
@section('breadcrumb-section')
<div class="breadcrumb-section bgc-offset mb-full">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{BASE_URL}}">Home</a>
                    <a class="breadcrumb-item" href="{{BASE_URL . 'danh-muc-san-pham/' . $product->category->id}}">{{ucwords($product->category->cate_name)}}</a>
                    <span class="breadcrumb-item active">{{$product->name}}</span>
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
@endsection
@section('main-content')
<!-- Start of Main Product Wrapper -->
<div class="main-product-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="single-product-wrapper">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="product-gallery">
                                    <div class="gallery-with-thumbs">
                                        <div class="product-image-container">
                                            <div class="product-full-image main-slider image-popup">

                                                <!-- Slides -->
                                                <div class="swiper-wrapper">
                                                    @foreach ($product->galleries as $proImg)
                                                    <figure class="swiper-slide">
                                                        <a href="{{$proImg->img_url}}" data-size="600x600">
                                                            <img src="{{$proImg->img_url}}" alt="{{$product->name}}">
                                                            <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                        </a>
                                                        <figcaption class="visually-hidden">
                                                            <span>{{$product->name}}</span>
                                                        </figcaption>
                                                    </figure>
                                                    @endforeach
                                                </div>
                                            </div> <!-- end of product-full-image -->
                                        </div>
                                        
                                        <div class="product-thumb-container">
                                            <div class="product-thumb-image pos-r">
                                                <div class="nav-slider">
                                                    <!-- Slides -->
                                                    <div class="swiper-wrapper">
                                                        @foreach ($product->galleries as $proImg)
                                                        <div class="swiper-slide">
                                                            <img src="{{$proImg->img_url}}" alt="{{$product->name}}">
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    <!-- Navigation -->
                                                    <div class="swiper-arrow next"><i class="fa fa-angle-down"></i></div>
                                                    <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div> <!-- end of product-thumb-image -->
                                        </div>
                                    </div> <!-- end of gallery-with-thumbs -->
                                </div> <!-- end of product-gallery -->
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="product-details">
                                    <h3 class="product-name">{{$product->name}}</h3>
                                    <div class="product-ratings d-flex">
                                        <ul class="rating d-flex mr-4">
                                            <li><i class="ion ion-md-star-outline"></i></li>
                                            <li><i class="ion ion-md-star-outline"></i></li>
                                            <li><i class="ion ion-md-star-outline"></i></li>
                                            <li><i class="ion ion-md-star-outline"></i></li>
                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                        </ul>
                                        <ul class="comments-advices list-inline d-flex">
                                            <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                            <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <p class="d-flex align-items-center">
                                            <span class="price-new">${{number_format($product->price, 0, '.', '.')}}</span>
                                        </p>
                                    </div>
                                    <div class="product-description">
                                        <p>{{$product->short_desc}}</p>
                                    </div>
                                    <div class="product-actions">
                                        <h3>Available Options</h3>
                                        <div class="product-size-color d-flex">
                                            <div class="product-size">
                                                <label>Size</label>
                                                <select class="nice-select">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="product-color">
                                                <label>color</label>
                                                <ul class="color-list">
                                                   <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-stock">
                                            <form action="#">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap align-items-center">
                                                    <li class="box-quantity">
                                                        <div class="cart-input">
                                                            <input class="cart-input-box" type="text" value="0">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="default-btn">Add to Cart</button>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                            <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                        </div>
                                    </div>

                                    <div class="social-sharing d-flex align-items-center">
                                        <span>Share</span>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                        </ul>
                                    </div>
                                </div> <!-- end of product-details -->
                            </div>
                        </div> <!-- end of row -->

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="product-info mt-half">
                                     <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                            <p>{{$product->detail}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of single-product-wrapper -->
                </main> <!-- end of #primary -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Main Product Wrapper -->

<!-- Start of Related Products -->
<section class="related-products">
    <div class="container">
        <div class="row product-row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
                <div class="latest-product-wrapper pos-r">
                    <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            @foreach ($relateProducts as $relatePro)
                            <article class="swiper-slide product-layout">
                                <div class="product-thumb">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <div class="label-product label-new">New</div>
                                            <a href="{{BASE_URL . 'thong-tin-san-pham/' . $relatePro->id}}">
                                                <img src="{{$relatePro->image}}" alt="{{$relatePro->name}}" title="{{$relatePro->name}}">
                                            </a>
                                            <div class="action-links">
                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                            </div>
                                        </div> <!-- end of product-image -->

                                        <div class="product-caption">
                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                <div class="product-manufacturer">
                                                    <a href="#">{{$product->category->cate_name}}</a>
                                                </div>
                                                <div class="product-ratings">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="product-name"><a href="{{BASE_URL . 'thong-tin-san-pham/' . $relatePro->id}}">{{$relatePro->name}}</a></h4>
                                            <p class="product-price">
                                                <span class="price-new">${{number_format($relatePro->price, 0, '.', '.')}}</span>
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
                </div> <!-- end of latest-product-wrapper -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Related Products -->
@endsection