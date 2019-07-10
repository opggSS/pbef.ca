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

    <title>About Us - Prosperous Badminton Education Foundation</title>
</head>
<body>
<div id="menubar" class="row nonhome-menubar">
    <div class="col-md-2" id="menu-logo">
        < <a href="index.html">Home</a> | About Us
    </div>
    <div class="col-md-9 offset-md-1">
        <ul class="nav nav-tabs">
            <li><a href="index.html">HOME</a></li>
            <li class="dropdown"><a id="menu-active" data-toggle="dropdown" href="#">ABOUT US</a>
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
            <li><a href="index.html">PUBLIC INFO</a></li>
            <li><a id="menu-donate" href="index.html">DONATE</a></li>
        </ul>
    </div>
</div>
@include('shared.social_media')
<div id="fullpage" class="aboutuspage">
    <!--Our Journey Page-->
    <div class="section grow-path">
        <div class="grow-path-container">
            <div class="row">
                <div class="offset-md-2 col-md-3">
                    <h4>Grow Path</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                </div>
                <div class="col-md-3">
                    <div class="grow-path-middleimg">
                        <img src="{{url('/image/ref-images/aboutus-s1-1.jpg')}}" alt="" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Message from President</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    <div class="president-image-container">
                        <img src="{{url('/image/ref-images/aboutus-s1-2.jpg')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div id="toNextSlide" data-menuanchor="secondPage"><a href="#secondPage">&or; Contact Us</a></div>
    </div>

    <!--Contact Us Page-->
    <div class="section contact-us">
        <div class="title">
            <div class="row">
                <div class="offset-md-2 col-md-4">
                    <h1><span class="letter-bold">C</span>ONTACT</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p>
                    <div class="contact-info"><img src="{{url('/image/pos-logo.png')}}">2231 Kingsway Ave., Burnaby, B.C.</div>
                    <div class="contact-info"><img src="{{url('/image/phone-logo.png')}}">+1(778)-778-7788</div>
                    <div class="contact-info"><img src="{{url('/image/email-logo.png')}}">info@prosperousbef.com</div>
                </div>
                <div class="col-md-5">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div id="backtotop" data-menuanchor="firstPage"><a href="#firstPage">&and; Grow Path</a></div>
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
<script>
    function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.674, lng: -73.945},
            zoom: 12,
            styles: [
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#d3d3d3"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        {
                            "color": "#808080"
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#b3b3b3"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "weight": 1.8
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d7d7d7"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ebebeb"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#a7a7a7"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#efefef"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#696969"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#737373"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d6d6d6"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {},
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                }
            ]
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5t6_aIK7rJiDO0_7fO6OoRguMnQiPbhY&callback=initMap"
        async defer></script>
</body>
</html>