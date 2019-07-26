@extends('layout.layout')
@section('title', 'Projects')
@section('content')

<div id="fullpage" class="aboutuspage">
    <!--Our Journey Page-->
    <div class="section school-project">
        <div class="title">
            <div class="row">
                <div class="offset-2 col-8 col-md-8 school-title">
                    <h1>SCHOOL</h1>
                </div>
            </div>
            <div class="row content-process">
                <div class="offset-0 offset-md-2 col-8 col-sm-4 col-md-3 content-process-container">
                    <div class="progress-expanded">
                        <div class="progress-expanded-number">1.</div>
                        <div class="progress-expanded-image">
                          <img class="active img-1" src="{{url('/images/ref-images/home-s3-2.jpg')}}">
                          <img class="img-2" src="{{url('/images/ref-images/home-s3-1.jpg')}}">
                          <img class="img-3" src="{{url('/images/ref-images/home-s2-1.jpg')}}">
                          <img class="img-4" src="{{url('/images/ref-images/home-s2-2.jpg')}}">
                        </div>
                        <h5>Step 1</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
                    </div>
                </div>
                <div class="row step-trigger offset-1 col-10 col-sm-6 col-md-5 card-group mt-2 mt-lg-4">
                  <div class="col col-4 col-md-5 offset-1 offset-sm-1 col-lg-5 mb-3 pt-3 active" id="1">
                    <h5 class="title">Step 1</h5>
                    <p class="d-none d-sm-block sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="col col-4 col-md-5 offset-1 offset-sm-1 col-lg-5 mb-3 pt-3" id="2">
                    <h5 class="title">Step 2</h5>
                    <p class="d-none d-sm-block sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="col col-4 col-md-5 offset-0 offset-sm-1 col-lg-5 mb-3 pt-3" id="3">
                    <h5 class="title">Step 3</h5>
                    <p class="d-none d-sm-block sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="col col-4 col-md-5 offset-0 offset-sm-1 col-lg-5 mb-3 pt-3" id="4">
                    <h5 class="title">Step 4</h5>
                    <p class="d-none d-sm-block sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
            </div>
        </div>
        <div id="toNextSlide" data-menuanchor="secondPage"><a href="#secondPage">&or; Community</a ></div>
    </div>

    <!--Contact Us Page-->
    <div class="section community-project">
        <div class="title">
            <div class="row">
                <div class="offset-3 col-9 offset-md-2 col-md-9 community-title">
                    <h1>COMMUNITY</h1>
                </div>
            </div>
            <div class="row main-content mt-5 mt-md-3">
              <div class="offset-2 col-9 offset-md-2 col-md-4 text-right">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique.
                    Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus.
                    Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
              <div class="offset-2 col-9 offset-md-1 col-md-4 text-right text-md-left">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
            </div>
            <div class="row main-content">
              <div class="offset-2 col-9 offset-md-2 col-md-4 text-right">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique.
                    Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus.
                    Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
              <div class="offset-2 col-9 offset-md-1 col-md-4 text-right text-md-left">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
            </div>
            <div class="row main-content">
              <div class="offset-2 col-9 offset-md-2 col-md-4 text-right">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique.
                    Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus.
                    Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
              <div class="offset-2 col-9 offset-md-1 col-md-4 text-right text-md-left">
                  <h5 class="d-inline-block float-right d-md-block float-md-none pl-2 pl-md-0">TITLE</h5>
                  <p class="d-inline-block d-md-block float-md-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.</p >
              </div>
            </div>
        </div>
        <div id="backtotop" data-menuanchor="firstPage"><a href="#firstPage">&and; School</a ></div>
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

        $('.step-trigger').find('.col').click(function(){
          var numExpand = $('.progress-expanded').find('.progress-expanded-number');
          var titExpand = $('.progress-expanded').find('h5');
          var pExpand = $('.progress-expanded').find('p');;

          var numSelect = $(this).attr('id') + '.';
          var titSelect = $(this).find('h5').text();
          var pSelect = $(this).find('p').text();

          var imgIndex = $(this).attr('id');
          var imgOpen = $('.progress-expanded .progress-expanded-image').find('.img-' + imgIndex);
          console.log(imgOpen);

          $(this).addClass('active');
          $(this).siblings().removeClass('active');

          numExpand.text(numSelect);
          imgOpen.addClass('active');
          imgOpen.siblings().removeClass('active');
          titExpand.text(titSelect);
          pExpand.text(pSelect);
        });
    });
</script>
@stop
