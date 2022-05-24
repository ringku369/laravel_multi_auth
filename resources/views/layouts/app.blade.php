<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>@yield('title', @$sitesetting->title)</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
    @if ($sitesetting->favicon)
    <link href="{{ asset('storage/'.$sitesetting->favicon) }}" type="image/x-icon" rel="shortcut icon" />    
    @else
    <link href="{{ asset('site/assets/images/favicon.png') }}" type="image/x-icon" rel="shortcut icon" />
    @endif

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('app/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('app/plugins/fontawesome/css/all.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('app/plugins/animate-css/animate.css') }}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset('app/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('app/plugins/slick/slick-theme.css') }}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset('app/plugins/colorbox/colorbox.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
  <style>
      section{
        padding: 30px 0!important;
      }

      .header-two {
        background: #fff;
        box-shadow: 0 2px 2px 0 rgb(0 0 0 / 15%);
        padding: 1px 0;
      }

      .top-bar {
        padding: 0px 0;
        background: #ebebeb;
        position: relative;
      }

      ul.navbar-nav > li.active > a {
        color: #ffb600!important;
        position: relative;
      }

      li.active > a {
        color: #ffb600!important;
        position: relative;
      }

      /* footer {
        position: fixed!important;
        width: 100%;
        bottom: 0;
      }
       */
      li.active-footer{
        font-weight: bolder;
      }
      li.active-footer > a {
        color: #ffb600!important;
      }

      /* .mr-auto, .mx-auto {
        margin-left: auto!important;
      } */

      .header-one .logo-area {
        padding: 5px 0!important;
      }

      .logo img {
        width: auto;
        height: 40px!important;
      }
  </style>
  @yield('styles')
</head>
<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
          {{-- <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                  <ul class="top-info text-center text-md-left">
                      <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                      </li>
                  </ul>
                </div>
                <!--/ Top info end -->
    
                <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                  <ul class="list-unstyled">
                      <li>
                        <a title="Facebook" href="https://facebbok.com/themefisher.com">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="https://twitter.com/themefisher.com">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="https://instagram.com/themefisher.com">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a title="Linkdin" href="https://github.com/themefisher.com">
                            <span class="social-icon"><i class="fab fa-github"></i></span>
                        </a>
                      </li>
                  </ul>
                </div>
                <!--/ Top social end -->
            </div>
            <!--/ Content row end -->
          </div>
          <!--/ Container end --> --}}
      </div>
      <!--/ Topbar end -->



      <!-- Header start -->
      <header id="header" class="{{($sitesetting->layout == true)? 'header-one' : 'header-two'}}">
        
        @if ($sitesetting->layout == true)
        <div class="bg-white">
          <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                  <div class="logo col-md-5 text-center text-lg-left mb-3 mb-lg-0">
                      <a class="d-block" href="{{route('site.home')}}">
                        <img loading="lazy" src="{{ ($sitesetting->logo) ?  asset('storage/'.$sitesetting->logo) : asset('site/assets/images/logo.png') }}" alt="{{($sitesetting->name)?$sitesetting->name:__('admin.menu.site_short') }}">
                        {{-- <span class="brand-text font-weight-light" style="font-weight: bold!important;">{{($sitesetting->name)?$sitesetting->name:__('admin.menu.site_short') }}</span> --}}
                      </a>
                  </div>
                  
                  
                  <!-- logo end -->
        
                  <div class="col-md-7 header-right">
                      <ul class="top-info-box">
                        <li>
                          <div class="info-box">
                            <div class="info-box-content">
                                <p class="info-box-title">Call Us</p>
                                <p class="info-box-subtitle"><a href="tel:{{$sitesetting->site_mobile}}">{{$sitesetting->site_mobile}}</a></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="info-box">
                            <div class="info-box-content">
                                <p class="info-box-title">Email Us</p>
                                <p class="info-box-subtitle"><a href="mailto:{{$sitesetting->site_email}}">{{$sitesetting->site_email}}</a></p>
                            </div>
                          </div>
                        </li>
                        <!--<li class="last">
                          <div class="info-box last">
                            <div class="info-box-content">
                                <p class="info-box-title">Global Certificate</p>
                                <p class="info-box-subtitle">ISO 9001:2017</p>
                            </div>
                          </div>
                        </li> -->
                      </ul><!-- Ul end -->
                  </div><!-- header right end -->

                </div><!-- logo area end -->
        
            </div><!-- Row end -->
          </div><!-- Container end -->
        </div>
        @endif
        

        <div class="site-navigation">
          <div class="container">
              <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg p-0  {{($sitesetting->layout == true)? 'navbar-dark' : 'navbar-light'}}">
                      @if ($sitesetting->layout == false)
                      <div class="logo">
                        <a class="d-block" href="{{route('site.home')}}">
                          <img loading="lazy" src="{{ ($sitesetting->logo) ?  asset('storage/'.$sitesetting->logo) : asset('site/assets/images/logo.png') }}" alt="{{($sitesetting->name)?$sitesetting->name:__('admin.menu.site_short') }}">
                        </a>
                      </div>
                      @endif
                      
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      
                      <div id="navbar-collapse" class="collapse navbar-collapse">
                          {{-- <ul class="nav navbar-nav mr-auto additional-menu" style="margin: 0px auto;"> --}}
                          <ul class="nav navbar-nav mr-auto additional-menu" style="margin: 0px auto;">
                            

                           <li class="nav-item {{ (Route::current()->getName() == 'site.home') ? 'active' : ''}}"><a class="nav-link" href="{{route('site.home')}}"> Home </a></li>


                            @if ($content_categories)
                            @foreach ($content_categories as $key => $project)
                            @if ($project->position == 'header')
                            <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$project->name}} <i class="fa fa-angle-down"></i></a>
                              @if ($project->last)
                                <ul class="dropdown-menu">
                                    @foreach ($project['content'] as $item)
                                        <li class="{{(substr(url()->current(), (strrpos(url()->current(),'/'))+1) == $item->slug) ? 'active' : ''}}">
                                          <a href="{{route('site.content',['slug'=>$item->slug])}}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                              @else
                                @if ($project['allChildren'])
                                  @include('layouts.partials.chield-menu.app-menu', $project)
                                @endif
                              @endif
                            </li>
                            @endif
                            @endforeach
                            @endif 


                            {{-- <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li class="active"><a href="index.html">Home One</a></li>
                                  <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>--}}


                            {{-- <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404.html">404</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#!">Child Menu 1</a></li>
                                      <li><a href="#!">Child Menu 2</a></li>
                                      <li class="dropdown-submenu">
                                          <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="#!">Child Menu 1</a></li>
                                            <li><a href="#!">Child Menu 2</a></li>
                                            <li><a href="#!">Child Menu 3</a></li>
                                          </ul>
                                      </li>
                                    </ul>
                                </li>
                              </ul>
                            </li> --}}


                            {{-- <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                    <ul class="dropdown-menu">
                                      <li class="dropdown-submenu">
                                          <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="#!">Child Menu 1</a></li>
                                          </ul>
                                      </li>
                                    </ul>
                                </li>
                              </ul>
                            </li>

                            <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Top Menu - 1 <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Top Menu - 1.1</a>
                                    <ul class="dropdown-menu">
                                       <li class="dropdown-submenu">
                                          <a href="#!" class="dropdown-toggle">Top Menu 1.1.1</a>
                                          <ul class="dropdown-menu">
                                             <li class=""><a href="http://127.0.0.1:8000/pages/header-menu-1">Header Menu - 1</a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="about.html">About Us</a></li>
                                  <li><a href="team.html">Our People</a></li>
                                  <li><a href="testimonials.html">Testimonials</a></li>
                                  <li><a href="faq.html">Faq</a></li>
                                  <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                    
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="projects.html">Projects All</a></li>
                                  <li><a href="projects-single.html">Projects Single</a></li>
                                </ul>
                            </li>
                    
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="services.html">Services All</a></li>
                                  <li><a href="service-single.html">Services Single</a></li>
                                </ul>
                            </li> 
                            
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                  <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                  <li><a href="news-single.html">News Single</a></li>
                                </ul>
                            </li>
                    
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> --}}
                          </ul>
                      </div>
                    </nav>
                </div>
                <!--/ Col end -->
              </div>
              <!--/ Row end -->
              @if (isUser())  
              <div class="nav-search">
                <ul class="nav">
                  <li class="nav-item"><a class="nav-link" href="contact.html">{{@Auth::user()->name}}</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{Route('logout')}}">Logout</a></li>
                </ul>
              </div>
              @else
              <div class="nav-search">
                <ul class="nav">
                  <li class="nav-item"><a class="nav-link" href="{{Route('login')}}">Login</a></li>
                </ul>
              </div>
              @endif



              {{-- <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
              </div><!-- Search end -->

              <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                  <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
              </div><!-- Site search end --> --}}
          </div>
          <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
      </header>
      <!--/ Header end -->


      <!--/ Body Content start -->
        @yield('content')
      <!--/ Body Content end -->
      <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-about">
                <h3 class="widget-title">About Us</h3>
                <div class="logo">
                  <img loading="lazy" class="footer-logo" src="{{ ($sitesetting->footer_logo) ?  asset('storage/'.$sitesetting->footer_logo) : asset('site/assets/images/footer-logo.png') }}" alt="{{($sitesetting->name)?$sitesetting->name:__('admin.menu.site_short') }}">
                </div>
                <p>{{($sitesetting->title)?$sitesetting->title:__('admin.menu.site_short') }}</p>
                <div class="footer-social">
                  <ul>
                    <li><a href="tel:{{$sitesetting->site_mobile}}" title="{{$sitesetting->site_mobile}}" aria-label="phone"><i style="color:aliceblue" class="fa fa-phone"></i></a>
                      <li><a href="mailto:{{$sitesetting->site_email}}" title="{{$sitesetting->site_email}}" aria-label="mail"><i style="color:aliceblue" class="fa fa-envelope"></i></a></li>
                    </ul>
                </div><!-- Footer social end -->
              </div><!-- Col end -->
              
              @if ($content_categories)
                @php
                    $i = 1;
                @endphp
                @foreach ($content_categories as $key => $content_category)
                @if ($content_category->position == 'footer')

                  @if ($i <= 3)
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                      <h3 class="widget-title">{{$content_category->name}}</h3>
                      <ul class="list-arrow">
                        @foreach ($content_category->content as $item)
                            <li class="{{(substr(url()->current(), (strrpos(url()->current(),'/'))+1) == $item->slug) ? 'active-footer' : ''}}">
                              <a href="{{route('site.content',['slug'=>$item->slug])}}">{{ $item->name }}</a>
                            </li>
                          @endforeach
                      </ul>
                    </div>
                  @endif
                  @php
                      $i++;
                  @endphp
                @endif
                @endforeach
              @endif


              
                        
                    

    
              {{-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                <h3 class="widget-title">Services</h3>
                <ul class="list-arrow">
                  <li><a href="service-single.html">Pre-Construction</a></li>
                  <li><a href="service-single.html">General Contracting</a></li>
                  <li><a href="service-single.html">Construction Management</a></li>
                  <li><a href="service-single.html">Design and Build</a></li>
                  <li><a href="service-single.html">Self-Perform Construction</a></li>
                </ul>
              </div><!-- Col end -->
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                <h3 class="widget-title">Services</h3>
                <ul class="list-arrow">
                  <li><a href="service-single.html">Pre-Construction</a></li>
                  <li><a href="service-single.html">General Contracting</a></li>
                  <li><a href="service-single.html">Construction Management</a></li>
                  <li><a href="service-single.html">Design and Build</a></li>
                  <li><a href="service-single.html">Self-Perform Construction</a></li>
                </ul>
              </div><!-- Col end -->
    
              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                <h3 class="widget-title">Services</h3>
                <ul class="list-arrow">
                  <li><a href="service-single.html">Pre-Construction</a></li>
                  <li><a href="service-single.html">General Contracting</a></li>
                  <li><a href="service-single.html">Construction Management</a></li>
                  <li><a href="service-single.html">Design and Build</a></li>
                  <li><a href="service-single.html">Self-Perform Construction</a></li>
                </ul>
              </div><!-- Col end --> --}}



              
              {{-- <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                <h3 class="widget-title">Working Hours</h3>
                <div class="working-hours">
                  We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                  Hotline and Contact form.
                  <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                  <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                  <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                </div>
              </div><!-- Col end --> --}}


            </div><!-- Row end -->
          </div><!-- Container end -->
        </div><!-- Footer main end -->
    
        <div class="copyright">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="copyright-info text-center text-md-left1">
                  {{-- <span>Copyright &copy; <script>
                      document.write(new Date().getFullYear())
                    </script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span> --}}
                
                  <p style="color: aliceblue;">{!! $sitesetting->footer !!}</p>
                </div>
              </div>
    
              {{-- <div class="col-md-6">
                <div class="footer-menu text-center text-md-right">
                  <ul class="list-unstyled" style="color: aliceblue; font-weight:bold">
                  @if ($content_categories)
                      @foreach ($content_categories as $key => $content_category)
                          @if ($content_category->position == 'footer')
                              @foreach ($content_category->content as $item)
                                <li class="{{(substr(url()->current(), (strrpos(url()->current(),'/'))+1) == $item->slug) ? 'active-footer' : ''}}">
                                  <a href="{{route('site.content',['slug'=>$item->slug])}}">{{ $item->name }}</a>
                                </li>
                              @endforeach
                          @endif
                      @endforeach
                  @endif
                  </ul>
                  @if ($sitesetting->layout == false)
                  <div class="footer-social">
                    <ul>
                      <li><a href="tel:{{$sitesetting->site_mobile}}" title="{{$sitesetting->site_mobile}}" aria-label="phone"><i style="color:aliceblue" class="fa fa-phone"></i></a>
                      <li><a href="mailto:{{$sitesetting->site_email}}" title="{{$sitesetting->site_email}}" aria-label="mail"><i style="color:aliceblue" class="fa fa-envelope"></i></a></li>
                    </ul>
                  </div>
                  @endif
                </div>
              </div> --}}
            </div><!-- Row end -->
    
            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
              <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-double-up"></i>
              </button>
            </div>
    
          </div><!-- Container end -->
        </div><!-- Copyright end -->
      </footer><!-- Footer end -->


        <!-- Javascript Files
        ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('app/plugins/jQuery/jquery.min.js') }}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('app/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('app/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('app/plugins/slick/slick-animation.min.js') }}"></script>
        <!-- Color box -->
        <script src="{{ asset('app/plugins/colorbox/jquery.colorbox.js') }}"></script>
        <!-- shuffle -->
        <script src="{{ asset('app/plugins/shuffle/shuffle.min.js') }}" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{ asset('app/plugins/google-map/map.js') }}" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('app/js/script.js') }}"></script>

        <script>
          $(document).ready(function () {
            $(".additional-menu").find("li.active").each(function() {
              $(this).parents('li').each(function(){
                $(this).parents('li').addClass('active');
                $(this).addClass('active');
                //console.log('true');
              })
            });
          });
        </script>


        @yield('scripts')

    </div>
</body>
</html>
