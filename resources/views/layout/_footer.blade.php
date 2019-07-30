<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/fullpage.js')}}"></script>
<script type="text/javascript" src="{{asset('js/fullpage.extensions.min.js')}}"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('.loader').delay(2600).fadeOut(300);
        $.fn.fullpage.setAllowScrolling(false);
        setTimeout(function(){
            $.fn.fullpage.setAllowScrolling(true);
        },2700);
    });
</script>

@yield('js') 

</body>
</html>