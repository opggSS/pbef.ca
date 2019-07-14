<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta tags reserved for SEO -->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Full page slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/fullpage.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Prosperous Badminton Education Foundation</title>
</head>
<body>
    <div id="menubar" class="row">
        <div class="col-2 mt-2 mt-sm-0" id="menu-logo">
            <a href="index.html">

                <img src="{{url('/images/foundation-logo.png')}}" alt="logo" width="150">
            </a>
        </div>
        <div class="col-10 d-none d-lg-inline-block">
            <ul class="nav nav-tabs">
                <li><a class="active" href="index.html">HOME</a></li>
                <li class="dropdown"><a data-toggle="dropdown" href="#" onclick="switchActive(this)">ABOUT US</a>
                    <ul class="dropdown-menu">
                        <li class="mt-2"><a href="aboutus.html">OUR JOURNEY</a></li>
                        <li class="mt-2"><a href="aboutus.html">CONTACT US</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a data-toggle="dropdown" href="#" onclick="switchActive(this)">PROJECTS</a>
                    <ul class="dropdown-menu">
                        <li class="mt-2"><a href="projects.html">SCHOOL</a></li>
                        <li class="mt-2"><a href="projects.html">COMMUNITY</a></li>
                    </ul>
                </li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="publicinfo.html">PUBLIC INFO</a></li>
                <li><a id="menu-donate" href="donate.html">DONATE</a></li>
            </ul>
        </div>
        <div class="offset-4 offset-sm-6 col-2 d-inline-block d-lg-none mt-3">
          <a id="menu-donate-mobile" href="donate.html">DONATE</a>
        </div>
        <div class="col-2 offset-1 offset-sm-0 d-inline-block d-lg-none">
          <nav class="navbar pt-4">
            <button class="nav-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav-collapse" width="30">
              <img src="{{url('/images/nav-hamburger.png')}}" alt="btn" width="30">
            </button>
          </nav>
        </div>
    </div>
    <div id="mobile-menubar" class="container position-fixed w-100 bg-white">
      <div class="col-12 d-block d-lg-none text-center d-lg-none">
        <ul class="collapse d-lg-none p-0" id="mobile-nav-collapse">
          <li class="p-3"><a id="menu-active" href="index.html">HOME</a></li>
          <li class="p-3"><a class="toggle-btn" data-toggle="collapse" data-target="#about-collapse" href="#" onclick="addActive(this)">ABOUT US</a></li>
          <ul class="collapse sub-collapse p-0" id="about-collapse">
              <li class="p-3"><a href="aboutus.html">OUR JOURNEY</a></li>
              <li class="p-3"><a href="aboutus.html">CONTACT US</a></li>
          </ul>
          <li class="toggle-btn p-3"><a class="toggle-btn" data-toggle="collapse" data-target="#projects-collapse" href="#" onclick="addActive(this)">PROJECTS</a></li>
          <ul class="collapse sub-collapse p-0" id="projects-collapse">
              <li class="p-3"><a href="projects.html">SCHOOL</a></li>
              <li class="p-3"><a href="projects.html">COMMUNITY</a></li>
          </ul>
          <li class="p-3"><a href="gallery.html">GALLERY</a></li>
          <li class="p-3"><a href="publicinfo.html">PUBLIC INFO</a></li>
          <!-- <li class="p-3"><a id="menu-donate" href="donate.html">DONATE</a></li> -->
        </ul>
      </div>
    </div>
    <div id="socialmedia">
        <ul>
            <li><a href=""><img src="{{url('/images/foundation-ins-logo.png')}}" alt="ins logo"></a></li>
            <li><a href=""><img src="{{url('/images/foundation-fb-logo.png')}}" alt="facebook logo"></a></li>
            <li><a href=""><img src="{{url('/images/foundation-twitter-logo.png')}}" alt="twitter logo"></a></li>
        </ul>
    </div>
    <div id="fullpage" class="homepage">
        <!--First Page-->
        <div class="section home-section-1">
            <div class="bg">
              <div class="row position-absolute">
                <div class="col-7 offset-5">
                  <img class="w-100" src="{{url('/images/foundation-home-bg1.png')}}" alt="particle background">
                  <!-- <img class="w-100 position-absolute" src="{{url('/images/foundation-home-bg1-top.png')}}" alt="" id="human-swing"> -->
                </div>
              </div>
              <div class="row position-absolute">
                <div class="col-7 offset-5">
                  <!-- <img class="w-100 position-absolute" src="{{url('/images/foundation-home-bg1.png')}}" alt="particle background"> -->
                  <img class="w-100" src="{{url('/images/foundation-home-bg1-top.png')}}" alt="" id="human-swing">
                </div>
              </div>
            </div>
            <div class="title">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-2 col-md-5">
                        <h1><span class="letter-bold">E</span>DUCATIONAL</h1>
                        <h1>FOUNDATION</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Second Page-->
        <div class="section home-section-2">
            <div class="title">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-2 col-md-4">
                        <h1><span class="letter-bold">A</span>BOUT US</h1>
                        <p class="mt-2 mt-md-3 mb-4 mb-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                        <a href="">EXPLORE</a>
                    </div>
                    <div class="offset-lg-1 col-lg-4 d-none d-xl-block align-top">
                        <div class="img-container" width="500">
                            <img src="{{url('/images/ref-images/home-s2-1.jpg')}}" alt="sample-img">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-block d-xl-none align-bottom">
                      <div class="img-container d-none d-md-block">
                          <img src="{{url('/images/ref-images/home-s2-1.jpg')}}" alt="sample-img">
                      </div>
                      <div class="video-container mt-5 offset-2 offset-md-0 mt-md-3 text-left text-md-left">
                          <video width="400" height="200" controls>
                              <!-- <source data-src="{{url('/images/ref-images/sample-video.mp4')}}" type="video/mp4"> -->
                          </video>
                      </div>
                    </div>
                </div>
            </div>
            <div class="video d-none d-xl-block">
                <div class="grey-square col d-none d-xl-block"></div>
                <div class="video-container">
                    <video width="280" height="187" controls>
                        <!-- <source data-src="{{url('/images/ref-images/sample-video.mp4')}}" type="video/mp4"> -->
                    </video>
                </div>
                <div class="image-container col d-none d-xl-block">
                    <img src="{{url('/images/ref-images/home-s2-2.jpg')}}" alt="sample-img">
                </div>
            </div>
        </div>

        <!--Third Page-->
        <div class="section home-section-3">
            <div class="title">
                <div class="row top-news">
                    <div class="offset-1 col-1 offset-md-2 col-md-1">
                        <h1>NEWS</h1>
                    </div>
                    <div class="col-8 col-md-6" id="top-news-image-container">
                        <img src="{{url('/images/ref-images/home-s3-1.jpg')}}" alt="">
                    </div>
                    <div id="top-title-block" class="offset-2 offset-md-0 col-8 col-md-2">
                        <div class="d-inline-block d-md-block city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type align-top align-md-center mt-1 mt-md-1">Story</div>
                        <p id="top-news-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis.</p>
                        <a href="" class="news-more float-right float-md-left">MORE</a>
                    </div>
                </div>
                <div class="row bot-news">
                    <div class="d-none d-md-block offset-md-2 col-md-1">
                        <img src="{{url('/images/foundation-badminton-shadow.png')}}" id="badminton-shadow">
                        <img src="{{url('/images/foundation-badminton.png')}}" id="badminton">
                    </div>
                    <div class="col-4 col-md-2 offset-2 offset-md-0">
                        <div class="image-container">
                            <img src="{{url('/images/ref-images/home-s3-2.jpg')}}" alt="">
                        </div>
                        <div class="city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type">Video</div>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                        <a href="" class="news-more">MORE</a>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="image-container">
                            <img src="{{url('/images/ref-images/home-s3-3.jpeg')}}" alt="">
                        </div>
                        <div class="city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type">Video</div>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                        <a href="" class="news-more">MORE</a>
                    </div>
                    <div class="col-4 col-md-2 offset-2 offset-md-0">
                        <div class="image-container">
                            <img src="{{url('/images/ref-images/home-s3-2.jpg')}}" alt="">
                        </div>
                        <div class="city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type">Video</div>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                        <a href="" class="news-more">MORE</a>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="image-container">
                            <img src="{{url('/images/ref-images/home-s3-3.jpeg')}}" alt="">
                        </div>
                        <div class="city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type">Video</div>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                        <a href="" class="news-more">MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Fourth Page-->
        <div class="section home-section-4">
            <div class="title">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-2 col-md-6">
                        <h1><span class="letter-bold">W</span>E APPRECIATE</h1>
                        <h1>YOUR HELP</h1>
                        <p class="mt-2 mt-md-3 mb-4 mb-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                        <a href="" class="donate-button">DONATE</a>
                    </div>
                    <div class="offset-2 col-8 offset-md-0 col-md-3 mt-3 mt-md-0">
                        <div class="donate-card">
                            <div class="donate-number">30,121</div>
                            <div class="donate-title">People Donated</div>
                        </div>
                        <div class="donate-card">
                            <div class="donate-number">90,121</div>
                            <div class="donate-title">Joined Us</div>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-sm-block mt-5">
                    <div class="offset-2 col-8 offset-md-2 col-md-9">
                        <h3>Our Partners</h3>
                        <div class="partner-logo">
                            <img src="{{url('/images/ref-images/bwf-sample-logo.png')}}" alt="">
                            <img src="{{url('/images/ref-images/vancouver-sample-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="backtotop" class="d-none d-sm-block" data-menuanchor="firstPage"><a href="#firstPage">&#x22C0; Back to top</a></div>
        </div>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/fullpage.js"></script>
<script type="text/javascript" src="js/fullpage.extensions.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                //options here
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
                lazyLoading: true,
                navigation: true,
                navigationPosition: 'left',
                dragAndMove: true,
                licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
            });

            //methods
            $.fn.fullpage.setAllowScrolling(true);
        });

        function switchActive(el) {
          var siblings = $(el).parents().siblings();
          if ($(el).hasClass('active')) {
            $(el).removeClass('active');
          } else {
            $(el).addClass('active');
          }
          siblings.find('a').removeClass('active');
        }

        function addActive(el) {
          if ($(el).hasClass('active')) {
            $(el).removeClass('active');
          } else {
            $(el).addClass('active');
          }
          // siblings.find('a').removeClass('active');
          // siblings.find('.toggle-btn').addClass('collapsed');
          // $('.sub-collapse').removeClass('show');
        }
    </script>
</body>
</html>
