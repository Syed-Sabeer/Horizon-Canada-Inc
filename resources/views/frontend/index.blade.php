@extends('layouts.frontend.master')


@section('css')

@endsection

@section('content')



        <!-- hero area start -->
        <section class="hero-area">
          <div class="hero-area-inner">
            <div class="slide-button-bg">
              <img class="left-btn-bg" src="{{ asset('FrontendAssets/imgs/shape/shape-26.webp')}}" alt="image">
              <img class="right-btn-bg" src="{{ asset('FrontendAssets/imgs/shape/shape-27.webp')}}" alt="image">
            </div>
            <div class="swiper slider-active">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero-slide">
                    <div class="hero-slide-bg">
                      <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-1.webp')}}" alt="image">
                    </div>
                    <span class="hero-slide-tag">It Solution</span>
                    <div class="container rr-container-1410">
                      <div class="hero-content">
                        <div class="hero-title-wrapper">
                          <div class="subtitle-wrapper" data-animation="fadeInUp" data-delay=".3s">
                            <span class="hero-subtitle">You Think We Built Your Vision</span>
                          </div>
                          <div class="title-wrapper" data-animation="fadeInUp" data-delay=".6s">
                            <h1 class="hero-title">Transforming Ideas into <span>IT Solutions</span></h1>
                          </div>
                        </div>
                        <div class="text-wrapper" data-animation="fadeInUp" data-delay=".9s">
                          <p class="text">We are dedicated to building long-term partnerships with our clients, ensuring
                            their
                            success.</p>
                        </div>
                        <div class="btn-wrapper" data-animation="fadeInUp" data-delay="1.2s">
                          <a href="contact.html" class="rr-btn">
                            <span class="btn-wrap">
                              <span class="text-one">Get Started Now</span>
                              <span class="text-two">Get Started Now</span>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="hero-slide">
                    <div class="hero-slide-bg">
                      <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-50.webp')}}" alt="image">
                    </div>
                    <span class="hero-slide-tag">It Solution</span>
                    <div class="container rr-container-1410">
                      <div class="hero-content">
                        <div class="hero-title-wrapper">
                          <div class="subtitle-wrapper" data-animation="fadeInUp" data-delay=".3s">
                            <span class="hero-subtitle">You Think We Built Your Vision</span>
                          </div>
                          <div class="title-wrapper" data-animation="fadeInUp" data-delay=".6s">
                            <h1 class="hero-title">Elevating Your Business <span>With Industry
                                Experts</span></h1>
                          </div>
                        </div>
                        <div class="text-wrapper" data-animation="fadeInUp" data-delay=".9s">
                          <p class="text">We are dedicated to building long-term partnerships with our clients, ensuring
                            their
                            success.</p>
                        </div>
                        <div class="btn-wrapper" data-animation="fadeInUp" data-delay="1.2s">
                          <a href="contact.html" class="rr-btn">
                            <span class="btn-wrap">
                              <span class="text-one">Get Started Now</span>
                              <span class="text-two">Get Started Now</span>
                            </span>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-nav">
              <div class="slider-button-prev hero-nav-btn">
                <i class="fa-solid fa-arrow-left"></i>
              </div>
              <div class="slider-button-next hero-nav-btn">
                <i class="fa-solid fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </section>
        <!-- hero area end -->

        <!-- about area start -->
        <section class="about-area">
          <div class="container rr-container-1410">
            <div class="about-area-inner section-spacing">
              <div class="about-thumb-wrappper fade-anim" data-direction="left">
                <div class="about-thumb-1 img-reveal-anim">
                  <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-2.webp')}}" alt="image">
                </div>
                <div class="about-thumb-content-wrapper">
                  <div class="about-thumb-2" data-speed="0.9">
                    <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-3.webp')}}" alt="image">
                  </div>
                </div>
              </div>
              <div class="about-content fade-anim" data-direction="right">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">About Our
                        Comapny</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Make Sure Your Objectives
                      Improves Profit Drivers</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">We envision a future where our clients are at the forefront of their industries,
                    setting new standards of excellence through the transformative power of our consulting services.</p>
                </div>
                <div class="features-wrapper-box">
                  <div class="features-wrapper">
                    <div class="feature-box">
                      <div class="thumb">
                        <img src="{{ asset('FrontendAssets/imgs/icon/icon-22.webp')}}" alt="image">
                      </div>
                      <div class="content">
                        <h3 class="title">Improving Your Business Planning</h3>
                        <p class="text">We envision a future where our clients are at the forefront of their industries,
                          setting new standards of excellence.</p>
                      </div>
                    </div>
                    <div class="feature-box">
                      <div class="thumb">
                        <img src="{{ asset('FrontendAssets/imgs/icon/icon-23.webp')}}" alt="image">
                      </div>
                      <div class="content">
                        <h3 class="title">Make Sure You Can Evaluate Success</h3>
                        <p class="text">We envision a future where our clients are at the forefront of their industries,
                          setting new standards of excellence.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn-wrapper">
                  <a href="contact.html" class="rr-btn">
                    <span class="btn-wrap">
                      <span class="text-one">Take Our Service <i class="fa-solid fa-arrow-right"></i></span>
                      <span class="text-two">Take Our Service <i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- about area end -->

        <!-- service area start -->
        <section class="service-area">
          <div class="service-area-bg">
            <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-4.webp')}}" alt="image">
          </div>
          <div class="container rr-container-1410">
            <div class="service-area-inner section-spacing">
              <div class="service-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Service We
                        Offer</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Our Demanding Services</h2>
                  </div>
                </div>
              </div>
              <div class="services-wrapper-box">
                <div class="services-wrapper">
                  <div class="service-box fade-anim">
                    <div class="thumb">
                      <div class="service-logo">
                        <img src="{{ asset('FrontendAssets/imgs/icon/icon-1.webp')}}" alt="image">
                      </div>
                      <a class="service-btn" href="service-details.html">
                        <span class="btn-text">Read More</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                      </a>
                      <a href="service-details.html"> <img class="main-img" src="{{ asset('FrontendAssets/imgs/service/service-1.webp')}}"
                          alt="image"></a>
                    </div>
                    <div class="content">
                      <h3 class="title"><a href="service-details.html">Managed IT Services</a></h3>
                      <p class="text">Custom software and application development tailored to business needs.</p>
                    </div>
                  </div>
                  <div class="service-box fade-anim">
                    <div class="thumb">
                      <div class="service-logo">
                        <img src="{{ asset('FrontendAssets/imgs/icon/icon-2.webp')}}" alt="image">
                      </div>
                      <a class="service-btn" href="service-details.html">
                        <span class="btn-text">Read More</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                      </a>
                      <a href="service-details.html"><img class="main-img" src="{{ asset('FrontendAssets/imgs/service/service-2.webp')}}"
                          alt="image"></a>
                    </div>
                    <div class="content">
                      <h3 class="title"><a href="service-details.html">Cloud Technology Services</a></h3>
                      <p class="text">Custom software and application development tailored to business needs.</p>
                    </div>
                  </div>
                  <div class="service-box fade-anim">
                    <div class="thumb">
                      <div class="service-logo">
                        <img src="{{ asset('FrontendAssets/imgs/icon/icon-3.webp')}}" alt="image">
                      </div>
                      <a class="service-btn" href="service-details.html">
                        <span class="btn-text">Read More</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                      </a>
                      <a href="service-details.html"><img class="main-img" src="{{ asset('FrontendAssets/imgs/service/service-3.webp')}}"
                          alt="image"></a>
                    </div>
                    <div class="content">
                      <h3 class="title"><a href="service-details.html">Cybersecurity Services</a></h3>
                      <p class="text">Custom software and application development tailored to business needs.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- service area end -->

        <!-- project area start -->
        <section class="project-area">
          <div class="container rr-container-1410">
            <div class="project-area-inner section-spacing-top">
              <div class="project-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Our
                        Projects</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Showcase Of Our Recognized Work</h2>
                  </div>
                </div>
              </div>
              <div class="project-wrapper-box fade-anim">
                <div class="project-tab">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="b1-tab" data-bs-toggle="tab" data-bs-target="#b1-tab-pane"
                        type="button" role="tab" aria-controls="b1-tab-pane" aria-selected="true">
                        <span class="tab-btn">All Cases <span class="number">(15)</span></span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="b2-tab" data-bs-toggle="tab" data-bs-target="#b2-tab-pane"
                        type="button" role="tab" aria-controls="b2-tab-pane" aria-selected="false">
                        <span class="tab-btn">Business <span class="number">(4)</span></span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="b3-tab" data-bs-toggle="tab" data-bs-target="#b3-tab-pane"
                        type="button" role="tab" aria-controls="b3-tab-pane" aria-selected="false">
                        <span class="tab-btn">IT Solution <span class="number">(7)</span></span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="b4-tab" data-bs-toggle="tab" data-bs-target="#b4-tab-pane"
                        type="button" role="tab" aria-controls="b4-tab-pane" aria-selected="false">
                        <span class="tab-btn">Startup <span class="number">(5)</span></span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="b5-tab" data-bs-toggle="tab" data-bs-target="#b5-tab-pane"
                        type="button" role="tab" aria-controls="b5-tab-pane" aria-selected="false">
                        <span class="tab-btn">Marketing <span class="number">(9)</span></span>
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="b1-tab-pane" role="tabpanel" aria-labelledby="b1-tab"
                      tabindex="0">
                      <div class="project-wrapper">
                        <div class="swiper project-active">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-2.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-3.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-4.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-1.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="b2-tab-pane" role="tabpanel" aria-labelledby="b2-tab" tabindex="0">
                      <div class="project-wrapper">
                        <div class="swiper project-active">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-3.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-4.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-1.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-2.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="b3-tab-pane" role="tabpanel" aria-labelledby="b3-tab" tabindex="0">
                      <div class="project-wrapper">
                        <div class="swiper project-active">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-1.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-2.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-3.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-4.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="b4-tab-pane" role="tabpanel" aria-labelledby="b4-tab" tabindex="0">
                      <div class="project-wrapper">
                        <div class="swiper project-active">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-2.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-3.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-4.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-1.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="b5-tab-pane" role="tabpanel" aria-labelledby="b5-tab" tabindex="0">
                      <div class="project-wrapper">
                        <div class="swiper project-active">
                          <div class="swiper-wrapper">

                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-3.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-4.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-1.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="project-box">
                                <div class="thumb">
                                  <a href="project-details.html"><img src="{{ asset('FrontendAssets/imgs/project/project-2.webp')}}"
                                      alt="image"></a>
                                </div>
                                <div class="content-wrapper">
                                  <div class="content">
                                    <h3 class="title"><a href="project-details.html">Digital IT Solution</a></h3>
                                    <p class="text">Move an organization's data, applications, and services from
                                      on-premise
                                      servers to
                                      a
                                      cloud platform (e.g., AWS, Azure, or Google Cloud).</p>
                                    <a href="project-details.html" class="rr-btn">
                                      <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- project area end -->

        <!-- progress area start  -->
        <section class="progress-area">
          <div class="container rr-container-1350">
            <div class="progress-area-inner section-spacing">
              <div class="progress-thumb-wrappper fade-anim" data-direction="left">
                <div class="progress-thumb-1 img-reveal-anim">
                  <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-5.webp')}}" alt="image">
                </div>
                <div class="progress-thumb-2 img-reveal-anim">
                  <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-6.webp')}}" alt="image">
                </div>
                <div class="progress-thumb-3">
                  <img class="img-reveal-anim" src="{{ asset('FrontendAssets/imgs/gallery/gallery-7.webp')}}" alt="image">
                </div>
              </div>
              <div class="progress-content fade-anim" data-direction="right">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Business
                        Growth</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Connecting People And
                      Build Technology</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">Energistically evisculate an expanded array of meta-services after cross-media
                    strategic theme areas. Interactively simplify interactive customer service before fully tested
                    relationship parallel task high standards...</p>
                </div>
                <div class="progress-wrapper-box">
                  <div class="progress-wrapper">
                    <div class="progress-box">
                      <div class="progress-title">
                        <h3 class="progress-category">Business Security</h3>
                        <span>65%</span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 65%"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="progress-box">
                      <div class="progress-title">
                        <h3 class="progress-category">Career Development</h3>
                        <span>88%</span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 88%"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="progress-box">
                      <div class="progress-title">
                        <h3 class="progress-category">Business Inovation</h3>
                        <span>90%</span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 90%"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- progress area end  -->

        <!-- testimonial area start -->
        <section class="testimonial-area">
          <div class="testimonial-area-bg">
            <img src="{{ asset('FrontendAssets/imgs/shape/shape-4.webp')}}" alt="image">
          </div>
          <div class="container rr-container-1410">
            <div class="testimonial-area-inner section-spacing-top">
              <div class="testimonial-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Customer
                        Feedbacks</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Hear from Our Happy Customers</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-wrapper-box section-spacing-bottom fade-anim">
            <div class="testimonial-wrapper">
              <div class="swiper testimonial-active">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="content">
                        <div class="author">
                          <div class="avatar">
                            <img src="{{ asset('FrontendAssets/imgs/client/client-1.webp')}}" alt="image">
                          </div>
                          <div class="meta">
                            <h3 class="name">Thomas Whitaker</h3>
                            <span class="post">Owner, Mitchell Design Studio</span>
                          </div>
                        </div>
                        <div class="text-wrapper">
                          <p class="text">“Working with Horizon Canada Inc. has transformed how we operate. Their team helped us
                            migrate to the cloud seamlessly and provided top-notch support every step of the way!"
                          </p>
                        </div>
                        <div class="icon-n-rating">
                          <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                          </div>
                          <div class="icon">
                            <img class="quote-icon" src="{{ asset('FrontendAssets/imgs/icon/icon-4.webp')}}" alt="Quote Icon">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="content">
                        <div class="author">
                          <div class="avatar">
                            <img src="{{ asset('FrontendAssets/imgs/client/client-2.webp')}}" alt="image">
                          </div>
                          <div class="meta">
                            <h3 class="name">William Prescott</h3>
                            <span class="post">Owner, Mitchell Design Studio</span>
                          </div>
                        </div>
                        <div class="text-wrapper">
                          <p class="text">“Working with Horizon Canada Inc. has transformed how we operate. Their team helped us
                            migrate to the cloud seamlessly and provided top-notch support every step of the way!"
                          </p>
                        </div>
                        <div class="icon-n-rating">
                          <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                          </div>
                          <div class="icon">
                            <img class="quote-icon" src="{{ asset('FrontendAssets/imgs/icon/icon-4.webp')}}" alt="Quote Icon">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="content">
                        <div class="author">
                          <div class="avatar">
                            <img src="{{ asset('FrontendAssets/imgs/client/client-3.webp')}}" alt="image">
                          </div>
                          <div class="meta">
                            <h3 class="name">Benjamin Clarke</h3>
                            <span class="post">Owner, Mitchell Design Studio</span>
                          </div>
                        </div>
                        <div class="text-wrapper">
                          <p class="text">“Working with Horizon Canada Inc. has transformed how we operate. Their team helped us
                            migrate to the cloud seamlessly and provided top-notch support every step of the way!"
                          </p>
                        </div>
                        <div class="icon-n-rating">
                          <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                          </div>
                          <div class="icon">
                            <img class="quote-icon" src="{{ asset('FrontendAssets/imgs/icon/icon-4.webp')}}" alt="Quote Icon">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-pagination"></div>
              </div>
            </div>
          </div>
        </section>
        <!-- testimonial area end -->

        <!-- process area start -->
        <section class="process-area">
          <div class="container rr-container-1410">
            <div class="process-area-inner section-spacing">
              <div class="process-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Our Work
                        Process</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">We are building great future <br> together, Be with us</h2>
                  </div>
                </div>
              </div>
              <div class="process-wrapper-box fade-anim">
                <div class="process-wrapper">
                  <div class="process-box">
                    <div class="thumb">
                      <img src="{{ asset('FrontendAssets/imgs/icon/icon-5.webp')}}" alt="image">
                    </div>
                    <div class="content">
                      <h3 class="title">Business Planning</h3>
                      <p class="text">Conduct a comprehensive analysis of the business's current state, identifying
                        strengths, weaknesses...</p>
                    </div>
                  </div>
                  <div class="process-box">
                    <img class="shape-start" src="{{ asset('FrontendAssets/imgs/shape/shape-2.webp')}}" alt="image">
                    <img class="shape-end" src="{{ asset('FrontendAssets/imgs/shape/shape-2.webp')}}" alt="image">
                    <div class="thumb">
                      <img src="{{ asset('FrontendAssets/imgs/icon/icon-6.webp')}}" alt="image">
                    </div>
                    <div class="content">
                      <h3 class="title">Marketing and Branding</h3>
                      <p class="text">Conduct a comprehensive analysis of the business's current state, identifying
                        strengths, weaknesses...</p>
                    </div>
                  </div>
                  <div class="process-box">
                    <div class="thumb">
                      <img src="{{ asset('FrontendAssets/imgs/icon/icon-7.webp')}}" alt="image">
                    </div>
                    <div class="content">
                      <h3 class="title">Final Result</h3>
                      <p class="text">Conduct a comprehensive analysis of the business's current state, identifying
                        strengths, weaknesses...</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- process area end -->

        <!-- appointment area start  -->
        <section class="appointment-area">
          <div class="appointment-area-bg">
            <img src="{{ asset('FrontendAssets/imgs/shape/shape-5.webp')}}" alt="image">
          </div>
          <div class="container rr-container-1410">
            <div class="appointment-area-inner">
              <div class="appointment-content section-spacing fade-anim" data-direction="left">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Book Appointment
                        Here</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Empower Your Business <br>
                      With Horizon Canada Inc. Solutions</h2>
                  </div>
                </div>
                <div class="appointment-contact-wrap">
                  <form action="#">
                    <div class="appointment-formwrap">
                      <div class="appointment-formfield">
                        <input type="text" name="Name" id="Name" placeholder="Your Name">
                        <i class="fa-regular fa-user"></i>
                      </div>
                      <div class="appointment-formfield">
                        <input type="text" name="Email" id="Email" placeholder="Email Address">
                        <i class="fa-regular fa-envelope"></i>
                      </div>
                      <div class="appointment-formfield span-2">
                        <select name="category" id="category">
                          <option value="Select Service Category" selected disabled>Select Service Category</option>
                          <option value="IT Service">IT Service</option>
                          <option value="Cloud Service">Cloud Service</option>
                          <option value="Cybersecurity">Cybersecurity</option>
                          <option value="Business">Business</option>
                          <option value="Marketing">Marketing</option>
                        </select>
                        <i class="fa-solid fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button type="submit" class="rr-btn">
                        <span class="btn-wrap">
                          <span class="text-one">Request a Call Back</span>
                          <span class="text-two">Request a Call Back</span>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="appointment-thumb-wrappper fade-anim" data-direction="right">
                <div class="appointment-thumb-1">
                </div>
                <div class="appointment-thumb-2">
                  <img src="{{ asset('FrontendAssets/imgs/shape/shape-3.webp')}}" alt="image">
                </div>
                <div class="appointment-thumb-3 img-reveal-anim">
                  <img src="{{ asset('FrontendAssets/imgs/gallery/gallery-8.webp')}}" alt="image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- appointment area end  -->


             <!-- team area start -->
        <section class="team-area">
          <div class="container rr-container-1410">
            <div class="team-area-inner section-spacing">
              <div class="team-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle"><span class="start-shape"></span><span class="text">Meet Our
                        Team</span><span class="end-shape"></span></span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title">Meet Our Team of <br>Innovators</h2>
                  </div>
                </div>
              </div>
              <div class="team-wrapper-box">
                <div class="team-wrapper">

                  <div class="team-box rr-bg-white fade-anim">
                    <div class="thumb">
                      <div class="social">
                        <div class="social-link">
                          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
                          <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>
                          <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="bg-shape"></div>
                        <span class="share-icon"><i class="fa-regular fa-share-nodes"></i></span>
                      </div>
                      <a >
                        <img src="{{ asset('FrontendAssets/imgs/team/saboor.png')}}" alt="image">
                      </a>
                    </div>
                    <div class="content">
                      <h3 class="name"><a >Mohammad Saboor Syed</a></h3>
                      <span class="post">CEO & Co Founder</span>
                    </div>
                  </div>

                   <div class="team-box rr-bg-white fade-anim">
                    <div class="thumb">
                      <div class="social">
                        <div class="social-link">
                          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
                          <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>
                          <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="bg-shape"></div>
                        <span class="share-icon"><i class="fa-regular fa-share-nodes"></i></span>
                      </div>
                      <a >
                        <img src="{{ asset('FrontendAssets/imgs/team/rais.webp')}}" alt="image">
                      </a>
                    </div>
                    <div class="content">
                      <h3 class="name"><a >Syed Rais</a></h3>
                      <span class="post">CEO & Founder</span>
                    </div>
                  </div>


                   <div class="team-box rr-bg-white fade-anim">
                    <div class="thumb">
                      <div class="social">
                        <div class="social-link">
                          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
                          <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>
                          <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="bg-shape"></div>
                        <span class="share-icon"><i class="fa-regular fa-share-nodes"></i></span>
                      </div>
                      <a >
                        <img src="{{ asset('FrontendAssets/imgs/team/hashir.png')}}" alt="image">
                      </a>
                    </div>
                    <div class="content">
                      <h3 class="name"><a >Hashir Syed</a></h3>
                      <span class="post">Managing Director</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- team area end -->








@endsection

@section('script')

@endsection
