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

    <title>Gallery - Prosperous Badminton Education Foundation</title>
</head>
<body>
<div id="menubar" class="row nonhome-menubar gallery-menubar">
    <div class="col-md-2" id="menu-logo">
        < <a href="index.html">Home</a> | Gallery
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
        <li><a id="menu-active" href="index.html">GALLERY</a></li>
        <li><a href="index.html">PUBLIC INFO</a></li>
        <li><a id="menu-donate" href="index.html">DONATE</a></li>
        </ul>
    </div>
</div>
@include('shared.social_media')
<div id="fullpage" class="gallerypage">

    <div class="section bg">
        <div class="row">
            <div class="offset-md-2 col-md-9">
                <div class="grid">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
                        </div>
                        <div class="grid-item">
                            <img data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
                        </div>
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
<script type="text/javascript" src="js/masonry.pkgd.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            //options here
            anchors: ['firstPage', 'secondPage'],
            lazyLoading: true,
            dragAndMove: true,
            scrollOverflow: true,
            licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
        });

        //methods
        $.fn.fullpage.setAllowScrolling(true);


        //grid layout
        $('.grid').masonry({
            // set itemSelector so .grid-sizer is not used in layout
            itemSelector: '.grid-item',
            // use element for option
            columnWidth: '.grid-sizer',
            percentPosition: true
        })
    });
</script>
</body>
</html>