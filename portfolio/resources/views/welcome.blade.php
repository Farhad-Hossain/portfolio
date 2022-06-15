<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>{{env('APP_NAME')}}</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('frontend')}}/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet" type="text/css">
<link href="{{asset('frontend')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="{{asset('frontend')}}/css/animate.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

</head>
<body>

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-12">

            <div class="top_left_cont intro zoomIn wow animated">
              <h2>I AM {{$basicInfo->name??''}}<br> <strong>{{$basicInfo->designation??''}}</strong></h2>
              <p>{{$basicInfo->short_description??''}}</p>
              <div class="underline"></div>
              <ul class="social_links">

                <li class="twitter animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;">
                  <a href="{{$basicInfo->twitter??''}}"><i class="fa fa-twitter"></i></a>
                </li>

                <li class="facebook animated bounceIn wow delay-03s animated" style="visibility: visible; animation-name: bounceIn;">
                  <a href="{{$basicInfo->facebook}}"><i class="fa fa-facebook"></i></a>
                </li>

                <li class="pinterest animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;">
                  <a href="{{$basicInfo->linkedin??''}}"><i class="fa fa-linkedin"></i></a>
                </li>


                <li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;">
                  <a href="{{$basicInfo->github??''}}"><i class="fa fa-github"></i></a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
    <!--  <div class="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>-->
      <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
              <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
              <li><a href="#service" class="scroll-link">Skills</a></li>
              <li><a href="#Portfolio" class="scroll-link">Projects</a></li>
              <li><a href="#clients" class="scroll-link">Experience</a></li>
              <li><a href="#team" class="scroll-link">Testimonial</a></li>
              <li><a href="#contact" class="scroll-link">Contact</a></li>
            </ul>
      </div>
     </nav>
    </div>
  </div>
</header>
<!--Header_section-->

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
  <div class="container">
    <h2>Who Am I</h2>
    <h6>{{$basicInfo->who_am_i}}</h6>
    <div class="inner_section">
      <div class="row">
                        <div class="col-lg-12 about-us">
                            <div class="row">
                            <div class="col-md-6"> <img class="img-responsive" src="{{asset('storage/images')}}/{{$aboutMeInfo->picture_link??''}}" align="" style="max-height: 450px;"> </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <h3>I Design & Develope Awesome Web Apps</h3>
                                    <p>
                                         I am working with Web developement technologies over last 3 years. I am a solution maker for the inhancement of your bussiness digitally.
                                    </p>
                                    <p>
                                         The following significient areas we are working.
                                    </p>
                                    <ul class="about-us-list">
                                        <li class="points">Software developement by various web tech like PHP, JS, Laravel, HTML, CSS</li>
                                        <li class="points">Include and make automation of your bussiness logic in the software </li>
                                        <li class="points">Design various kind of Beatiful Website for you.  </li>
                                        <li class="points">Ensure SEO friendly environment in Software.  </li>
                                        <li class="points">Most effient and speedy website</li>
                                    </ul><!-- /.about-us-list -->

                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->
                        </div><!-- /.col-lg-12 -->
                    </div>

    </div>
  </div>
  </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Skills</h2>
    <h6>I believe that, The skills are my assets. I loved play with it & make it rich.</h6>
    <div class="service_wrapper">
      <div class="row">
        {{--
        <div class="col-md-3">
        <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span> </div>
          <div class="service_block">

            <h3 class="animated fadeInUp wow">Android</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        --}}

        {{---
        <div class="col-md-3">
        <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div>
        <div class="service_block">
            <h3 class="animated fadeInUp wow">Apple IOS</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
        </div>
        --}}

        <div class="col-md-3">
        <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-user"></i></span> </div>
          <div class="service_block">

            <h3 class="animated fadeInUp wow">Development</h3>
            <p class="animated fadeInDown wow">Build various kind of web application software for users. </p>
          </div>
        </div>

        <div class="col-md-3">
        <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span> </div>
          <div class="service_block">

            <h3 class="animated fadeInUp wow">Design</h3>
            <p class="animated fadeInDown wow">Building User interactive, beautiful looking Design.  </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--Service-->




<!-- Portfolio -->
<section id="Portfolio" class="content">

  <!-- Container -->
  <div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
      <h2>Projects</h2>
    <h6>A few projects, We have built. </h6>

    </div>
    <!--/Title -->

  </div>
  <!-- Container -->

  <div class="portfolio-top"></div>

  <!-- Portfolio Filters -->
  <div class="portfolio">

    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a>
        </li>

        <li><a class="" href="#" data-filter=".web">
          <h5>Web App</h5>
          </a>
        </li>

        <li><a class="" href="#" data-filter=".design">
          <h5>Design</h5>
          </a>
        </li>

        {{--
        <li><a class="" href="#" data-filter=".prototype">
          <h5>Prototype</h5>
          </a>
        </li>

        <li><a class="" href="#" data-filter=".android">
          <h5>Android</h5>
          </a>
        </li>
        --}}



      </ul>
    </div>
    <!--/Portfolio Filters -->

    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item effect-oscar">

        <div class="portfolio_img">
        <img src="{{asset('frontend')}}/img/portfolio_pic1.jpg"  alt="Portfolio 1"> </div>
            <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/portfolio_pic1.jpg" class="fancybox">
                    <h2>Warm <span>Oscar</span></h2>
                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                  </a>
                </div>
            </figcaption>
        </figure>
      <!--/Portfolio Item -->

      <!-- Portfolio Item-->
      {{--
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="{{asset('frontend')}}/img/portfolio_pic2.jpg" alt="Portfolio 1"> </div>
            <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/portfolio_pic2.jpg" class="fancybox">
                    <h2>Warm <span>Oscar</span></h2>
                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                  </a>
                </div>
            </figcaption>
        </figure>
        --}}
      <!--/Portfolio Item -->



      <!-- Portfolio Item-->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  prototype web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="{{asset('frontend')}}/img/portfolio_pic4.jpg" alt="Portfolio 1"> </div>
         <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/portfolio_pic4.jpg" class="fancybox">
                    <h2>Warm <span>Oscar</span></h2>
                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                  </a>
                </div>
            </figcaption>
      </figure>
      <!-- Portfolio Item -->



      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; height: 308px; opacity: 1;" class="portfolio-item one-four  web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="{{asset('frontend')}}/img/sms_service.png" alt="Portfolio 1"> </div>
       <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/sms_service.png" class="fancybox">
                    <h2>Bulk <span>SMS Service</span></h2>
                            <p>Bul Sms Service software for sending huge amount of Sms by one action.</p>
                  </a>
                </div>
            </figcaption>
      </figure>
      <!--/Portfolio Item -->

      <!-- Portfolio Item  -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="{{asset('frontend')}}/img/portfolio_pic7.jpg" alt="Portfolio 1"> </div>
       <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/portfolio_pic7.jpg" class="fancybox">
                    <h2>Warm <span>Oscar</span></h2>
                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                  </a>
                </div>
            </figcaption>
       </figure>
      <!--/Portfolio Item -->

      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="{{asset('frontend')}}/img/portfolio_pic8.jpg" alt="Portfolio 1"> </div>
      <figcaption>
                <div>
                  <a href="{{asset('frontend')}}/img/portfolio_pic8.jpg" class="fancybox">
                    <h2>Warm <span>Oscar</span></h2>
                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                  </a>
                </div>
            </figcaption>
        </figure>
      <!--/Portfolio Item -->

    </div>
    <!--/Portfolio Wrapper -->

  </div>
  <!--/Portfolio Filters -->

  <div class="portfolio_btm"></div>


  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>


</section>
<!--/Portfolio -->

<section class="page_section" id="clients"><!--page_section-->
  <h2>Worked For</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      @foreach ( $workedCompanies as $company )
        <li><a href="{{$company->company_website}}" target="_blank"><img src="{{asset('storage/images/'.$company->company_logo)}}" alt="" style="max-height: 70px;"></a></li>
      @endforeach
    </ul>
  </div>
</div>
</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Testimonial</h2>
    <h6>My client's Say to me.</h6>

    <div id="team" name="team">
    <div class="container">
      <div class="row centered">
        {{--
        <div class="col-md-3 centered"> <img class="img img-circle lt-box" src="{{asset('frontend')}}/img/team01.jpg" height="120px" width="120px" alt="">
          <div class="rt-box"><h4><strong>Rosy Illue</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/>
          </div>
         </div>
           <div class="col-md-3 centered"> <img class="img img-circle lt-box" src="{{asset('frontend')}}/img/team02.jpg" height="120px" width="120px" alt="">
          <div class="rt-box"><h4><strong>Nissy Yukjk</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/>
          </div>
         </div>
            <div class="col-md-3 centered"> <img class="img img-circle lt-box" src="{{asset('frontend')}}/img/team03.jpg" height="120px" width="120px" alt="">
          <div class="rt-box"><h4><strong>Fsdf Efffl</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/>
          </div>
         </div>
            <div class="col-md-3 centered"> <img class="img img-circle lt-box" src="{{asset('frontend')}}/img/team04.jpg" height="120px" width="120px" alt="">
          <div class="rt-box"><h4><strong>Mnin Nulk</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/>
          </div>
         </div>
        --}}

      </div>
    </div>
  <!-- row -->
  </div>
    </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Get In Touch</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>

      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">
         <div class="contact_info">
            <div class="detail">
                <h4>{{$basicInfo->name??''}}</h4>
                <p>{{$basicInfo->address??''}}</p>
            </div>
            <div class="detail">
                <h4>call us</h4>
                <p>{{$basicInfo->phone}}</p>
            </div>
            <div class="detail">
                <h4>Email us</h4>
                <p>{{$basicInfo->email}}</p>
            </div>
         </div>



         <ul class="social_links">
           <li class="twitter animated bounceIn wow delay-02s"><a href="{{$basicInfo->twitter??''}}"><i class="fa fa-twitter"></i></a></li>
           <li class="facebook animated bounceIn wow delay-03s"><a href="{{$basicInfo->facebook}}"><i class="fa fa-facebook"></i></a></li>
           <li class="pinterest animated bounceIn wow delay-04s"><a href="{{$basicInfo->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
           <li class="gplus animated bounceIn wow delay-05s"><a href="{{$basicInfo->github}}"><i class="fa fa-github"></i></a></li>
         </ul>
        </div>

        <div class="col-lg-8 wow fadeInLeft delay-06s">
              <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

        <form action="{{route('postContact')}}" method="POST" novalidate enctype="multipart/form-data" id="contact-form">
             @csrf
             <div class="control-group">
                <div class="controls">
                    <input type="text" class="form-control" placeholder="Full Name" name="contact_name" id="name" required data-validation-required-message="Please enter your name " />
                  <p class="help-block"></p>
                </div>
             </div>



             <div class="control-group">
                 <div class="controls">
                    <input type="email" class="form-control" placeholder="Email" name="contact_email" id="email" required data-validation-required-message="Please enter your email" />
                 </div>
            </div>

            <div class="control-group">
                 <div class="controls">
                    <textarea rows="10" cols="100" class="form-control" placeholder="Message" name="contact_message" id="message" required data-validation-required-message="Please enter your message" minlength="5"
                       data-validation-minlength-message="Min 5 characters"
                        maxlength="999" style="resize:none"></textarea>
                 </div>
            </div>

            <div class="alert alert-sm pull-left" id="contact-message" style="display: none">
                
            </div>
            <button type="submit" class="btn btn-primary pull-right" id="contact-send-btn">Send</button><br />
        </form>
        </div>
      </div>
    </section>

  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © {{ now()->format('Y') }}. {{ Request::url() }}</span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{asset('frontend')}}/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.nav.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.isotope.js"></script>
<script src="{{asset('frontend')}}/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/wow.js"></script>
 <script src="{{asset('frontend')}}/contact/jqBootstrapValidation.js"></script>
 <script src="{{asset('frontend')}}/contact/contact_me.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/custom.js"></script>

</body>
</html>
