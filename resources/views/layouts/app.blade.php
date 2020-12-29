<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Pawon Nusantara @yield('headtitle')</title>

  <!-- Vendor Stylesheets -->
  <!-- <link rel="stylesheet" href="{{ asset('/assets/css/plugins/bootstrap.min.css') }}"> -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Coffeez Style sheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>
<body>

<div class="andro_preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
</div>

<aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <ul class="navbar-nav">
        <li class="menu-item menu-item-has-children">
          <a href="/">Home</a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="/gallery">Gallery</a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="/product">Product</a>
        </li>
        <li class="menu-item menu-item-has-children mega-menu-wrapper">
          <a href="/franchise">franchise</a>
          <ul class="sub-menu">
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="mega-menu-item">
                      <h6>Membership Information</h6>
                      <p>
                         Kopi Pawon Nusantara Membuka Peluang Usaha Bersama sebagai Membership atau Franchise
                      </p>
                      <a href="login.html" class="andro_btn-custom shadow-none btn-sm">Information</a>
                    </div>
                  </div>
                  <div class="offset-lg-1 col-lg-3">
                    <div class="mega-menu-item">
                      <h6>Franchise</h6>
                      <a href="#">Kopi Pawon Jakarta</a>
                      <a href="#">Kopi Pawon Bekasi</a>
                      <a href="#">Kopi Pawon Indramayu</a>
                      <a href="#">Kopi Pawon Semarang</a>
                      <a href="#">Kopi Pawon Demak</a>
                      <a href="#">Kopi Pawon Solo</a>
                      <a href="#">Kopi Pawon Kudus</a>
                      <a href="#">Kopi Pawon Purwokerto</a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mega-menu-item">
                      <h6>Product Coffee</h6>
                      <a href="product-single.html">Coffe Arabica</a>
                      <a href="product-single-v2.html">Coffe Robusta</a>
                    </div>
                  </div>
                </div>
              </div>

            </li>
          </ul>
        </li>
        <li class="menu-item"> <a href="/contact">Contact Us</a> </li>
      </ul>
  </aside>

<header class="andro_header header-1 can-sticky">
<!-- Topheader Start -->
<div class="andro_header-top">
  <div class="container">
    <div class="andro_header-top-inner">
      <ul class="andro_header-top-sm andro_sm">
        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
      </ul>
      <ul class="andro_header-top-links">
        <li class="menu-item"><a href="login.html">Kopi Pawon Nusantara</a></li>
        <!-- <li class="menu-item menu-item-has-children">
          <a href="#"> <span class="andro_current-currency-text">Currency</span> (IDR) </a>
          <ul class="sub-menu sub-menu-left">
            <li> <a href="#">Indonesia Rupiah (IDR)</a> </li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</div>
<!-- Topheader End -->

<!-- Middle Header Start -->
<div class="andro_header-middle">
  <div class="container">
    <nav class="navbar">
      <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>
      <div class="andro_search-adv">
        <form method="post">
          <div class="andro_search-adv-cats">
            <span>All Categories</span>

            <div class="sub-menu">
              <div class="andro_dropdown-scroll">
                <label>
                  <input type="checkbox" name="category1" value="food">
                  Cafe Latte
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category2" value="home-care">
                  Espresso
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category3" value="keto">
                  Cappucino
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category4" value="baskets">
                  Ice Coffee
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category5" value="supplements">
                  Mocha
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category6" value="baby-kids">
                  Arabica Roasted 
                  <i class="fas fa-check"></i>
                </label>
                <label>
                  <input type="checkbox" name="category7" value="serum">
                  Mixed Sorts
                  <i class="fas fa-check"></i>
                </label>
              </div>
            </div>

          </div>
          <div class="andro_search-adv-input">
            <input type="text" class="form-control" placeholder="Look for Mocha, Robusta Roasted" name="search" value="">
            <button type="submit" name="button"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
      <div class="andro_header-controls">
        <ul class="andro_header-controls-inner">
          <li class="andro_header-favorites"> <a href="wishlist.html" title="Your Wishlist"> <i class="flaticon-like"></i> </a> </li>
          <li class="andro_header-cart">
            <a href="cart.html" title="Your Cart">
              <i class="flaticon-shopping-basket"></i>
              <div class="andro_header-cart-content">
                <!-- <span>10 Packet</span>
                <span>Rp. 200.000</span> -->
              </div>
            </a>
          </li>
        </ul>
        <div class="aside-toggler aside-trigger-left">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- Middle Header End -->

<!-- Bottom Header Start -->
<div class="andro_header-bottom">
  <div class="container">

    <div class="andro_header-bottom-inner">

      <!-- Menu -->
      <ul class="navbar-nav">
        <li class="menu-item menu-item-has-children">
          <a href="/">Home</a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="/gallery">Gallery</a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="/product">Product</a>
        </li>
        <li class="menu-item menu-item-has-children mega-menu-wrapper">
          <a href="/franchise">Franchise</a>
          <ul class="sub-menu">
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="mega-menu-item">
                      <h6>Membership Information</h6>
                      <p>
                         Kopi Pawon Nusantara Membuka Peluang Usaha Bersama sebagai Membership atau Franchise
                      </p>
                      <a href="login.html" class="andro_btn-custom shadow-none btn-sm">Information</a>
                    </div>
                  </div>
                  <div class="offset-lg-1 col-lg-3">
                    <div class="mega-menu-item">
                      <h6>Franchise</h6>
                      <a href="shop-v1.html">Kopi Pawon Jakarta</a>
                      <a href="shop-v2.html">Kopi Pawon Bekasi</a>
                      <a href="shop-v3.html">Kopi Pawon Indramayu</a>
                      <a href="shop-v4.html">Kopi Pawon Semarang</a>
                      <a href="shop-v2.html">Kopi Pawon Demak</a>
                      <a href="shop-v3.html">Kopi Pawon Solo</a>
                      <a href="shop-v4.html">Kopi Pawon Kudus</a>
                      <a href="shop-v4.html">Kopi Pawon Purwokerto</a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mega-menu-item">
                      <h6>Product Coffee</h6>
                      <a href="product-single.html">Coffe Arabica</a>
                      <a href="product-single-v2.html">Coffe Robusta</a>
                    </div>
                  </div>
                </div>
              </div>

            </li>
          </ul>
        </li>
        <li class="menu-item"> <a href="/contact">Contact Us</a> </li>
      </ul>

      <!-- Side navigation toggle -->
      <div class="aside-toggler aside-trigger-right desktop-toggler">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>

  </div>
</div>
<!-- Bottom Header End -->
</header>


@yield('content')

<footer class="andro_footer">
    <!-- Top Footer -->
    <!-- <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/logo.png" alt="logo">
        </div>
        <div class="andro_footer-buttons">
          <a href="#"> <img src="assets/img/android.png" alt="download it on the app store"></a>
          <a href="#"> <img src="assets/img/ios.png" alt="download it on the app store"></a>
        </div>
      </div>
    </div> -->

    <!-- Middle Footer -->
    <!-- <div class="andro_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Information</h5>
            <ul>
              <li> <a href="index.html">Home</a> </li>
              <li> <a href="blog-grid.html">Blog</a> </li>
              <li> <a href="about-us.html">About Us</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="contact-us.html">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Top Categories</h5>
            <ul>
              <li> <a href="#">Cafe Latte</a> </li>
              <li> <a href="#">Ice Coffee</a> </li>
              <li> <a href="#">Mocha</a> </li>
              <li> <a href="#">Cappucino</a> </li>
              <li> <a href="#">Espresso</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
              <li> <a href="checkout.html">Checkout</a> </li>
              <li> <a href="cart.html">Cart</a> </li>
              <li> <a href="product-single.html">Product</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="legal.html">Legal</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title">Social Media</h5>
            <ul class="social-media">
              <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
              <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
              <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <div class="andro_footer-offer">
              <p>Signup and get exclusive offers and coupon codes</p>
              <a href="#" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Footer Bottom -->
    <div class="andro_footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#">Privacy Policy</a> </li>
          <li> <a href="#">Refund Policy</a> </li>
          <li> <a href="#">Cookie Policy</a> </li>
          <li> <a href="#">Terms & Conditions</a> </li>
        </ul>
        <div class="andro_footer-copyright">
          <p> Copyright © 2020 <a href="#">Hand Crafted By Kopi Pawon Management Team | </a> All Rights Reserved. </p>
          <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <!-- <script src="{{asset('assets/js/plugins/bootstrap.min.js') }}"></script> -->
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>
  <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="assets/js/plugins/jquery.zoom.min.js"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>


  <!-- Coffeez Scripts -->
  <script src="assets/js/main.js"></script>

</body>

</html>
