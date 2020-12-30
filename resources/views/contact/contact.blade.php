@extends('layouts.apps')

@section('headtitle')
    | Contact Us
@endsection

@section('content')
 <!-- Subheader Start -->
 <div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
      <div class="andro_subheader-inner">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

   <!-- Locations Start -->
   <div class="section section-padding">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="andro_cta">
            <a href="#">
              <img src="assets/img/locations/1.jpg" alt="location">
              <div class="andro_cta-content">
                <h4 class="text-white">Find Us In <span class="fw-400">Greece</span> </h4>
                <p class="text-white mb-0">Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="andro_cta">
            <a href="#">
              <img src="assets/img/locations/2.jpg" alt="location">
              <div class="andro_cta-content">
                <h4 class="text-white">Find Us In <span class="fw-400">New York</span> </h4>
                <p class="text-white mb-0">Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.</p>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Locations Start -->

  <!-- Icons Start -->
  <div class="section section-padding pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <a href="tel:+123456789">
              <i class="flaticon-email"></i>
              <h5>Call Center</h5>
              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <a href="mailto:example@outlook.com">
              <i class="flaticon-email"></i>
              <h5>Mail Us</h5>
              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="andro_icon-block">
            <a href="#">
              <i class="flaticon-location"></i>
              <h5>Nearest Branch</h5>
              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg">
              <rect height="500" width="500" class="andro_svg-stroke-shape-anim"></rect>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->

  <!-- FAQ & Contact Form Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mb-lg-30">

          <div class="section-title">
            <h4 class="title">FAQ</h4>
          </div>

          <div class="accordion with-gap" id="generalFAQExample">
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalOne" aria-expanded="true" aria-controls="generalOne">
                What is Coffeez?
              </div>

              <div id="generalOne" class="collapse show" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
                Getting Started with Coffeez
              </div>

              <div id="generalTwo" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalThree" aria-expanded="false" aria-controls="generalThree">
                Do i have the latest version?
              </div>

              <div id="generalThree" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFour" aria-expanded="false" aria-controls="generalFour">
                How many times can I use Coffeez?
              </div>

              <div id="generalFour" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFive" aria-expanded="false" aria-controls="generalFive">
                How to migrate my website?
              </div>

              <div id="generalFive" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-7">

          <div class="section-title">
            <h4 class="title">Contact Us</h4>
          </div>

          <form method="post">
            <div class="row">
              <div class="form-group col-lg-6">
                <input type="text" placeholder="First Name" class="form-control" name="fname" value="">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" placeholder="Last Name" class="form-control" name="lname" value="">
              </div>
              <div class="form-group col-lg-12">
                <input type="email" placeholder="Email Address" class="form-control" name="email" value="">
              </div>
              <div class="form-group col-lg-12">
                <input type="text" placeholder="Subject" class="form-control" name="subject" value="">
              </div>
              <div class="form-group col-lg-12">
                <textarea name="message" class="form-control" placeholder="Type your message" rows="8"></textarea>
              </div>
            </div>
            <button type="submit" class="andro_btn-custom primary" name="button">Send Message</button>
          </form>

        </div>

      </div>
    </div>
  </div>
  <!-- FAQ & Contact Form End -->

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


@endsection