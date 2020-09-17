<nav id="navb" class="navbar navbar-expand-lg navbar-light">
    <!--<div class="navbar-header">-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand">
          <div id="dt"><i class='glyphicon glyphicon-time'></i></div>
          <div id="tm"></div>
        </div>
    <!--</div>-->
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="menu" class="navbar-nav mr-auto">
            <li title="home" class="{{ (\Request::route()->getName() == 'home.index') ? 'active' : '' }}" >
			        <a href="{{ route('home.index') }}"><i class='fas fa-home' style='font-size:20px'></i>&nbsp;&nbsp;Home</a>
			      </li>
			      <li title="portfolio" class="{{ (\Request::route()->getName() == 'home.portfolio') ? 'active' : '' }}" >
			        <a href="{{ route('home.portfolio') }}"><i class='fas fa-file-code' style='font-size:20px'></i>&nbsp;&nbsp;Portfolio</a>
			      </li>
			      <li title="contact" class="{{ (\Request::route()->getName() == 'home.contact') ? 'active' : '' }}" >
			        <a href="{{ route('home.contact') }}"><i class='fas fa-address-card' style='font-size:20px'></i>&nbsp;&nbsp;Contact</a>
			      </li>
            <li class="my-2 my-lg-0">
              <a href="https://stackoverflow.com/users/2614805/marios-nikolaou" target="_blank">
                <i class='fab fa-stack-overflow' style='font-size:20px'></i>
              </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Scroll Top -->
 <div id="circle">
      <div class="shape shape1"></div>
      <div class="shape shape2"></div>
 </div>
 <!-- End Scroll Top -->
 
 <div id="intro">
   <h1>Welcome to my website.</h1>
 </div>