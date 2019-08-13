@extends('layout.layout')
@section('title', 'Home')
@section('loader')
    {{--****************************************** Loader **************************************************--}}
    <div class="preloader position-fixed" style="top:0;left: 0;right:0;bottom:0;z-index:9999;background:#fff;">
        <img class="img1 position-absolute" src="{{asset('images/logo-animate-01.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
        <img class="img2 position-absolute" src="{{asset('images/logo-animate-02.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
        <img class="img3 position-absolute" src="{{asset('images/logo-animate-03.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
        <img class="img4 position-absolute" src="{{asset('images/logo-animate-04.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
        <img class="img5 position-absolute" src="{{asset('images/logo-animate-05.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
        <img class="img6 position-absolute" src="{{asset('images/logo-animate-06.png')}}" width="300" alt="" style="top:35%;left:50%;margin-left:-150px;opacity:0;">
    </div>
@stop
@section('content')


    <div id="fullpage" class="homepage">
        <!--First Page-->
        <div class="section home-section-1">
            <div class="bg">
                <div class="row position-absolute ani fromBottom nV home-ani-1">
                    <div class="col-7 offset-5">
                        <img class="w-100" src="{{asset('images/foundation-home-bg1.png')}}" alt="particle background">
                    <!-- <img class="w-100 position-absolute" src="{{asset('storage/images/foundation-home-bg1-top.png')}}" alt="" id="human-swing"> -->
                    </div>
                </div>
                <div class="row position-absolute ani fromBottom nV home-ani-2">
                    <div class="col-7 offset-5">
                    <!-- <img class="w-100 position-absolute" src="{{asset('images/foundation-home-bg1.png')}}" alt="particle background"> -->
                        <img class="w-100" src="{{asset('images/foundation-home-bg1-top.png')}}" alt="" id="human-swing">
                    </div>
                </div>
            </div>
            <div class="title container">
                <div class="row ani fromBottom nV home-ani-3">
                    <div class="offset-md-2 col-md-5">
                        <h1><span class="letter-bold">E</span>DUCATIONAL</h1>
                        <h1>FOUNDATION</h1>
                        <p>

                        {{$pc['home_content1']}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Second Page-->
        <div class="section home-section-2">
            <div class="title container">
                <div class="row ani fromBottom nV">
                    <div class="offset-md-2 col-md-4">
                        <h1><span class="letter-bold">A</span>BOUT US</h1>
                        <p class="mt-2 mt-md-3 mb-4 mb-md-5">{{$pc['home_content2']}}</p>
                        <a href="{{url('/about_us')}}">EXPLORE</a>
                    </div>
                    <div class="offset-lg-1 col-lg-4 d-none d-xl-block align-top">
                        <div class="img-container" width="500">
                            <img src="{{asset('images/ref-images/home-s2-1.jpg')}}" alt="sample-img">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-block d-xl-none align-bottom">
                        <div class="img-container d-none d-md-block">
                            <img src="{{asset('images/ref-images/home-s2-1.jpg')}}" alt="sample-img">
                        </div>
                        <div class="video-container mt-5 offset-md-0 mt-md-3 text-left text-md-left">
                            <video controls>
                            <!-- <source data-src="{{asset('images/ref-images/sample-video.mp4')}}" type="video/mp4"> -->
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video d-none d-xl-block">
                <div class="grey-square col d-none d-xl-block ani fromBottom nV"></div>
                <div class="video-container ani fromBottom nV">
                    <video width="280" height="187" controls>
                    <!-- <source data-src="{{asset('images/ref-images/sample-video.mp4')}}" type="video/mp4"> -->
                    </video>
                </div>
                <div class="image-container col d-none d-xl-block ani fromBottom nV">
                    <img src="{{asset('images/ref-images/home-s2-2.jpg')}}" alt="sample-img">
                </div>
            </div>
        </div>

        <!--Third Page-->
        <div class="section home-section-3 container">
            <div class="title">
                <div class="row top-news ani fromBottom nV">
                    <div class="col-6 col-md-1 offset-md-2">
                        <h1>NEWS</h1>
                    </div>
                    <div class="offset-md-0 col-12 col-md-4 mt-2 mt-md-0">
                        <div  id="top-news-image-container">
                            <img src="{{asset('images/ref-images/home-s3-1.jpg')}}" alt="">
                        </div>
                    </div>

                    <div id="top-title-block" class="offset-md-0 col-12 col-md-5">
                        <div class="d-inline-block d-md-block city-anchor">VANCOUVER, B.C.</div>
                        <div class="news-type align-top align-md-center mt-1 mt-md-1">Story</div>
                        <p id="top-news-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis.</p>
                        <a href="" class="news-more float-right float-md-left">MORE</a>
                    </div>
                </div>

                <div class="horizontal-slider ani fromBottom nV">
                    <div class="row bot-news">
                       {{--  <div class="d-none d-md-block col-md-1">
                            <img src="{{asset('images/foundation-badminton-shadow.png')}}" id="badminton-shadow">
                            <img src="{{asset('images/foundation-badminton.png')}}" id="badminton">
                        </div> --}}

                        <div class="col col-6 col-md-3  offset-md-2">
                            <div class="image-container" style="background:url('{{asset('images/ref-images/home-s3-2.jpg')}}'); background-size:cover; background-position: center ;">
                            </div>

                            <div class="city-anchor">VANCOUVER, B.C.</div>
                            <div class="news-type">Video</div>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                            <a href="" class="news-more">MORE</a>
                        </div>
                        <div class="col col-6 col-md-3">
                            <div class="image-container">
                                <img src="{{asset('images/ref-images/home-s3-3.jpeg')}}" alt="">
                            </div>
                            <div class="city-anchor">VANCOUVER, B.C.</div>
                            <div class="news-type">Video</div>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                            <a href="" class="news-more">MORE</a>
                        </div>
                        <div class="col col-6 col-md-3">
                            <div class="image-container">
                                <img src="{{asset('images/ref-images/home-s3-2.jpg')}}" alt="">
                            </div>
                            <div class="city-anchor">VANCOUVER, B.C.</div>
                            <div class="news-type">Video</div>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                            <a href="" class="news-more">MORE</a>
                        </div>
                        <div class="col col-6 col-md-3">
                            <div class="image-container">
                                <img src="{{asset('images/ref-images/home-s3-3.jpeg')}}" alt="">
                            </div>
                            <div class="city-anchor">VANCOUVER, B.C.</div>
                            <div class="news-type">Video</div>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit.</p>
                            <a href="" class="news-more">MORE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Fourth Page-->
        <div class="section home-section-4 container">
            <div class="title">
                <div class="row">
                    <div class="offset-0 col-12 offset-md-2 col-md-6 ani fromBottom nV">
                        <h1><span class="letter-bold">W</span>E APPRECIATE</h1>
                        <h1>YOUR HELP</h1>
                        <p class="mt-2 mt-md-3 mb-4 mb-md-5">{{$pc['home_content3']}}</p>
                        <a href="" class="donate-button">DONATE</a>
                    </div>
                    <div class="offset-0 col-12 offset-md-0 col-md-3 mt-3 mt-md-0">
                        <div class="donate-card ani fromBottom nV">
                            <div class="donate-number">{{$pc['people_donated']}}</div>
                            <div class="donate-title">People Donated</div>
                        </div>
                        <div class="donate-card ani fromBottom nV">
                            <div class="donate-number">{{$pc['joined_us']}}</div>
                            <div class="donate-title">Joined Us</div>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-sm-block mt-5 ani fromBottom nV">
                    <div class="offset-0 col-12 offset-md-2 col-md-9">
                        <h3>Our Partners</h3>
                        <div class="partner-logo">
                            @foreach($partners as $partner)
                            <img src="{{asset('/images/' .$partner['image'])}}" alt="{{$partner['alt']}}" title="{{$partner['title']}}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="backtotop" class="d-none d-sm-block" data-menuanchor="firstPage"><a href="#firstPage">&#x22C0; Back to top</a></div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $.fn.isInViewport = function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            return elementBottom > viewportTop && elementTop < viewportBottom;
        };
        $(document).ready(function() {
            $('#fullpage').fullpage({
                //options here
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
                lazyLoading: true,
                navigation: true,
                navigationPosition: 'left',
                dragAndMove: true,
                licenseKey: '6A79080F-89914B95-AD134155-6E2D191F',
                responsiveWidth: 900,
                afterLoad: function(origin){
                    // var loadedSection = this;
                    $('.ani').each(function() {
                        if ($(this).isInViewport()) {
                            $(this).removeClass('nV');
                        } else {
                            $(this).addClass('nV');
                        }
                    });
                }
            });
            //methods
            $.fn.fullpage.setAllowScrolling(true);

            $('.home-ani-1').removeClass('nV').delay(300).queue(function(){
                $('.home-ani-2').removeClass('nV').delay(300).queue(function(){
                    $('.home-ani-3').removeClass('nV');
                });
            });

            $(window).on('resize scroll', function() {
                $('.ani').each(function() {
                    if ($(this).isInViewport()) {
                        $(this).removeClass('nV');
                    } else {
                        $(this).addClass('nV');
                    }
                });
            });

            setTimeout(function(){
                $('.preloader').hide();
            }, 3000);
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
@stop