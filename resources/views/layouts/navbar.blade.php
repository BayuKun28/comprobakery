<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="#" class="search-switch"><img src="{{ asset('cake-main/') }}/img/icon/search.png" alt=""></a>
            <a href="#"><img src="{{ asset('cake-main/') }}/img/icon/heart.png" alt=""></a>
        </div>
        <div class="offcanvas__cart__item">
            <a href="#"><img src="{{ asset('cake-main/') }}/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="cart__price">Cart: <span>$0.00</span></div>
        </div>
    </div>
    <div class="offcanvas__logo">
        <a href="{{ asset('cake-main/') }}/index.html"><img src="{{ asset('cake-main/') }}/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul>
            <li>USD <span class="arrow_carrot-down"></span>
                <ul>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </li>
            <li>ENG <span class="arrow_carrot-down"></span>
                <ul>
                    <li>Spanish</li>
                    <li>ENG</li>
                </ul>
            </li>
            <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                <li>USD <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>EUR</li>
                                        <li>USD</li>
                                    </ul>
                                </li>
                                <li>ENG <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>Spanish</li>
                                        <li>ENG</li>
                                    </ul>
                                </li>
                                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="{{ asset('cake-main/') }}/index.html"><img src="{{ asset('cake-main/') }}/img/logo.png" alt=""></a>
                        </div>
                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="{{ asset('cake-main/') }}/img/icon/search.png" alt=""></a>
                                <a href="#"><img src="{{ asset('cake-main/') }}/img/icon/heart.png" alt=""></a>
                            </div>
                            <div class="header__top__right__cart">
                                <a href="#"><img src="{{ asset('cake-main/') }}/img/icon/cart.png" alt=""> <span>0</span></a>
                                <div class="cart__price">Cart: <span>$0.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ asset('cake-main/') }}/index.html">Home</a></li>
                        <li><a href="{{ asset('cake-main/') }}/about.html">About</a></li>
                        <li><a href="{{ asset('cake-main/') }}/shop.html">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ asset('cake-main/') }}/shop-details.html">Shop Details</a></li>
                                <li><a href="{{ asset('cake-main/') }}/shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="{{ asset('cake-main/') }}/checkout.html">Check Out</a></li>
                                <li><a href="{{ asset('cake-main/') }}/wisslist.html">Wisslist</a></li>
                                <li><a href="{{ asset('cake-main/') }}/Class.html">Class</a></li>
                                <li><a href="{{ asset('cake-main/') }}/blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ asset('cake-main/') }}/blog.html">Blog</a></li>
                        <li><a href="{{ asset('cake-main/') }}/contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->