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

    <title>Public Info - Prosperous Badminton Education Foundation</title>
</head>
<body>
  <div id="menubar" class="row nonhome-menubar">
      <div class="col-2" id="menu-logo">
          <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block mr-md-1" href="#">< </a><a class="d-none d-lg-inline-block" href=" ">Home</a > <span class="d-none d-lg-inline-block">| About Us</span>
      </div>
      <div class="col-10 d-none d-lg-inline-block">
          <ul class="nav nav-tabs">
              <li><a class="active" href="index.html">HOME</a></li>
              <li class="dropdown"><a data-toggle="dropdown" href="" onclick="switchActive(this)">ABOUT US</a>
                  <ul class="dropdown-menu">
                      <li class="mt-2"><a href="/about-us">OUR JOURNEY</a></li>
                      <li class="mt-2"><a href="aboutus.html">CONTACT US</a></li>
                  </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#" onclick="switchActive(this)">PROJECTS</a>
                  <ul class="dropdown-menu">
                      <li class="mt-2"><a href="projects.html">SCHOOL</a></li>
                      <li class="mt-2"><a href="projects.html">COMMUNITY</a></li>
                  </ul>
              </li>
              <li><a href="gallery">GALLERY</a></li>
              <li><a href="publicinfo">PUBLIC INFO</a></li>
              <li><a id="menu-donate" href="donate.html">DONATE</a></li>
          </ul>
      </div>
      <div class="offset-4 offset-sm-6 col-2 d-inline-block d-lg-none mt-3">
        <a id="menu-donate-mobile" href="donate.html">DONATE</a>
      </div>
      <div class="col-2 offset-1 offset-sm-0 d-inline-block d-lg-none">
        <nav class="navbar pt-4">
          <button class="nav-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav-collapse" width="30">
            <img src="{{asset('storage/images/nav-hamburger.png')}}" alt="btn" width="30">
          </button>
        </nav>
      </div>
  </div>
  <div id="mobile-menubar" class="position-fixed w-100 bg-white">
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
<!-- <div id="socialmedia">
    <ul>
        <li><a href=""><img src="images/foundation-ins-logo.png" alt="ins logo"></a></li>
        <li><a href=""><img src="images/foundation-fb-logo.png" alt="facebook logo"></a></li>
        <li><a href=""><img src="images/foundation-twitter-logo.png" alt="twitter logo"></a></li>
    </ul>
</div> -->
<div id="fullpage" class="publicinfopage">

    <div class="section">
        <div>
            <div class="row">
                <div class="offset-1 offset-md-2">
                    <h5>Basic Values</h5>
                </div>
            </div>
            <div class="horizontal-slider">
              <div class="row pb-5">
                <div class="col offset-1 offset-md-2 col-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col col-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">Joined Us</div>
                    </div>
                </div>
                <div class="col col-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col col-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row mt-0">
                <div class="offset-1 offset-md-2">
                    <h5>Total Values</h5>
                </div>
            </div>
            <div class="row">
                <div class="offset-1 offset-md-2 col-10 col-md-8 total-donate-data pl-0">
                    <!-- <h4>3,121 <span>People Donated</span> &nbsp;&nbsp;~&nbsp;&nbsp; 2018-2019 <span>1 year 2 month 21days</span></h4> -->
                    <p class="total-val">Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit.
                      Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique.
                      Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus.
                      Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-1 offset-md-2">
                    <h5>Total Amount</h5>
                </div>
            </div>
            <div class="row final-donate-data">
                <div class="offset-1 offset-md-2 col-3 col-md-2">
                    <span>30,212.31</span> &nbsp;<span id="money-unit">CAD</span>
                </div>
                <div class="offset-3 offset-md-3 col-4 col-md-3"><a class="d-inline-block" href="">DOWNLOAD PDF</a></div>
            </div>
        </div>
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
            anchors: ['firstPage', 'secondPage'],
            lazyLoading: true,
            dragAndMove: true,
            licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
        });

        //methods
        $.fn.fullpage.setAllowScrolling(true);
    });
</script>
</body>
</html>
