<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/fullpage.js')}}"></script>
<script type="text/javascript" src="{{asset('js/fullpage.extensions.min.js')}}"></script>
<script type="text/javascript">
//    $(window).on('load', function () {
//        $('.loader').delay(2600).fadeOut(300);
//        $.fn.fullpage.setAllowScrolling(false);
//        setTimeout(function(){
//            $.fn.fullpage.setAllowScrolling(true);
//        },2700);
//    });
    $(document).ready(function() {
        setInterval(function () {
            $('#img1').removeClass('img1');
            $('#img2').removeClass('img2');
            $('#img3').removeClass('img3');
            $('#img4').removeClass('img4');
            $('#img5').removeClass('img5');
            $('#img6').removeClass('img6');
            $('.preloader').hide();
        }, 3500);
        setInterval(function () {
            $('#img1').addClass('img1');
            $('#img2').addClass('img2');
            $('#img3').addClass('img3');
            $('#img4').addClass('img4');
            $('#img5').addClass('img5');
            $('#img6').addClass('img6');
        }, 1000);
    });
</script>

@yield('js') 

</body>
</html>