  <!--==============================
     Preloader
  ==============================-->
  {{-- <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
      <div class="vs-menu-area text-center">
          <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
          <div class="mobile-logo">
              <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="TechBiz" class="logo"></a>
          </div>
          <div class="vs-mobile-menu">
              <ul>
                  <li class="menu-item-has-children">
                      <a href="/">Home</a>
                  </li>
                  <li>
                      <a href="{{ route('frontend.about-us') }}">About Us</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="blog.html">Blog</a>
                      <ul class="sub-menu">
                          <li><a href="blog.html">Blog List</a></li>
                          <li><a href="blog-grid.html">Blog Grid</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#none">Pages</a>
                      <ul class="sub-menu">

                          <li><a href="team-details.html">Team Details</a></li>
                          <li><a href="project.html">Projects</a></li>
                          <li><a href="project-details.html">Projects Details</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="error.html">Error Page</a></li>

                      </ul>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#none"><span class="has-new-lable">Elements<span
                                  class="new-label">new</span></span></a>
                      <ul class="sub-menu">
                          <li><a href="blog.html">Blog List</a></li>
                          <li><a href="blog-grid.html">Blog Grid</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                          <li><a href="service.html">Service</a></li>
                          <li><a href="service-details.html">Service Details</a></li>
                          <li><a href="team.html">Team</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="contact.html">Contact Us</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!--==============================
        Header Area start here
    ==============================-->
  <header class="vs-header header-layout1">
      <!-- Header Top -->
      <div class="header-top">
          <div class="container">
              <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                  <div class="col-lg-auto d-none d-lg-block">
                      <p class="header-text"><span class="fw-medium">Now Hiring:</span> Are you a driven and motivated
                          1st Line IT Support Engineer?</p>
                  </div>
                  <div class="col-lg-auto">
                      <div class="header-social style-white">
                          <span class="social-title">Follow Us On: </span>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-behance"></i></a>
                          <a href="#"><i class="fab fa-youtube"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="menu-top">
              <div class="row justify-content-between align-items-center gx-sm-0">
                  <div class="col">
                      <div class="header-logo">
                          <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="TechBiz"
                                  class="logo"></a>
                      </div>

                  </div>

                  <div class="col-auto header-info d-none d-lg-flex">
                    <div class="sticky-wrapper">
                        <div class="sticky-active">
                            <div class="container">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <nav class="main-menu menu-style1 d-none d-lg-block">
                                            <ul>
                                                {{-- home menu start here  --}}
                                                <li>
                                                    <a href="/">Home</a>
                                                </li>
                                                {{-- home menu ends here  --}}

                                                {{-- about menu start here  --}}
                                                <li>
                                                    <a href="{{ route('frontend.about-us') }}">About Us</a>
                                                </li>
                                                {{-- about menu ends here  --}}

                                                {{-- service menu start here  --}}
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Service</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('frontend.services') }}">Service</a></li>
                                                        <li><a href="{{ route('frontend.service_details') }}">Service Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                {{-- service menu ends here  --}}

                                                {{-- portfolio menu start here  --}}
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Portfolio</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="">Software Client</a></li>
                                                        <li><a href="">Restaurant Client</a></li>
                                                    </ul>
                                                </li>
                                                {{-- portfolio menu start here  --}}

                                                {{-- pages menu start here  --}}
                                                <li class="menu-item-has-children mega-menu-wrap">
                                                    <a href="#">Pages</a>
                                                    <ul class="mega-menu">
                                                        <li><a href="#">Pagelist 1</a>
                                                            <ul>
                                                                <li><a href="team-details.html">Team Details</a></li>
                                                                <li><a href="project.html">Projects</a></li>
                                                                <li><a href="project-details.html">Projects Details</a></li>
                                                                <li><a href="contact.html">Contact Us</a></li>
                                                                <li><a href="error.html">Error Page</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Pagelist 2</a>
                                                            <ul>
                                                                <li><a href="blog.html">Blog List</a></li>
                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                                <li><a href="service.html">Service</a></li>
                                                                <li><a href="service-details.html">Service Details</a></li>
                                                                <li><a href="team.html">Team</a></li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li class="menu-item-has-children mega-menu-wrap">
                                                    <a href="#"><span class="has-new-lable">Elements<span
                                                                class="new-label">new</span></span></a>
                                                    <ul class="mega-menu">
                                                        <li><a href="shop.html">Elements</a>
                                                            <ul>
                                                                <li><a href="element-typography.html">Typography</a></li>
                                                                <li><a href="element-buttons.html">Buttons</a></li>
                                                                <li><a href="element-columns.html">Columns</a></li>
                                                                <li><a href="element-messagebox.html">Message Box</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Elements</a>
                                                            <ul>
                                                                <li><a href="element-separators.html">Separators</a></li>
                                                                <li><a href="element-services.html">Services Card</a></li>
                                                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                                                <li><a href="element-projectbox.html">Project Box</a></li>

                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Elements</a>
                                                            <ul>
                                                                <li><a href="element-priceplan.html">Price Plan</a></li>
                                                                <li><a href="element-counters.html">Counters</a></li>
                                                                <li><a href="element-accordions.html">Accordions</a></li>
                                                                <li><a href="element-team.html">Team</a></li>

                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Elements</a>
                                                            <ul>
                                                                <li><a href="element-process.html">Process</a></li>
                                                                <li><a href="element-blogcard.html">Blog Card</a></li>
                                                                <li><a href="element-ctas.html">Call To Actions</a></li>
                                                                <li><a href="element-map.html">Google Map</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                {{-- contact menu start here  --}}
                                                <li>
                                                    <a href="{{ route('frontend.contact') }}">Contact</a>
                                                </li>
                                                {{-- contact menu emds here  --}}
                                            </ul>
                                        </nav>
                                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-auto header-info ">
                    <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="media-body">
                        <span class="header-info_label">Call Anytime 24/7</span>
                        <div class="header-info_link"><a href="tel:+26921562148">(+269) 2156 2148</a></div>
                    </div>
                </div>

                  {{-- <div class="col-auto header-info d-none d-xl-flex">
                      <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                      <div class="media-body">
                          <span class="header-info_label">Office Address</span>
                          <div class="header-info_link">259 HGS, Hotland, USA</div>
                      </div>
                  </div>
              </div> --}}
              </div>
          </div>
          <!-- Main Menu Area -->

  </header>

  <!--==============================
        Header Area ends here
    ==============================-->
