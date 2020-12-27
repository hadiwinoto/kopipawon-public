<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Pawon @yield('headtitle')</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Coffeez Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Prealoder start -->
  <div class="andro_preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- Prealoader End -->

  <!-- Newsletter Modal Start -->
  <!-- <div class="modal fade" id="androNewsletterPopup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog andro_newsletter-popup-modal modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img src="assets/img/ig/3.jpg" alt="newsletter">
          <div class="close-btn close newsletter-popup-trigger" data-dismiss="modal">
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="modal-body">

          <div class="andro_newsletter-popup-text-wrapper">
            <h3>Join Our Newsletter</h3>
            <p>Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere.</p>
          </div>

          <form method="post" class="text-center">
            <div class="form-group">
              <input type="email" placeholder="Email Address" class="form-control" name="newsletter-email" value="">
            </div>
            <button type="submit" class="andro_btn-custom" name="button">Subscribe</button>
            <span class="newsletter-popup-trigger" data-dismiss="modal">No Thanks</span>
          </form>

        </div>
      </div>
    </div>
  </div> -->
  <!-- Newsletter Modal End -->

  <!-- Quick View Modal Start -->
  <div class="modal fade andro_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">

          <div class="close-btn close-dark close" data-dismiss="modal">
            <span></span>
            <span></span>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
                <img src="assets/img/products/9.png" alt="product">
              </div>
              <div class="col-md-7">

                <div class="andro_product-single-content">

                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <span>4 Stars</span>
                  </div>

                  <h3>Cold brewed</h3>

                  <div class="andro_product-price">
                    <span>8$</span>
                    <span>14$</span>
                  </div>

                  <p class="andro_product-excerpt">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>

                  <form class="andro_product-atc-form">

                    <div class="andro_product-variation-wrapper">
                      <div class="form-group">
                        <select class="form-control" name="amount">
                          <option value="">Select Amount</option>
                          <option value="1">1 Packet</option>
                          <option value="2">Packets </option>
                          <option value="3">3 Packets </option>
                          <option value="4">4 Packets </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="breed">
                          <option value="">Select a Breed</option>
                          <option value="italian">Italian</option>
                          <option value="egyptian">Egyptian</option>
                        </select>
                      </div>
                    </div>

                    <div class="qty-outter">
                      <a href="product-single.html" class="andro_btn-custom">Buy Now</a>
                      <div class="qty">
                        <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                        <input type="text" name="qty" value="1">
                        <span class="qty-add"><i class="fa fa-plus"></i></span>
                      </div>
                    </div>

                  </form>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Quick View Modal End -->

  <!-- Aside (Right Panel) -->
  <aside class="andro_aside andro_aside-right">
    <div class="sidebar">

      <!-- Popular Categories Start -->
      <div class="sidebar-widget widget-categories-icons">
        <h5 class="widget-title">Popular Categories</h5>
        <div class="row">

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-cannabis"></i>
                <h5>Cafe Latte</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-bong"></i>
                <h5>Ice Coffee</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-medicine"></i>
                <h5>Mocha</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-cream"></i>
                <h5>Espresso</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-chocolate-bar"></i>
                <h5>Cappucino</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-cannabis-oil"></i>
                <h5>Arabica</h5>
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- Popular Categories End -->

      <!-- Popular Tags Start -->
      <div class="sidebar-widget">
        <h5 class="widget-title">Popular Tags</h5>
        <div class="tagcloud">
          <a href="#">Creamy</a>
          <a href="#">Cafe Latte</a>
          <a href="#">Darker</a>
          <a href="#">Coffee</a>
          <a href="#">Nescafes</a>
          <a href="#">Green</a>
          <a href="#">Robusta Roasted</a>
          <a href="#">Mocha</a>
          <a href="#">Gain</a>
          <a href="#">Arabica Green</a>
          <a href="#">Robusta</a>
        </div>
      </div>
      <!-- Popular Tags End -->

    </div>
  </aside>
  <div class="andro_aside-overlay aside-trigger-right"></div>

  <!-- Aside (Mobile Navigation) -->
  <aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <ul>
      <li class="menu-item menu-item-has-children">
        <a href="#">Home Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="index.html">Home v1</a> </li>
          <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
          <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Blog</a>
        <ul class="sub-menu">
          <li class="menu-item menu-item-has-children">
            <a href="blog-grid.html">Blog Archive</a>
            <ul class="sub-menu">
              <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
              <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
              <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
            </ul>
          </li>
          <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
          <li class="menu-item"> <a href="login.html">Login</a> </li>
          <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
          <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
          <li class="menu-item"> <a href="cart.html">Cart</a> </li>
          <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
          <li class="menu-item"> <a href="legal.html">Legal</a> </li>
          <li class="menu-item"> <a href="error.html">Error 404</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
         <a href="#">Shop Pages</a>
         <ul class="sub-menu">
           <li class="menu-item"> <a href="shop-v1.html"> Shop v1 (Default) </a> </li>
           <li class="menu-item"> <a href="shop-v2.html"> Shop v2 (Full Width) </a> </li>
           <li class="menu-item"> <a href="shop-v3.html"> Shop v3 (No Sidebar) </a> </li>
           <li class="menu-item"> <a href="shop-v4.html"> Shop v4 (List view) </a> </li>
         </ul>
       </li>
      <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
    </ul>

  </aside>
  <div class="andro_aside-overlay aside-trigger-left"></div>

  <!-- Header Start -->
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
            <li class="menu-item"><a href="login.html"> My Account </a></li>
            <li class="menu-item menu-item-has-children">
              <a href="#"> <span class="andro_current-currency-text">Currency</span> (USD) </a>
              <ul class="sub-menu sub-menu-left">
                <li> <a href="#">United States Dollar (USD)</a> </li>
                <li> <a href="#">Kuwait Dinar (KWD)</a> </li>
                <li> <a href="#">Pound Sterling (GBP)</a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Topheader End -->

    <!-- Middle Header Start -->
    <div class="andro_header-middle">
      <div class="container">
        <nav class="navbar">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

          <!-- Search Form -->
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
                    <span>9 Packet</span>
                    <span>249.99$</span>
                  </div>
                </a>
              </li>
            </ul>

            <!-- Toggler -->
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
              <a href="#">Home Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="index.html">Home v1</a> </li>
                <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-has-children">
                  <a href="blog-grid.html">Blog Archive</a>
                  <ul class="sub-menu">
                    <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                    <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                    <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
                  </ul>
                </li>
                <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                <li class="menu-item"> <a href="login.html">Login</a> </li>
                <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
                <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
                <li class="menu-item"> <a href="legal.html">Legal</a> </li>
                <li class="menu-item"> <a href="error.html">Error 404</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children mega-menu-wrapper">
              <a href="shop-v1.html">Shop</a>
              <ul class="sub-menu">
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Membership Delivery</h6>
                          <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old.
                          </p>
                          <a href="login.html" class="andro_btn-custom shadow-none btn-sm">Become a Member</a>
                        </div>
                      </div>
                      <div class="offset-lg-1 col-lg-3">
                        <div class="mega-menu-item">
                          <h6>Shop Pages</h6>
                          <a href="shop-v1.html">Shop v1 (Default)</a>
                          <a href="shop-v2.html">Shop v2 (Full Width)</a>
                          <a href="shop-v3.html">Shop v3 (No Sidebar)</a>
                          <a href="shop-v4.html">Shop v4 (List view)</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Product Details Pages</h6>
                          <a href="product-single.html">Product Details v1</a>
                          <a href="product-single-v2.html">Product Details v2</a>
                          <a href="#" class="coming-soon">Product Details v3 <span>Coming Soon</span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
              </ul>
            </li>
            <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
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
  <!-- Header End -->

  <!-- Category Megamenu & Banner start -->
  <div class="section">
    <div class="container">
      <div class="row">

        <!-- Menu Start -->
        <div class="col-lg-3">
          <div class="andro_category-mm">
            <div class="andro_category-mm-header">
              <h6> <i class="fas fa-th-large"></i> Categories</h6>
            </div>
            <div class="andro_category-mm-body">

              <ul>
                <!-- Level 1 -->

                <li class="andro_category-mm-item andro_category-mm-item-has-children">
                  <a href="#"> Cafe Latte </a>
                  <ul class="andro_category-mm-2-cols">
                    <!-- Level 2 -->
                    <li>
                      <div class="andro_category-mm-banner">
                        <img src="assets/img/megamenu/1.jpg" alt="megamenu img">
                        <div class="andro_category-mm-banner-desc">
                          <h6>Cafe Latte</h6>
                          <p>Experience fresh coffee  like never before</p>
                        </div>
                      </div>
                      <ul>
                        <li> <a href="#">Espresso and milk</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Arabica Roasted</a> </li>
                        <li> <a href="#">Cafe Latte</a> </li>
                        <li> <a href="#">Cappucino</a> </li>
                        <li> <a href="#">Espresso</a> </li>
                        <li> <a href="#">Italian Coffee</a> </li>
                        <li> <a href="#">Arabica</a> </li>
                      </ul>
                      <ul>
                        <li> <a href="#">Cappucino</a> </li>
                        <li> <a href="#">Mocha</a> </li>
                        <li> <a href="#">Mixed Sorts</a> </li>
                        <li> <a href="#">Robusta Roasted</a> </li>
                        <li> <a href="#">Cappucino</a> </li>
                        <li> <a href="#">Creamy</a> </li>
                        <li> <a href="#">Marijuana Extract</a> </li>
                        <li> <a href="#">Strong</a> </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="andro_category-mm-item"> <a href="#"> Cappucino</a> </li>

                <li class="andro_category-mm-item andro_category-mm-item-has-children">
                  <a href="#">Rich espresso</a>
                  <ul class="andro_category-mm-2-cols">
                    <!-- Level 2 -->
                    <li>
                      <div class="andro_category-mm-banner">
                        <img src="assets/img/megamenu/2.jpg" alt="megamenu img">
                        <div class="andro_category-mm-banner-desc">
                          <h6>Ice Coffee</h6>
                          <p>Hand picked baskets for your organic goods</p>
                        </div>
                      </div>
                      <ul>
                        <li> <a href="#">Espresso and milk</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Arabica Roasted</a> </li>
                        <li> <a href="#">Cafe Latte</a> </li>
                      </ul>
                      <ul>
                        <li> <a href="#">Cappucino</a> </li>
                        <li> <a href="#">Espresso</a> </li>
                        <li> <a href="#">Italian Coffee</a> </li>
                        <li> <a href="#">Arabica</a> </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="andro_category-mm-item"> <a href="#"> Arabica Roasted </a> </li>
                <li class="andro_category-mm-item"> <a href="#"> Espresso</a> </li>
                <li class="andro_category-mm-item"> <a href="#"> Mocha</a> </li>
                <li class="andro_category-mm-item"> <a href="#">Risotto</a> </li>
                <li class="andro_category-mm-item andro_category-mm-item-has-children andro_category-mm-item-expand">
                  <a href="#"> <i class="fas fa-plus"></i> More Categories</a>
                  <ul class="andro_category-mm-2-cols">
                    <!-- Level 2 -->
                    <li>
                      <div class="andro_category-mm-banner">
                        <img src="assets/img/megamenu/3.jpg" alt="megamenu img">
                        <div class="andro_category-mm-banner-desc">
                          <h6>More Categories</h6>
                          <p>Explore more categories that we offer</p>
                        </div>
                      </div>
                      <ul>
                        <li> <a href="#">Espresso and milk</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Pumpkin Pottage</a> </li>
                        <li> <a href="#">Arabica Roasted</a> </li>
                        <li> <a href="#">Cafe Latte</a> </li>
                      </ul>
                      <ul>
                        <li> <a href="#">Cappucino</a> </li>
                        <li> <a href="#">Espresso</a> </li>
                        <li> <a href="#">Italian Coffee</a> </li>
                        <li> <a href="#">Arabica</a> </li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>

            </div>

          </div>
        </div>
        <!-- Menu End -->

        <!-- Banner Start -->
        <div class="col-lg-9">

          <div class="andro_flex-menu d-none d-md-block">
            <ul>
              <li class="menu-item"> <a href="shop-v1.html">Daily Deals</a> </li>
              <li class="menu-item menu-item-has-children">
                <a href="#">Top Sellers</a>
                <ul class="sub-menu">
                  <li class="menu-item"> <a href="#">Cafe Latte</a> </li>
                  <li class="menu-item"> <a href="#">Ice Coffee</a> </li>
                  <li class="menu-item"> <a href="#">Cappucino</a> </li>
                </ul>
              </li>
              <li class="menu-item"> <a href="shop-v3.html">Fresh Arrivals</a> </li>
              <li class="menu-item menu-item-has-children">
                <a href="#">Gift Carts</a>
                <ul class="sub-menu">
                  <li class="menu-item"> <a href="#">Loyalty System</a> </li>
                  <li class="menu-item"> <a href="#">Redemption Coupons</a> </li>
                </ul>
              </li>
              <li class="menu-item"> <a href="wishlist.html">Wishlist</a> </li>
            </ul>
          </div>

          <div class="andro_banner banner-1">
            <div class="andro_banner-slider">
              <div class="container-fluid">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <p>Use code <strong class="custom-primary">COFFEE2233 </strong> during checkout</p>
                    <h1> 40% Sale <span class="fw-400">On Select Products</span> </h1>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit </p>
                    <a href="shop-v1.html" class="andro_btn-custom">Shop Now</a>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                    <img src="assets/img/products/2.png" alt="banner img">
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <p>Use code <strong class="custom-primary">COFFEE2233 </strong> during checkout</p>
                    <h1> 40% Sale <span class="fw-400">On Select Products</span> </h1>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit</p>
                    <a href="shop-v1.html" class="andro_btn-custom">Shop Now</a>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                    <img src="assets/img/products/13.png" alt="banner img">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Banner End -->

      </div>
    </div>
  </div>
  <!-- Category Megamenu & Banner end -->

  <!-- Icons Start -->
  <div class="section section-padding pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <i class="flaticon-cannabis"></i>
            <h5>Guaranteed Coffee</h5>
            <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <i class="flaticon-Robusta"></i>
            <h5>Daily Robustaing</h5>
            <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <i class="flaticon-tag"></i>
            <h5>Cheap & Creamyy</h5>
            <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->

  <!-- Products Start -->
  <div class="section pt-0 andro_fresh-arrivals">
    <div class="container">

      <div class="section-title flex-title">
        <h4 class="title">Fresh Arrivals</h4>
        <div class="andro_arrows">
          <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
          <i class="fa fa-arrow-right slick-arrow slider-next"></i>
        </div>
      </div>

      <div class="andro_fresh-arrivals-slider">

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-featured">
            <i class="fa fa-star"></i>
            <span>Featured</span>
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/2.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html">Cappucino</a> </h5>
            <div class="andro_product-price">
              <span>19$</span>
              <span>29$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star"></i>
              </div>
              <span>4 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-featured">
            <i class="fa fa-star"></i>
            <span>Featured</span>
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html"> Mixed Sorts</a> </h5>
            <div class="andro_product-price">
              <span>19$</span>
              <span>29$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
              </div>
              <span>5 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-sale">
            20% Off
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html">Arabica Green</a> </h5>
            <div class="andro_product-price">
              <span>8$</span>
              <span>14$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star"></i>
              </div>
              <span>4 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-featured">
            <i class="fa fa-star"></i>
            <span>Featured</span>
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/2.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html">Cappucino</a> </h5>
            <div class="andro_product-price">
              <span>19$</span>
              <span>29$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star"></i>
              </div>
              <span>4 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-featured">
            <i class="fa fa-star"></i>
            <span>Featured</span>
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html"> Mixed Sorts</a> </h5>
            <div class="andro_product-price">
              <span>11$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
              </div>
              <span>5 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="andro_product andro_product-has-controls andro_product-has-buttons">
          <div class="andro_product-badge andro_badge-sale">
            20% Off
          </div>
          <div class="andro_product-thumb">
            <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
          </div>
          <div class="andro_product-body">
            <h5 class="andro_product-title"> <a href="product-single.html">Arabica Green</a> </h5>
            <div class="andro_product-price">
              <span>8$</span>
              <span>14$</span>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="andro_rating-wrapper">
              <div class="andro_rating">
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i>
                <i class="fa fa-star"></i>
              </div>
              <span>4 Stars</span>
            </div>
          </div>
          <div class="andro_product-footer">
            <div class="andro_product-buttons">
              <a href="#" class="andro_btn-custom primary">Add To Cart</a>
              <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
            </div>
          </div>
        </div>
        <!-- Product End -->

      </div>
    </div>
  </div>
  <!-- Products End -->

  <!-- Featured Products Start -->
  <div class="section section-padding pt-0">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">

          <div class="section-title">
            <h4 class="title">Featured Products</h4>
          </div>

          <div class="row">

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/7.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Robusta Roasted</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/8.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Cold brewed</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>8$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/9.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Cold brewed</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>6$</span>
                    <span></span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/10.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Italian Coffee</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/11.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Strong</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>13$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-sm-6">
              <div class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                <div class="andro_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/12.png" alt="product"></a>
                </div>
                <div class="andro_product-body">
                  <h6 class="andro_product-title"> <a href="product-single.html">Mocha</a> </h6>
                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="andro_product-footer">
                  <div class="andro_product-price">
                    <span>19$</span>
                    <span>29$</span>
                  </div>
                  <div class="andro_product-buttons">
                    <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

          </div>

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Product Categories Start -->
            <div class="sidebar-widget">
              <div class="section-title">
                <h4 class="title">Popular Categories</h4>
              </div>
              <ul class="sidebar-widget-list">
                <li>
                  <a href="#"> Cafe Latte <span>(32)</span> </a>
                  <ul>
                    <li> <a href="#">Espresso and milk <span>(14)</span> </a> </li>
                    <li> <a href="#">Pumpkin Pottage <span>(39)</span></a> </li>
                    <li> <a href="#">Seed<span>(54)</span> </a> </li>
                  </ul>
                </li>
                <li> <a href="#"> Cappucino <span>(24)</span> </a> </li>
                <li> <a href="#">Rich espresso<span>(44)</span> </a> </li>
                <li> <a href="#"> Strong<span>(15)</span> </a> </li>
                <li> <a href="#">Europian Coffee<span>(43)</span> </a> </li>
                <li> <a href="#"> Mocha <span>(75)</span> </a> </li>
              </ul>

            </div>
            <!-- Product Categories End -->

            <!-- Daily Deals Start -->
            <div class="sidebar-widget">
              <div class="section-title">
                <h4 class="title">Daily Deals</h4>
              </div>

              <div class="deals-slider">

                <!-- Deal Start -->
                <div class="andro_product">
                  <div class="andro_product-badge andro_badge-sale">
                    20% Off
                  </div>
                  <div class="andro_product-thumb">
                    <a href="product-single.html"><img src="assets/img/products/5.png" alt="product"></a>
                    <div class="andro_countdown-timer" data-countdown="2021/01/01"></div>
                  </div>
                  <div class="andro_product-body">
                    <h5 class="andro_product-title"> <a href="product-single.html">Strong</a> </h5>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                    <div class="andro_rating-wrapper">
                      <div class="andro_rating">
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <span>4 Stars</span>
                    </div>
                  </div>
                  <div class="andro_product-footer">
                    <div class="andro_product-price">
                      <span>8$</span>
                      <span>14$</span>
                    </div>
                    <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
                  </div>

                </div>
                <!-- Deal End -->

                <!-- Deal Start -->
                <div class="andro_product">
                  <div class="andro_product-badge andro_badge-sale">
                    10% Off
                  </div>
                  <div class="andro_product-thumb">
                    <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
                    <div class="andro_countdown-timer" data-countdown="2021/05/06"></div>
                  </div>
                  <div class="andro_product-body">
                    <h5 class="andro_product-title"> <a href="product-single.html">Arabica Green</a> </h5>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                    <div class="andro_rating-wrapper">
                      <div class="andro_rating">
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <span>4 Stars</span>
                    </div>
                  </div>
                  <div class="andro_product-footer">
                    <div class="andro_product-price">
                      <span>8$</span>
                      <span>14$</span>
                    </div>
                    <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
                  </div>

                </div>
                <!-- Deal End -->

                <!-- Deal Start -->
                <div class="andro_product">
                  <div class="andro_product-badge andro_badge-sale">
                    20% Off
                  </div>
                  <div class="andro_product-thumb">
                    <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
                    <div class="andro_countdown-timer" data-countdown="2021/09/09"></div>
                  </div>
                  <div class="andro_product-body">
                    <h5 class="andro_product-title"> <a href="product-single.html">Arabica</a> </h5>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                    <div class="andro_rating-wrapper">
                      <div class="andro_rating">
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <span>4 Stars</span>
                    </div>
                  </div>
                  <div class="andro_product-footer">
                    <div class="andro_product-price">
                      <span>8$</span>
                      <span>14$</span>
                    </div>
                    <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
                  </div>

                </div>
                <!-- Deal End -->

              </div>

            </div>
            <!-- Daily Deals End -->

            <!-- Newsletter Start -->
            <div class="sidebar-widget">
              <div class="andro_newsletter-form">
                <h5>Join our newsletter</h5>
                <p>Get exclusive weekly deals with our newsletter subscription</p>
                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="newsletter_email" placeholder="Email Address" value="">
                  </div>
                  <button type="submit" class="andro_btn-custom secondary btn-block shadow-none" name="button">Join Newsletter</button>
                </form>
              </div>
            </div>
            <!-- Newsletter End -->

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Featured Products End -->

  <!-- Call to action Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="andro_cta-notice secondary-bg pattern-bg">
        <div class="andro_cta-notice-inner">
          <h3 class="text-white">Buy Today and Get 20% Off</h3>
          <p class="text-white">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
          <a href="#" class="andro_btn-custom light">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to action End -->

  <!-- Top Picks Start -->
  <div class="section section-padding pt-0">
    <div class="container">

      <div class="section-title">
        <h4 class="title">Top Picks</h4>
      </div>

      <div class="row">

        <!-- Product Start -->
        <div class="col-lg-6">
          <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/2.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <div class="andro_rating-wrapper">
                <div class="andro_rating">
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star"></i>
                </div>
                <span>4 Stars</span>
              </div>
              <h5 class="andro_product-title"> <a href="product-single.html">Cappucino</a> </h5>
              <div class="andro_product-price">
                <span>19$</span>
                <span>29$</span>
              </div>
              <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>

            </div>
            <div class="andro_product-footer">
              <div class="andro_product-buttons">
                <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-lg-6">
          <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/5.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <div class="andro_rating-wrapper">
                <div class="andro_rating">
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                </div>
                <span>5 Stars</span>
              </div>
              <h5 class="andro_product-title"> <a href="product-single.html"> Cappucinos 30:0 </a> </h5>
              <div class="andro_product-price">
                <span>11$</span>
              </div>
              <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            </div>
            <div class="andro_product-footer">
              <div class="andro_product-buttons">
                <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-lg-6">
          <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/3.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <div class="andro_rating-wrapper">
                <div class="andro_rating">
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                </div>
                <span>5 Stars</span>
              </div>
              <h5 class="andro_product-title"> <a href="product-single.html"> Mocha </a> </h5>
              <div class="andro_product-price">
                <span>17$</span>
              </div>
              <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            </div>
            <div class="andro_product-footer">
              <div class="andro_product-buttons">
                <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-lg-6">
          <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
            <div class="andro_product-badge andro_badge-featured">
              <i class="fa fa-star"></i>
              <span>Featured</span>
            </div>
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <div class="andro_rating-wrapper">
                <div class="andro_rating">
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                </div>
                <span>5 Stars</span>
              </div>
              <h5 class="andro_product-title"> <a href="product-single.html">Arabica</a> </h5>
              <div class="andro_product-price">
                <span>23$</span>
              </div>
              <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            </div>
            <div class="andro_product-footer">
              <div class="andro_product-buttons">
                <a href="#" class="andro_btn-custom primary">Add To Cart</a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal" class="andro_btn-custom light">Quick View</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

      </div>
    </div>
  </div>
  <!-- Top Picks End -->

  <!-- Blog Posts Start -->
  <div class="section pt-0">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">

          <div class="section-title">
            <h4 class="title">From Our Blog</h4>
          </div>

          <div class="row">

            <!-- Article Start -->
            <div class="col-md-6">
              <article class="andro_post">
                <div class="andro_post-thumb">
                  <a href="post-single.html">
                    <img src="assets/img/blog/1.jpg" alt="post">
                  </a>
                </div>
                <div class="andro_post-body">
                  <div class="andro_post-categories">
                    <a href="#">Cafe Latte</a>
                    <a href="#">Coffee</a>
                  </div>
                  <div class="andro_post-desc">
                    <h5> <a href="post-single.html">Difference Is In the Fragnance</a> </h5>
                    <span> <span class="fw-600">Posted On</span> <a href="post-single.html" class="andro_post-date">May 20, 2021</a> </span>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                  </div>
                  <a class="andro_btn-custom btn-block" href="post-single.html"> Read More </a>
                </div>
              </article>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="col-md-6">
              <article class="andro_post">
                <div class="andro_post-thumb">
                  <a href="post-single.html">
                    <img src="assets/img/blog/2.jpg" alt="post">
                  </a>
                </div>
                <div class="andro_post-body">
                  <div class="andro_post-categories">
                    <a href="#">Creamy</a>
                  </div>
                  <div class="andro_post-desc">
                    <h5> <a href="post-single.html">Fresh brewed Legalization Update</a> </h5>
                    <span> <span class="fw-600">Posted On</span> <a href="post-single.html" class="andro_post-date">May 20, 2021</a> </span>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                  </div>
                  <a class="andro_btn-custom btn-block" href="post-single.html"> Read More </a>
                </div>
              </article>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="col-md-6">
              <article class="andro_post">
                <div class="andro_post-thumb">
                  <a href="post-single.html">
                    <img src="assets/img/blog/3.jpg" alt="post">
                  </a>
                </div>
                <div class="andro_post-body">
                  <div class="andro_post-categories">
                    <a href="#">Cafe Latte</a>
                    <a href="#">Cappucino </a>
                  </div>
                  <div class="andro_post-desc">
                    <h5> <a href="post-single.html">The Most Expensive Cup of Coffee in the Usa</a> </h5>
                    <span> <span class="fw-600">Posted On</span> <a href="post-single.html" class="andro_post-date">May 20, 2021</a> </span>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                  </div>
                  <a class="andro_btn-custom btn-block" href="post-single.html"> Read More </a>
                </div>
              </article>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="col-md-6">
              <article class="andro_post">
                <div class="andro_post-thumb">
                  <a href="post-single.html">
                    <img src="assets/img/blog/4.jpg" alt="post">
                  </a>
                </div>
                <div class="andro_post-body">
                  <div class="andro_post-categories">
                    <a href="#">Cafe Latte</a>
                  </div>
                  <div class="andro_post-desc">
                    <h5> <a href="post-single.html">Make the Perfect Basket</a> </h5>
                    <span> <span class="fw-600">Posted On</span> <a href="post-single.html" class="andro_post-date">May 20, 2021</a> </span>
                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                  </div>
                  <a class="andro_btn-custom btn-block" href="post-single.html"> Read More </a>
                </div>
              </article>
            </div>
            <!-- Article End -->

          </div>

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Testimonials Start -->
            <div class="sidebar-widget">

              <div class="section-title">
                <h4 class="title">Testomonials</h4>
              </div>

              <div class="andro_testimonials">
                <div class="andro_testimonial-item">
                  <div class="andro_testimonials-inner">
                    <img src="assets/img/people/4.jpg" alt="author">
                    <h5>Jina Flock</h5>
                    <span>Nescafeer</span>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                  <ul class="andro_sm">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                  </ul>
                </div>
                <div class="andro_testimonial-item">
                  <div class="andro_testimonials-inner">
                    <img src="assets/img/people/3.jpg" alt="author">
                    <h5>Miranda Blue</h5>
                    <span>Chemist</span>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                  <ul class="andro_sm">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                  </ul>
                </div>
                <div class="andro_testimonial-item">
                  <div class="andro_testimonials-inner">
                    <img src="assets/img/people/2.jpg" alt="author">
                    <h5>Feleciti Rolling</h5>
                    <span>Nescafeer</span>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                  <ul class="andro_sm">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <!-- Testimonials End -->

            <!-- Image Start -->
            <div class="sidebar-widget d-none d-lg-block">
              <div class="andro_auth-mini">
                <h5>Login</h5>
                <p>Get crazy benefits today by joining our community</p>
                <form method="post">

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                  </div>

                  <div class="form-group text-center">
                    <a href="#">Forgot Password?</a>
                  </div>

                  <button type="submit" class="andro_btn-custom primary btn-block">Login</button>

                  <div class="andro_auth-seperator">
                    <span>OR</span>
                  </div>

                  <div class="andro_social-login">
                    <button type="button" class="andro_social-login-btn facebook"><i class="fab fa-facebook-f"></i> Continue with Facebook </button>
                    <button type="button" class="andro_social-login-btn google"><i class="fab fa-google"></i> Continue with Google</button>
                  </div>

                  <p class="mb-0 text-center">Don't have an account? <a href="register.html">Create One</a> </p>

                </form>
              </div>
            </div>
            <!-- Image End -->

          </div>
        </div>
        <!-- Sidebar End -->

      </div>
    </div>
  </div>
  <!-- Blog Posts End -->

  <!-- Instagram Start -->
  <div class="row no-gutters">
    <div class="col-lg-4 secondary-bg pattern-bg">
      <div class="andro_instagram">
        <h3 class="text-white">Follow Us On Instagram</h3>
        <a href="#" class="andro_btn-custom light">Follow Us</a>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/1.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/2.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/3.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/4.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/5.jpg" alt="ig">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-6 p-0">
          <a href="#" class="andro_ig-item">
            <img src="assets/img/ig/6.jpg" alt="ig">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Instagram End -->

  <!-- Footer Start -->
  <footer class="andro_footer">
    <!-- Top Footer -->
    <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/logo.png" alt="logo">
        </div>
        <div class="andro_footer-buttons">
          <a href="#"> <img src="assets/img/android.png" alt="download it on the app store"></a>
          <a href="#"> <img src="assets/img/ios.png" alt="download it on the app store"></a>
        </div>
      </div>
    </div>

    <!-- Middle Footer -->
    <div class="andro_footer-middle">
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
    </div>

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
          <p> Copyright © 2020 <a href="#">Yourwebsite</a> All Rights Reserved. </p>
          <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>
  <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="assets/js/plugins/jquery.zoom.min.js"></script>


  <!-- Coffeez Scripts -->
  <script src="assets/js/main.js"></script>

</body>

</html>