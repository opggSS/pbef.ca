@extends('layout.layout')

@section('title', 'About Us')
@section('content')
<div id="fullpage" class="aboutuspage">
    <!--Our Journey Page-->
    <div class="section grow-path">
        <div class="grow-path-container">
            <div class="row">
                <div class="offset-2 col-8 col-md-3">
                    <h4>Grow Path </h4>
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['grow_path_p1']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['grow_path_p2']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['grow_path_p3']}}</p >
                </div>
                <div class="col-md-3 grow-path-middleimg d-none d-md-block mr-md-3">
                    <img class="h-100" src="{{url('/images/ref-images/aboutus-s1-1.jpg')}}" alt="">
                </div>
                <div class="offset-2 offset-md-0 col-8 col-md-3 mt-2 mt-sm-0">
                    <h4>Message from President</h4>
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['president_p1']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['president_p2']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['president_p3']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['president_p4']}}</p >
                    <p class="mt-1 mb-1 mt-lg-3 mb-lg-0">{{$pc['president_p5']}}</p >
                    <div class="president-image-container d-none d-md-block">
                        <img src="{{url('/images/ref-images/aboutus-s1-2.jpg')}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div id="toNextSlide" data-menuanchor="secondPage"><a href="#secondPage">&or; Contact Us</a ></div>
    </div>

    <!--Contact Us Page-->
    <div class="section contact-us">
        <div class="title">
            <div class="row">
                <div class="offset-2 col-md-4 col-8">
                    <h1><span class="letter-bold">C</span>ONTACT</h1>
                    <p>{{$pc['contact_p']}}</p>
                    <div class="contact-info"><img src="{{url('/images/pos-logo.png')}}">{{$pc['location']}}</div>
                    <div class="contact-info"><img src="{{url('/images/phone-logo.png')}}">{{$pc['phone']}}</div>
                    <div class="contact-info"><img src="{{url('/images/email-logo.png')}}">{{$pc['email']}}</div>
                </div>
                <div class="offset-2 offset-md-0 col-8 col-md-5">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div id="backtotop" data-menuanchor="firstPage"><a href="#firstPage">&and; Grow Path</a ></div>
    </div>
</div>
@stop

@section('js')
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
<script type="text/javascript">
    function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 49.184196, lng: -123.135901},
            zoom: 8,
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDzUPjL397PFZXselPKp5AquxpSum4Lgw&callback=initMap"
        async defer></script>
@stop

