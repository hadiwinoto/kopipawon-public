@extends('layouts.apps')

@section('headtitle')
    | Franchise
@endsection

@section('content')


<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
      <div class="andro_subheader-inner">
        <h1>Franchise</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Franchise</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->
<!-- Legal Start -->
<div class="section">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">
          <div class="entry-content">

            <h3>Who are we</h3>
            <p>Our website is : www.kopipawon.com</p>

            <h3>Privacy Policy</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
              of type and scrambled it to make a type specimen book. It has survived not only five centuries
            </p>
            <h3>Cookie Policy</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
              of type and scrambled it to make a type specimen book. It has survived not only five centuries
            </p>
            <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p>
            <h3>Order Policy</h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
            </p>
            <p>
              All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
              combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
              The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
            </p>
            <h3>Analytics</h3>
            <p>
              All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
              combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
              The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
            </p>
            <h3>How Do We Store Your Data</h3>
            <p>
              All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
              combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
              The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>

          </div>
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Recent Posts Start -->
            <div class="sidebar-widget widget-recent-posts">
              <h5 class="widget-title">Recent Posts</h5>
              <article class="post">
                <a href="post-single.html"><img src="assets/img/blog/5.jpg" alt="post"></a>
                <h6> <a href="post-single.html">Drinking coffee during sports</a> </h6>
                <span>Posted on  <a href="post-single.html">May 20, 2021</a> </span>
              </article>
              <article class="post">
                <a href="post-single.html"><img src="assets/img/blog/3.jpg" alt="post"></a>
                <h6> <a href="post-single.html">The Most Expensive Cup of Coffee in the Usa</a> </h6>
                <span>Posted on  <a href="post-single.html">May 20, 2021</a> </span>
              </article>
            </div>
            <!-- Recent Posts End -->

            <!-- Categories Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Post Categories </h5>
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
              </ul>

            </div>
            <!-- Categories End -->

            <!-- Newsletter Start -->
            <div class="sidebar-widget">
              <div class="andro_newsletter-form">
                <h5>Join our newsletter</h5>
                <p>Get exclusive weekly deals with our newsletter subscription</p>
                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="newsletter_email" placeholder="Email Address" value="">
                  </div>
                  <button type="submit" class="andro_btn-custom btn-block" name="button">Join Newsletter</button>
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
  <!-- Legal End -->



@endsection