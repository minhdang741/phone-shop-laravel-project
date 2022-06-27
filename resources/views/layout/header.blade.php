<!-- Loader -->
<div id="preloder">
    <div class="loader"></div>
</div>
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="/"><img src="img/logo.png" /></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li>
                <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
            </li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__auth">
            <a href="/login"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/shopgrid">Shop</a></li>
            <li>
                <a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="/shopdetails">Shop Details</a></li>
                    <li><a href="/shopingcart">Shoping Cart</a></li>
                    <li><a href="/checkout">Check Out</a></li>
                </ul>
            </li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> example@gmail.com</li>
            <li>Get smarter from here</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i>TechGo@mail.com</li>
                            <li>Get smarter from here</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="/login"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="img/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li id="home" class="inactive"><a href="/">Home</a></li>
                        <li id="shop" class="inactive"><a href="/shopgrid">Shop</a></li>
                        <li id="pages" class="inactive">
                            <a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="/shopingcart">Shoping Cart</a></li>
                                <li><a href="/checkout">Check Out</a></li>
                            </ul>
                        </li>
                        <li id="contact" class="inactive"><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
                {{--Change class value of header menu to "active" when page is loaded--}}
                @switch($StrPath) {{--Get Request path to determine which page is loaded then change value of 'class' attribute to "active". Visit routes/web.api to see more--}}
                    @case('shopgrid')
                        <script>document.getElementById('shop').setAttribute('class', 'active');</script>
                        @break
                    @case('shopingcart')
                    @case('checkout')
                        <script>document.getElementById('pages').setAttribute('class', 'active')</script>    
                        @break
                    @case('contact')
                        <script>document.getElementById('contact').setAttribute('class', 'active')</script>    
                        @break
                    @default
                        <script>document.getElementById('home').setAttribute('class', 'active');</script>
                @endswitch
                {{--END Change class value of header menu to "active" when page is loaded--}}
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                        </li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->