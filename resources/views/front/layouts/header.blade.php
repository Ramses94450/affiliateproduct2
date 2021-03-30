<!-------------------------------------  Menu start-------------------------------------->
<header class="hdr-wrap">
    <div class="hdr-content hdr-content-sticky">
        <div class="container">
            <div class="row">
                      <div class="col-auto show-mobile">
                    <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                </div>
                <!-------------------------------------  Logo at the top  start -------------------------------------->
                <div class="col-auto hdr-logo">
                    <!-- Logo-->
                    <a href="{{route("front.index")}}" class="logo"><img src="{{ asset("assets/front/images/logo/logo.png") }}" alt="Logo"></a>
                </div>
                <!-------------------------------------  Logo at the top  end-------------------------------------->
                <div class="hdr-nav hide-mobile nav-holder-s">
                </div>
                <div class="hdr-links-wrap col-auto ml-auto">
                    <div class="hdr-inline-link">
                        <div class="search_container_desktop">
                            <div class="dropdn dropdn_search dropdn_fullwidth">
                                <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                <div class="dropdn-content">
                                    <div class="container">
                                        <form method="get" action="#" class="search search-off-popular">
                                            <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                                            <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                            <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdn dropdn_wishlist">
                            <a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
                                <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hdr">
        <div class="hdr-topline hdr-topline--dark js-hdr-top">
            <div class="container">
                <!-------------------------------------   Login button  start -------------------------------------->
                <div class="row flex-nowrap">
                    <div class="col hdr-topline-right hide-mobile">
                        <div class="hdr-inline-link">
                            <div class="hdr_container_desktop">
                                <div class="dropdn dropdn_account dropdn_fullheight">
                                    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------------------   Login button  end -------------------------------------->
            </div>
        </div>
        <div class="hdr-content">
            <div class="container">
                <div class="row">
                    <!-------------------------------------   Menu bar. Including product, accessories, toys, underwear, shops  start -------------------------------------->
                    <div class="col-auto show-mobile">
                        <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                    </div>
                    <div class="col-auto hdr-logo">
                        <a href="{{route("front.index")}}" class="logo"><img src="{{ asset("assets/front/images/logo/logo.png") }}" alt="Logo"></a>
                    </div>
                    <div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
                        <ul class="mmenu mmenu-js">
                            <li><a href="{{ route('front.index') }}" class="active">Affiliate product comparator</a></li>
                            <!---------------------------- Accessories Menu Start --------------------------------->
                            {{-- <li><a href="#">Accessories</a></li> --}}
                            <!---------------------------- Accessories Menu End --------------------------------->
                            {{-- <li><a href="#">Toys</a></li>
                            <li><a href="#">Underwears</a></li> --}}

                        </ul>
                    </div>
                    <!-------------------------------------   Menu bar. Including products, accessories, underwear, shops  end -------------------------------------->
                    <div class="hdr-links-wrap col-auto ml-auto">
                        <div class="hdr-inline-link">
                            <div class="search_container_desktop">
                                <div class="dropdn dropdn_search dropdn_fullwidth">
                                    <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                    <div class="dropdn-content">
                                        <div class="container">
                                            <form method="get" action="#" class="search search-off-popular">
                                                <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                                                <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                                <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--------------------------------   Favourite button at the top of the page start ---------------------------------->
                            <div class="dropdn dropdn_wishlist">
                                <a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
                                    <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
                                </a>
                            </div>
                            <div class="hdr_container_mobile show-mobile">
                                <div class="dropdn dropdn_account dropdn_fullheight">
                                    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
                                </div>
                            </div>
<!-----------------------------------   Favourite button at the top of the page end ---------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-side-panel">
    <div class="mobilemenu js-push-mbmenu">
        <div class="mobilemenu-content">
            <div class="mobilemenu-close mobilemenu-toggle">Close</div>
            <div class="mobilemenu-scroll">
                <div class="mobilemenu-search"></div>
                <div class="nav-wrapper show-menu">
                    <div class="nav-toggle">
                        <span class="nav-back"><i class="icon-angle-left"></i></span>
                        <span class="nav-title"></span>
                        <a href="#" class="nav-viewall">view all</a>
                    </div>
                    <ul class="nav nav-level-1">
                        <li><a href="index-2.html">Layouts<span class="menu-label menu-label--color1">New</span><span class="arrow"><i class="icon-angle-right"></i></span></a>
                            <ul class="nav-level-2">
                                <li><a href="index-2.html">Fashion (Default) Skin</a></li>
                                <li><a href="index-sport.html">Sport Skin</a></li>
                                <li><a href="index-helloween.html">Halloween Skin</a></li>
                                <li><a href="index-medical.html">Medical Skin</a></li>
                                <li><a href="index-food.html">Food Market Skin</a></li>
                                <li><a href="index-cosmetics.html">Cosmetics Skin</a></li>
                                <li><a href="index-fishing.html">Fishing Skin</a></li>
                                <li><a href="#">Books Skin<span class="menu-label menu-label--color1">Coming Soon</span></a></li>
                                <li><a href="#">Electronics Skin<span class="menu-label menu-label--color2">Coming Soon</span></a></li>
                                <li><a href="#">Games Skin<span class="menu-label menu-label--color3">Coming Soon</span></a></li>
                                <li><a href="#">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
                                <li><a href="index-02.html">Home page 2</a></li>
                                <li><a href="index-03.html">Home page 3</a></li>
                                <li><a href="index-04.html">Home page 4</a></li>
                                <li><a href="index-05.html">Home page 5</a></li>
                                <li><a href="index-06.html">Home page 6</a></li>
                                <li><a href="index-07.html">Home page 7</a></li>
                                <li><a href="index-08.html">Home page 8</a></li>
                                <li><a href="index-09.html">Home page 9</a></li>
                                <li><a href="index-10.html">Home page 10</a></li>
                                <li><a href="index-rtl.html">Home page RTL</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
                            <ul class="nav-level-2">
                                <li><a href="product.html">Product page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="product.html">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
                                        <li><a href="product-2.html">Product page variant 2</a></li>
                                        <li><a href="product-3.html">Product page variant 3</a></li>
                                        <li><a href="product-4.html">Product page variant 4</a></li>
                                        <li><a href="product-5.html">Product page variant 5</a></li>
                                        <li><a href="product-6.html">Product page variant 6</a></li>
                                        <li><a href="product-7.html">Product page variant 7</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Category page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Left sidebar filters</a></li>
                                        <li><a href="category-closed-filter.html">Closed filters</a></li>
                                        <li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
                                        <li><a href="category-listview.html">Listing View</a></li>
                                        <li><a href="category-empty.html">Empty category</a></li>
                                    </ul>
                                </li>
                                <li><a href="cart.html">Cart & Checkout<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="cart-empty.html">Empty cart</a></li>
                                        <li><a href="checkout.html">Checkout variant 1</a></li>
                                        <li><a href="checkout-2.html">Checkout variant 2</a></li>
                                        <li><a href="checkout-3.html">Checkout variant 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="account-create.html">Account<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="account-create.html">Login</a></li>
                                        <li><a href="account-create.html">Create account</a></li>
                                        <li><a href="account-details.html">Account details</a></li>
                                        <li><a href="account-addresses.html">Account addresses</a></li>
                                        <li><a href="account-history.html">Order History</a></li>
                                        <li><a href="account-wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="blog.html">Right sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Left sidebar</a></li>
                                        <li><a href="blog-without-sidebar.html">No sidebar</a></li>
                                        <li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
                                        <li><a href="blog-grid.html">Grid</a></li>
                                        <li><a href="blog-post.html">Blog post</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
                            <ul class="nav-level-2">
                                <li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Heels</a></li>
                                        <li><a href="category.html">Boots</a></li>
                                        <li><a href="category.html">Flats</a></li>
                                        <li><a href="category.html">Sneakers &amp; Athletic</a></li>
                                        <li><a href="category.html">Clogs &amp; Mules</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Dresses</a></li>
                                        <li><a href="category.html">Shirts &amp; Tops</a></li>
                                        <li><a href="category.html">Coats &amp; Outerwear</a></li>
                                        <li><a href="category.html">Sweaters</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Heels</a></li>
                                        <li><a href="category.html">Boots</a></li>
                                        <li><a href="category.html">Flats</a></li>
                                        <li><a href="category.html">Sneakers &amp; Athletic</a></li>
                                        <li><a href="category.html">Clogs &amp; Mules</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Jeans</a></li>
                                        <li><a href="category.html">Pants</a></li>
                                        <li><a href="category.html">slippers</a></li>
                                        <li><a href="category.html">suits</a></li>
                                        <li><a href="category.html">socks</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Sunglasses</a></li>
                                        <li><a href="category.html">Hats</a></li>
                                        <li><a href="category.html">Watches</a></li>
                                        <li><a href="category.html">Jewelry</a></li>
                                        <li><a href="category.html">Belts</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                    <ul class="nav-level-3">
                                        <li><a href="category.html">Handbags</a></li>
                                        <li><a href="category.html">Backpacks</a></li>
                                        <li><a href="category.html">Luggage</a></li>
                                        <li><a href="category.html">wallets</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#buynow" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>
                    </ul>
                </div>
                <div class="mobilemenu-bottom">
                    <div class="mobilemenu-currency">
                        <div class="dropdn_currency">
                            <div class="dropdn dropdn_caret">
                                <a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
                                <div class="dropdn-content">
                                    <ul>
                                        <li class="active"><a href="#"><span>US dollars</span></a></li>
                                        <li><a href="#"><span>Euro</span></a></li>
                                        <li><a href="#"><span>UK pounds</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobilemenu-language">
                        <div class="dropdn_language">
                            <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                                <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
                                <div class="dropdn-content">
                                    <ul>
                                        <li class="active"><a href="#"><img src="images/flags/en.html" alt="">English</a></li>
                                        <li><a href="#"><img src="images/flags/sp.html" alt="">Spanish</a></li>
                                        <li><a href="#"><img src="images/flags/de.html" alt="">German</a></li>
                                        <li><a href="#"><img src="images/flags/fr.html" alt="">French</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdn-content account-drop" id="dropdnAccount">
        <div class="dropdn-content-block">
            <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
            <ul>
                {{-- <li><a href="{{ route("login") }}"><span>Log In</span><i class="icon-login"></i></a></li> --}}
                {{-- <li><a href="{{ route("register") }}"><span>Register</span><i class="icon-user2"></i></a></li> --}}

            </ul>
            <div class="dropdn-form-wrapper">
                <h5>Quick Login</h5>
                <form action="#" method="post">
                    {{-- <form action="{{ route('login') }}" method="post"> --}}
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
                        <div class="invalid-feedback">Can't be blank</div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control--sm" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn">Enter</button>
                </form>
            </div>
        </div>
        <div class="drop-overlay js-dropdn-close"></div>
    </div>

</div>
<!------------------------------------- Menu end-------------------------------------->
