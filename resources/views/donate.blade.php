@extends('layout.layout')
@section('title', 'Donate')
@section('css')
    <style type="text/css">
        #menubar{
            background: transparent !important;
        }
        #mobile-menubar{
            height: 0;
        }
    </style>
@stop

@section('content')
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
                <form method="post" action="{{url('donate')}}">
                {{csrf_field()}}
                    <div class="form-bg"></div>
                    <div class="form-volunteer">
                        <div class="row">
                            <div class="title col-md-12">Join Us To Help The Community !</div>
                            <div class="col-md-6">First Name</div>
                            <div class="col-md-6">Last Name</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><input name="firstName" type="text"></div>
                            <div class="col-md-6"><input name="lastName" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Your Email</div><br>
                            <div class="col-md-12"><input name="email" id="email-input" type="email"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Your Message</div><br>
                            <div class="col-md-12"><input name="message" id="msg-input" type="text"></div>
                        </div>
                        <div class="row">
                            <input type="submit" class="col-md-4 offset-md-4" value="Join">
                        </div>
                        @include('layout._message')
                    </div>
                </form>
            </div>
        </div>
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
            dragAndMove: true,
            licenseKey: '6A79080F-89914B95-AD134155-6E2D191F'
        });

        //methods
        $.fn.fullpage.setAllowScrolling(true);

      
        setTimeout(function(){
           $("div.message").remove();
        }, 3000 ); 

    });

</script>
@stop