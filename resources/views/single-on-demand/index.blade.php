@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">
        <!-- ***** Featured Start ***** -->
        <div class="row">
          <div class="col-lg-9">
            <div class="feature-banner header-text">
              <div class="row">
                <div class="col-lg-12">
                  <div class="thumb justify-content-center">
                    <iframe
                      style="border-radius: 23px; left: 0px; top: 1px"
                      src="https://www.youtube.com/embed/mOaAibUCWVE?autoplay=0&controls=1&showinfo=0&rel=0&thumbnail=assets/images/feature-right.jpg"
                      frameborder="0"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- form start-->
          <div class="col-lg-3 mt-lg-0 mt-sm-5 mt-md-5">
            <div class="top-downloaded">
              <div class="heading-section">
                <h5 class="mb-3">Fill to Watch On-Demand</h5>
              </div>

              <div>
                <p class="mb-3">
                  We’ve compiled a list of our most popular events
                </p>
              </div>

              <div class="div">
                <form>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control opacity-50"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                      placeholder="Name"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control opacity-50"
                      id="exampleInputPassword1"
                      placeholder="Email"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control opacity-50"
                      id="exampleInputPassword1"
                      placeholder="Company"
                    />
                  </div>
                  <button
                    type="submit"
                    style="
                      background-color: #352ec1;
                      color: white;
                      border: none;
                      border-radius: 25px;
                      padding: 6px 25px;
                    "
                    class="main-button"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
          <!-- form end-->
        </div>
        <!-- ***** Featured End ***** -->

        <!-- ***** Details Start ***** -->
        <div class="game-details">
          <div class="row">
            <div class="col-lg-12">
              <h2>On-Demand Details</h2>
            </div>
            <div class="col-lg-12">
              <div class="content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="left-info">
                      <div class="row">
                        <div class="col-lg-8 col-md-8">
                          <h4>
                            How to resolve challenges with low-input RNA-seq
                            library prep – maximizing complete transcriptome
                            sequencing and analysis using a flexible and
                            customizable strategy
                          </h4>
                          <span>Qiagen</span>
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <ul>
                            <li>
                              <i class="fa fa-star" style="color: pink"></i>
                              4.8
                            </li>
                            <li>
                              <i class="fa fa-eye" style="color: pink"></i>
                              2.3M
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <img
                      src="assets/images/details-01.jpg"
                      alt=""
                      style="border-radius: 23px; margin-bottom: 30px"
                    />
                  </div>
                  <div class="col-lg-4">
                    <img
                      src="assets/images/details-02.jpg"
                      alt=""
                      style="border-radius: 23px; margin-bottom: 30px"
                    />
                  </div>
                  <div class="col-lg-4">
                    <img
                      src="assets/images/details-03.jpg"
                      alt=""
                      style="border-radius: 23px; margin-bottom: 30px"
                    />
                  </div>
                  <div class="col-lg-12">
                    <p>
                      Cyborg Gaming is free HTML CSS website template
                      provided by TemplateMo. This is Bootstrap v5.2.0
                      layout. You can make a
                      <a href="https://paypal.me/templatemo" target="_blank"
                        >small contribution via PayPal</a
                      >
                      to info [at] templatemo.com and thank you for
                      supporting. If you want to get the PSD source files,
                      please contact us. Lorem ipsum dolor sit consectetur
                      es dispic dipiscingei elit, sed doers eiusmod lisum
                      hored tempor.
                    </p>
                  </div>

                  <div class="col-lg-12 mt-4">
                    <div class="left-info">
                      <div class="row">
                        <div class="col-12">
                          <span><strong>About The Speaker</strong></span>
                          <p class="mb-1 mt-1">
                            Dr. Muhammad Topan | Qiagen
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Sed, dolores! Deleniti alias
                            maiores temporibus praesentium?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Details End ***** -->
      </div>
    </div>
  </div>
</div>
@endsection
