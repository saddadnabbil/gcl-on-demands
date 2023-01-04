@extends('layouts-main.main')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner" style="background-image: url({{ asset('assets/images/banner-bg.jpg') }})">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h6>Welcome To Events & Webinars</h6>
                    <h4><em>Browse</em> Our Popular Events & Webinars Here</h4>
                    <div class="main-button">
                      <a href="{{ route('popular') }}">Browse Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** Start Stream Start ***** -->
            <div class="start-stream my-5">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="item">
                      <a href="#upcoming">
                        <div class="icon">
                          <img
                            src="{{ asset('assets/images/icon1.png') }}"
                            alt=""
                            style="max-width: 60px; border-radius: 50%"
                          />
                        </div>
                        <h4>Upcoming Events & Webinars</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Iure itaque veniam rem minus? Praesentium,
                          sapiente?
                        </p>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <a href="{{ route('on-demands') }}"
                        ><div class="icon">
                          <img
                            src="{{ asset('assets/images/icon3.png') }}"
                            alt=""
                            style="max-width: 60px; border-radius: 50%"
                          />
                        </div>
                        <h4>On-Demand Sessions</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Iure itaque veniam rem minus ? Praesentium,
                          sapiente?
                        </p></a
                      >
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="item">
                      <a href="{{ route('popular') }}">
                        <div class="icon">
                          <img
                            src="{{ asset('assets/images/icon2.png') }}"
                            alt=""
                            style="max-width: 60px; border-radius: 50%"
                          />
                        </div>
                        <h4>Top 5 events and webinars</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Iure itaque veniam rem minus? Praesentium,
                          sapiente?
                        </p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Start Stream End ***** -->

            <!-- ***** Featured Games Start ***** -->
            <div class="row mt-5" id="upcoming">
              <div class="col-lg-8">
                <div class="featured-games header-text">
                  <div class="heading-section">
                    <h4><em>Upcoming</em> Events and Webinars</h4>
                  </div>
                  <div class="owl-features owl-carousel">
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/profile.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/featured-02.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                      <!-- <ul>
                        <li><i class="fa fa-star"  style=""></i> 4.8 &nbsp;</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/featured-03.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                      <!-- <ul>
                        <li><i class="fa fa-star"  style=""></i> 4.8 &nbsp;</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/featured-01.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                      <!-- <ul>
                        <li><i class="fa fa-star"  style=""></i> 4.8 &nbsp;</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/featured-02.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                      <!-- <ul>
                        <li><i class="fa fa-star"  style=""></i> 4.8 &nbsp;</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="{{ asset('assets/images/featured-03.jpg') }}" alt="" />
                        <div class="hover-effect">
                          <h6>Webinar</h6>
                        </div>
                      </div>
                      <h4>Qiagen Webinar<br /><span>20 Januari 2023</span></h4>
                      <!-- <ul>
                        <li><i class="fa fa-star"></i> 4.8 &nbsp;</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 justify-content-center align-content-center">
                <div class="top-downloaded">
                  <div class="heading-section">
                    <h5 class="mb-3">About Company</h5>
                  </div>

                  <div>
                    <p class="mb-3">
                      PT. Genecraft Labs, established in 2006, is a leading life
                      science, analytical chemistry and general laboratory
                      instruments, reagents and consumables distribution company
                      in Indonesia.
                      <br />
                    </p>
                  </div>

                  <div class="text-button">
                    <a href="/about-us">Visit Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Featured Games End ***** -->

            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>On-Demand</em> Sessions</h4>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <div class="container-img">
                          <a href="{{ route('single-on-demand') }}"
                            ><img
                              src="assets/images/popular-01.jpg"
                              alt=""
                              class="card-img-top"
                          /></a>
                        </div>
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                      <div class="item">
                        <img src="assets/images/popular-01.jpg" alt="" />
                        <h4>
                          Accelerate R&D in New Cancer Drug Development: A
                          Translational Research Use-case and Discussion<br /><span
                            >Sandbox</span
                          >
                        </h4>
                        <div class="div">
                          <ul>
                            <li>
                              <i class="fa fa-star" style=""></i> 4.8 &nbsp;
                              <i class="fa fa-eye" style=""></i> 2.3M
                            </li>
                            <li></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="main-button">
                        <a href="browse.html">Show All On-Demand Webinars</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Most Popular End ***** -->
          </div>
        </div>
      </div>
    </div>
@endsection