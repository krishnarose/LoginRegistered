@extends('layout')
@section('content')


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Welcome to <span>Troweld</span></h2>
            </div>
            <p>
              Simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book. It has s
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- portfolio section -->

  <section class="portfolio_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Work Portfolio
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="filter_box">
          <nav class="owl-filter-bar">
            <a href="#" class="item active" data-owl-filter="*">All</a>
            <a href="#" class="item" data-owl-filter=".decorative">DECORATIVE</a>
            <a href="#" class="item" data-owl-filter=".facade">FACADES </a>
            <a href="#" class="item" data-owl-filter=".perforated">PERFORATED
            </a>
            <a href="#" class="item" data-owl-filter=".railing">RAILINGS </a>
          </nav>
        </div>
      </div>
    </div>
    <div class="owl-carousel portfolio_carousel">
      <div class="item decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p1.jpg" alt="" />
            <div class="btn_overlay">
              <a href="" class="">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item facade">
        <div class="box">
          <div class="img-box">
            <img src="images/p2.jpg" alt="" />
            <div class="btn_overlay">
              <a href="" class="">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item perforated decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p3.jpg" alt="" />
            <div class="btn_overlay">
              <a href="" class="">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p1.jpg" alt="" />
            <div class="btn_overlay">
              <a href="" class="">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>Our <span>Services</span></h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Home Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Gate Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Window Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s4.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Machine Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s5.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Bike Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s6.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Car Welding
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Get In <span>Touch</span></h2>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form action="">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Your Name" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Phone Number" />
                </div>
                <div class="form-group col-lg-6">
                  <select name="" id="" class="form-control wide">
                    <option value="">Select Service</option>
                    <option value="">Service 1</option>
                    <option value="">Service 2</option>
                    <option value="">Service 3</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message" />
                </div>
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="row">
              <div class="col-md-11">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/client.jpg" alt="" />
                        </div>
                        <h5>
                          Alex Jonson
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore
                          magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/client.jpg" alt="" />
                        </div>
                        <h5>
                          Alex Jonson
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore
                          magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/client.jpg" alt="" />
                        </div>
                        <h5>
                          Alex Jonson
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore
                          magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <ol class="carousel-indicators">
                  <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#customCarousel2" data-slide-to="1"></li>
                  <li data-target="#customCarousel2" data-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->









  

@endsection