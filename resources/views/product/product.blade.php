@extends('layouts.apps')

@section('headtitle')
    | Products
@endsection

@section('content')
<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
      <div class="andro_subheader-inner">
        <h1>Product</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/product">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->
  <!-- Products Start -->
  <div class="section">
    <div class="container">

      <!-- Product Count & Orderby Start -->
      <div class="andro_shop-global">
        <p>Showing <b>20</b> of <b>320</b> products </p>
        <form method="post">
          <select class="form-control" name="orderby">
            <option value="default">Default sorting</option>
            <option value="latest">Latest release</option>
            <option value="price-down">Price: High - Low</option>
            <option value="price-up">Price: Low - High</option>
            <option value="popularity">Popularity Sorting</option>
          </select>
        </form>
      </div>
      <!-- Product Count & Orderby End -->

      <div class="row">

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/8.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <h5 class="andro_product-title"> <a href="product-single.html">Cold brewed</a> </h5>
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
            <div class="andro_product-badge andro_badge-featured">
              <i class="fa fa-star"></i>
              <span>Featured</span>
            </div>
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/9.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <h5 class="andro_product-title"> <a href="product-single.html">Cold brewed</a> </h5>
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-md-4 col-sm-6">
          <div class="andro_product andro_product-has-controls">
            <div class="andro_product-badge andro_badge-sale">
              20% Off
            </div>
            <div class="andro_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/14.png" alt="product"></a>
            </div>
            <div class="andro_product-body">
              <h5 class="andro_product-title"> <a href="product-single.html">Arabica Roasted</a> </h5>
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
              <div class="andro_product-controls">
                <a href="#"> <i data-toggle="tooltip" title="Add To Cart" data-placement="top" class="flaticon-shopping-basket"></i></a>
                <a href="#" data-toggle="modal" data-target="#quickViewModal"> <i data-toggle="tooltip" title="Quick View" data-placement="top" class="flaticon-view"></i></a>
                <a href="#"> <i data-toggle="tooltip" title="Compare" data-placement="top" class="flaticon-compare"></i></a>
                <a href="#" class="favorite"> <i data-toggle="tooltip" title="Add To Wishlist" data-placement="top" class="flaticon-like"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product End -->

      </div>

@endsection