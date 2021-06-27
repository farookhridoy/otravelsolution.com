<div id="header-sticky-wrapper" class="sticky-wrapper is-sticky">
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE --> 
      <a href="{{URL::to('/')}}" class="navbar-brand">
        <img src="{{ asset('logo/logo.jpg') }}" style="max-height: 50px;margin-top: -10px;" alt="otravelsolution.com">
      </a> 
      </div>
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('/')}}" class="smoothScroll">Home</a></li>
        <li><a href="{{URL::to('/booking')}}" class="smoothScroll">Booking</a></li>
        <li><a href="{{URL::to('/airport')}}" class="smoothScroll">Airport</a></li>
        <li><a href="{{URL::to('/wedding')}}" class="smoothScroll">Wedding</a></li>
        <li><a href="{{URL::to('/contact')}}" class="smoothScroll">Contact</a></li>
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 123 456 7890</span></li>
      </ul>
    </div>
  </div>
</div>
</div>