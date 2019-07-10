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
    <div class="col-md-2" id="menu-logo">
        < <a href="index.html">Home</a> | Public Info
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
            <li class="dropdown"><a data-toggle="dropdown" href="#">PROJECTS</a>
                <ul class="dropdown-menu">
                    <li><a href="#">SCHOOL</a></li>
                    <li><a href="#">COMMUNITY</a></li>
                </ul>
            </li>
            <li><a href="index.html">GALLERY</a></li>
            <li><a id="menu-active" href="index.html">PUBLIC INFO</a></li>
            <li><a id="menu-donate" href="index.html">DONATE</a></li>
        </ul>
    </div>
</div>
@include('shared.social_media')
<div id="fullpage" class="publicinfopage">

    <div class="section">
        <div>
            <div class="row">
                <div class="offset-md-2">
                    <h5>Basic Values</h5>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">Joined Us</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
                <div class="col-md-2 donate-card-container">
                    <div class="donate-card">
                        <div class="donate-number">3,0121</div>
                        <div class="donate-type">People Donated</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2">
                    <h5>Total Values</h5>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 total-donate-data">
                    <h4>3,121 <span>People Donated</span> &nbsp;&nbsp;~&nbsp;&nbsp; 2018-2019 <span>1 year 2 month 21days</span></h4>
                </div>
            </div>
            <div class="row final-donate-data">
                <div class="offset-md-2 col-md-5">
                    <h4>Total Amount: &nbsp;&nbsp;&nbsp;<span>30,212.31</span> &nbsp;<span id="money-unit">CAD</span></h4>
                </div>
                <div class="col-md-2"><a href="">DOWNLOAD PDF</a></div>
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