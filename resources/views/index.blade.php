@extends('layouts.app')

@section('headtitle')
    | Home
@endsection

@section('content')
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
                    <h1> 10 % Diskon <span class="fw-400">On Joining Member Kopi Pawon</span> </h1>
                    <p>Tunggu Apalagi ? Ayo Join Menjadi Member Kopi Pawon Nusantara, dan dapatkan Keuntungan Nikmat, senikmat Kopi Pawon</p>
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

        
<!-- section star -->
<div class="section">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-badge andro_badge-featured">
    <i class="fa fa-star"></i>
    <span>Featured</span>
  </div>
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
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>19$</span>
        <span>29$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-thumb">
    <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
  </div>
  <div class="andro_product-body">
    <div class="andro_rating-wrapper">
      <div class="andro_rating">
        <i class="fa fa-star active"></i>
        <i class="fa fa-star active"></i>
        <i class="fa fa-star active"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <span>3 Stars</span>
    </div>
    <h5 class="andro_product-title"> <a href="product-single.html">Arabica Green</a> </h5>
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>19$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-badge andro_badge-featured">
    <i class="fa fa-star"></i>
    <span>Featured</span>
  </div>
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
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>8$</span>
        <span>15$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

</div>

<div class="col-lg-6">

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-thumb">
    <a href="product-single.html"><img src="assets/img/products/14.png" alt="product"></a>
  </div>
  <div class="andro_product-body">
    <div class="andro_rating-wrapper">
      <div class="andro_rating">
        <i class="fa fa-star active"></i>
        <i class="fa fa-star active"></i>
        <i class="fa fa-star active"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <span>3 Stars</span>
    </div>
    <h5 class="andro_product-title"> <a href="product-single.html">Arabica Roasted</a> </h5>
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>12$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-thumb">
    <a href="product-single.html"><img src="assets/img/products/8.png" alt="product"></a>
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
    <h5 class="andro_product-title"> <a href="product-single.html">Cold brewed</a> </h5>
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>19$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Product Start -->
<div class="andro_product andro_product-list">
  <div class="andro_product-thumb">
    <a href="product-single.html"><img src="assets/img/products/7.png" alt="product"></a>
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
    <h5 class="andro_product-title"> <a href="product-single.html">Robusta Roasted</a> </h5>
    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <div class="andro_product-footer">
      <div class="andro_product-price">
        <span>8$</span>
        <span>15$</span>
      </div>
      <div class="btn-group">
        <a href="product-single.html" class="andro_btn-custom btn-sm">Buy Now</a>
        <button type="button" class="andro_btn-custom dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#quickViewModal"> <i class="fa fa-eye"></i> Quick View</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-sync"></i> Compare</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-heart"></i> Add To Wishlist</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

</div>


    
    </div>
  </div>
<!-- section end -->





























      </div>
    </div>
  </div>
@endsection