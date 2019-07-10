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

    <title>Projects - Prosperous Badminton Education Foundation</title>
</head>
<body>
<div id="menubar" class="row nonhome-menubar">
    <div class="col-md-2" id="menu-logo">
        < <a href="index.html">Home</a> | Projects
    </div>
    <div class="col-md-9 offset-md-1">
        <ul class="nav nav-tabs">
            <li><a href="index.html">HOME</a></li>
            <li class="dropdown"><a data-toggle="dropdown" href="#">ABOUT US</a>
                <ul class="dropdown-menu">
                    <li><a href="#">OUR JOURNEY</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </li>
            <li class="dropdown"><a id="menu-active" data-toggle="dropdown" href="#">PROJECTS</a>
                <ul class="dropdown-menu">
                    <li><a href="#">SCHOOL</a></li>
                    <li><a href="#">COMMUNITY</a></li>
                </ul>
            </li>
            <li><a href="index.html">GALLERY</a></li>
            <li><a href="index.html">PUBLIC INFO</a></li>
            <li><a id="menu-donate" href="index.html">DONATE</a></li>
        </ul>
    </div>
</div>

@include('shared.social_media')

<div id="fullpage" class="aboutuspage">
    <!--Our Journey Page-->
    <div class="section school-project">
        <div class="title">
            <div class="row">
                <div class="offset-md-2 col-md-9 school-title">
                    <h1>SCHOOL</h1>
                </div>
            </div>
            <div class="row content-process">
                <div class="offset-md-2 col-md-9 content-process-container">
                    <div class="progress-expanded">
                        <div class="progress-expanded-number">1.</div>
                        <div class="progress-expanded-image"><img src="{{url('/image/ref-images/home-s3-2.jpg')}}"></div>
                        <h5>Step 1</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    </div>
                    <div class="progress-middle-bar"></div>
                    <div class="progress-nonexpanded">
                        <h5>2.<br><br>Step 2</h5>
                    </div>
                    <div class="progress-middle-bar"></div>
                    <div class="progress-nonexpanded">
                        <h5>3.<br><br>Step 3</h5>
                    </div>
                    <div class="progress-middle-bar"></div>
                    <div class="progress-nonexpanded">
                        <h5>4.<br><br>Step 4</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="toNextSlide" data-menuanchor="secondPage"><a href="#secondPage">&or; Community</a></div>
    </div>

    <!--Contact Us Page-->
    <div class="section community-project">
        <div class="title">
            <div class="row">
                <div class="offset-md-2 col-md-9 community-title">
                    <h1>COMMUNITY</h1>
                </div>
            </div>
            <div class="row main-content">
                <div class="offset-md-2 col-md-4 content-to-right">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
                <div class=" col-md-4 content-to-left">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
            </div>
            <div class="row main-content">
                <div class="offset-md-2 col-md-4 content-to-right">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
                <div class="col-md-4 content-to-left">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
            </div>
            <div class="row main-content">
                <div class="offset-md-2 col-md-4 content-to-right">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
                <div class=" col-md-4 content-to-left">
                    <h5>TITLE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
            </div>
        </div>
        <div id="backtotop" data-menuanchor="firstPage"><a href="#firstPage">&and; School</a></div>
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
            navigation: true,
            navigationPosition: 'left',
            dragAndMove: true,
            licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
        });

        //methods
        $.fn.fullpage.setAllowScrolling(true);
    });
</script>
</body>
</html>