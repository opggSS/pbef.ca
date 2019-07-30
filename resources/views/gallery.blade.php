@extends('layout.layout')
@section('title', 'Gallery')
@section('content')
<div id="fullpage" class="gallerypage">

    <div class="section bg">
        <div class="row">
            <div class="offset-md-2 col-md-9">
                <div class="grid">
                    <div class="grid">
                        <div class="grid-sizer"></div>

                        @foreach($galleries as $gallery)
                            <div class="grid-item">
                                <img data-src="{{url('/images/'. $gallery['image'])}}" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript" src="{{asset('js/masonry.pkgd.js')}}"></script>
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
    $(window).on('load', function() {
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
@stop