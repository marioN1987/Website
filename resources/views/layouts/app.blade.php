<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
	
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/CustomResponsive.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" type="text/css"/>
</head>
<body>
     
    <div class="container">
      <header>
         @include('partial.nav')
      </header>
      @yield('content')     
    </div>


    <!--Required scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script type="text/javascript" src="{{ asset('js/test.js') }}"></script>
	
	@include('partial.footer')
</body>
</html>