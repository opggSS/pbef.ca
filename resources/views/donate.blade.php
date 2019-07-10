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

    <title>Donate - Prosperous Badminton Education Foundation</title>
</head>
<body>
<div id="menubar" class="row donate-menubar">
    <div class="col-md-2" id="menu-logo">
        < <a href="index.html">Home</a> | Donate
    </div>
    <div class="col-md-9 offset-md-1">
        <!--<ul class="nav nav-tabs">-->
            <!--<li><a href="index.html">HOME</a></li>-->
            <!--<li class="dropdown"><a data-toggle="dropdown" href="#">ABOUT US</a>-->
                <!--<ul class="dropdown-menu">-->
                    <!--<li><a href="#">OUR JOURNEY</a></li>-->
                    <!--<li><a href="#">CONTACT US</a></li>-->
                <!--</ul>-->
            <!--</li>-->
            <!--<li class="dropdown"><a data-toggle="dropdown" href="#">PROJECTS</a>-->
                <!--<ul class="dropdown-menu">-->
                    <!--<li><a href="#">SCHOOL</a></li>-->
                    <!--<li><a href="#">COMMUNITY</a></li>-->
                <!--</ul>-->
            <!--</li>-->
            <!--<li><a href="index.html">GALLERY</a></li>-->
            <!--<li><a id="menu-active" href="index.html">PUBLIC INFO</a></li>-->
            <!--<li><a id="menu-donate" href="index.html">DONATE</a></li>-->
        <!--</ul>-->
    </div>
</div>
<div id="socialmedia">
    <ul>
        <li><a href=""><img src="image/foundation-ins-logo.png" alt="ins logo"></a></li>
        <li><a href=""><img src="image/foundation-fb-logo.png" alt="facebook logo"></a></li>
        <li><a href=""><img src="image/foundation-twitter-logo.png" alt="twitter logo"></a></li>
    </ul>
</div>
<div id="fullpage" class="donatepage">

    <div class="section bg">
        <div class="row">
            <div class="offset-md-2 col-md-4">
                <h2>We Appreciate Your Help</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                <a href="">DONATE</a>
            </div>
            <div class="offset-md-1 col-md-4">
                <div class="form-bg"></div>
                <div class="form-volunteer">
                    <div class="row">
                        <div class="title col-md-12">Join Us To Help The Community !</div>
                        <div class="col-md-6">First Name</div>
                        <div class="col-md-6">Last Name</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input type="text"></div>
                        <div class="col-md-6"><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">Your Email</div><br>
                        <div class="col-md-12"><input id="email-input" type="email"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">Your Message</div><br>
                        <div class="col-md-12"><input id="msg-input" type="text"></div>
                    </div>
                    <div class="row">
                        <button class="col-md-4 offset-md-4">Join</button>
                    </div>
                </div>

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