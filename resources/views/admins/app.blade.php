<!DOCTYPE html>
<html lang="en">
<head>
@include('admins.includes._header')
<body id="page-top">

  <div id="wrapper">

     @include('admins.includes._nav_bar')
   
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        @include('admins.includes._topbar')

		@yield('content')
		@include('admins.includes._footer')

		@yield('scripts')
  
</body>

</html>