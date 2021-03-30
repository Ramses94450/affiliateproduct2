@extends("front.layouts.app")
@section('content')
<div class="page-content">

    <div class="holder">
        <div class="container">
            <!------------------------------------- Male and Female tab start ----------------------------------->

               <div class="holder holder-mt-medium section-name-products-grid" id="productsGrid01">
                    <div class="container">
                        <div class="title-wrap text-center">
                            <div class="title-wrap title-tabs-wrap text-center js-title-tabs">
                                <div class="title-tabs">
                                    <h2 class="h3-style">
                                        <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Female</span></a>
                                    </h2>
                                    <h2 class="h3-style">
                                        <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Male</span></a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="prd-grid-wrap">
                            <div class="prd-grid data-to-show-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2" data-grid-tab-content></div>
                            <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal style="opacity: 0;"><span></span></div>
                            {{-- <div class="circle-loader-wrap d-none">
                                <div class="circle-loader">
                                    <a href="" data-load="4" class="js-circle-loader">
                                        <svg id="svg_d" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50%" cy="50%" r="63" fill="transparent"></circle>
                                            <circle class="js-circle-bar" cx="50%" cy="50%" r="63" fill="transparent"></circle>
                                        </svg>
                                        <svg id="svg_m" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50%" cy="50%" r="50" fill="transparent"></circle>
                                            <circle class="js-circle-bar" cx="50%" cy="50%" r="50" fill="transparent"></circle>
                                        </svg>
                                        <div class="circle-loader-text">Load More</div>
                                        <div class="circle-loader-text-alt"><span class="js-circle-loader-start"></span>&nbsp;out of&nbsp;<span class="js-circle-loader-end"></span></div>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            <!------------------------------------- Male and Female tab end-------------------------------------->
            <!--------------------------------------  Best match field + Number of best match start -------------->
            <div class="filter-row ">
                <div class="row text-center">
                    <div class="items-count mr-5">35 item(s)</div>
                </div>
            </div>
                <!--------------------------------------  Best match field + Number of best match end -------------->
            <div class="row">
                <!-----------------------------------   Criterias and choices start ----------------------->
                {{-- <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                     data-grid-tab-content>
                    <div class="filter-col-content filter-mobile-content">

                        <div class="sidebar-block filter-group-block open">
                            <div class="sidebar-block_title">
                                <span>Categories</span>
                                <span class="toggle-arrow"><span></span><span></span></span>
                            </div>
                            <div class="sidebar-block_content">
                                <ul class="category-list">
                                    <li class="active"><a href="category.html" title="Casual"
                                                          class="open">Casual&nbsp;<span>(30)</span></a>
                                        <div class="toggle-category js-toggle-category"><span><i
                                                    class="icon-angle-down"></i></span></div>
                                        <ul class="category-list category-list">
                                            <li><a href="category.html" title="Men">Men&nbsp;<span>(10)</span></a></li>
                                            <li><a href="category.html" title="Women">Women&nbsp;<span>(10)</span></a>
                                            </li>
                                            <li><a href="category.html"
                                                   title="Accessories">Accessories&nbsp;<span>(10)</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" title="T-Shirts" class="open">T-Shirts</a></li>
                                    <li><a href="category.html" title="Medical" class="open">Medical</a></li>
                                    <li><a href="category.html" title="FoodMarket" class="open">FoodMarket</a></li>
                                    <li><a href="category.html" title="Bikes" class="open">Bikes&nbsp;<span>(12)</span></a>
                                    </li>
                                    <li><a href="category.html" title="Cosmetics"
                                           class="open">Cosmetics&nbsp;<span>(16)</span></a></li>
                                    <li><a href="category.html" title="Fishing"
                                           class="open">Fishing&nbsp;<span>(20)</span></a></li>
                                    <li><a href="category.html" title="Electronics" class="open">Electronics&nbsp;<span>(15)</span></a>
                                    </li>
                                    <li><a href="category.html" title="Games" class="open">Games&nbsp;<span>(14)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://bit.ly/3eJX5XE" class="bnr image-hover-scale bnr--bottom bnr--left"
                           data-fontratio="3.95">
                            <div class="bnr-img">
                                <img src="images/banners/banner-collection-aside.html" alt="">
                            </div>
                        </a>
                    </div> --}}
                    <!-----------------------------------   Criterias and choices end ----------------------->


                <div class="filter-toggle js-filter-toggle">
                        <div class="loader-horizontal js-loader-horizontal">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                    style="width: 100%"></div>
                            </div>
                        </div>
                        <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i
                            class="icon-filter-close"></i>
                        </span>
                        <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a
                            href="#" class="filter-btn-close js-filter-btn">RESET</a>
                            <a href="#" class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a>
                        </span>
                </div>

            </div>
        </div>
    </div>


    <div class="holder">
        <div class="container">
            <div class="prd-grid-wrap position-relative">
                <!------------------------------------- Product pictures content starts -------------------------------------->
                <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll1.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <!------------------------------------- Favorite button below each picture starts -------------------------------------->
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <!------------------------------------- Favorite button below each picture ends -------------------------------------->
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll2.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll3.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll4.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll5.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll6.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-1.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-2.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-03-3.webp" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll7.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>

                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                     <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                        <div class="prd-inside">
                            <div class="prd-img-area">
                                <a href="product.html" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset("assets/front/images/dolls/doll8.jpg")}}" alt="Oversized Cotton Blouse" class="js-prd-img lazyload fade-up">
                                    <div class="foxic-loader"></div>

                                </a>
                                <div class="prd-circle-labels">
                                    <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                </div>
                                <ul class="list-options color-swatch">
                                    <li data-image="images/skins/fashion/products/product-03-1.webp" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-2.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                    <li data-image="images/skins/fashion/products/product-03-3.webp"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('assets/front/images/skins/fashion/products/product-01-1.html')}}" class="lazyload fade-up" alt="Color Name"></a></li>
                                </ul>
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    <div class="prd-info-top">
                                        <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
                                    </div>
                                    <div class="prd-tag"><a href="#">Banita</a></div>
                                    <h2 class="prd-title"><a href="product.html">Oversized Cotton Blouse</a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>



                                </div>
                                <div class="prd-no-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                    </div>
                                    <div class="text-center mt-1">
                                        <div class="price-new "> <b>$ 180 </b> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!------------------------------------- Product pictures end -------------------------------------->
            </div>
        </div>
    </div>

</div>
@endsection
<!------------------------------------- Landing page end -------------------------------------->
