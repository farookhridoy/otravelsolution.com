@extends('web.layouts.master')
@section('body')

@include("web.home.slider")

<!-- About section -->
<div id="about">
 <div class="container">
  <div class="section-title">
   <h3>About <span>Otravel Solution</span></h3>
   <p>{{isset($aboutUs)?$aboutUs->short_description:''}}</p>
</div>
<div class="about-desc">
   <div class="row">
    <div class="col-md-7">
     <ul class="circleList row">
      <li class="col-md-4 col-sm-4">
       <div class="cricle"><i class="fa fa-car" aria-hidden="true"></i></div>
       <div class="title">Booking</div>
    </li>
    <li class="col-md-4 col-sm-4">
       <div class="cricle"><i class="fa fa-plane" aria-hidden="true"></i></div>
       <div class="title">Airport</div>
    </li>
    <li class="col-md-4 col-sm-4">
       <div class="cricle"><i class="fa fa-users" aria-hidden="true"></i></div>
       <div class="title">Wedding</div>
    </li>
 </ul>
 <p style="font-weight:600;font-size:18px;line-height: 30px;">
    {{isset($aboutUs)?$aboutUs->description:''}}
 </p>
</div>
<div class="col-md-5">
  <div class="postimg">
   @if(count((array)$aboutUs->image_link) > 0 && !empty ($aboutUs->image_link))

   <img  src="{{URL::to('')}}/uploads/generalPhoto/{{$aboutUs->image_link}}" >            
   @else

   <img src="{{URL::to('frontend')}}/images/about-img.jpg">
   @endif
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Counter Section -->
<div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="499" data-speed="1000"></span> <span class="counter-text">Happy Client</span> </div>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
          <div class="counterbox">
            <div class="counter-icon"><i class="fa fa-car" aria-hidden="true"></i></i></div>
            <span class="counter-number" data-from="1" data-to="199" data-speed="2000"></span> <span class="counter-text">Cars</span>
         </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
         <div class="counterbox">
           <div class="counter-icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
           <span class="counter-number" data-from="1" data-to="50" data-speed="3000"></span> <span class="counter-text">Destinations</span>
        </div>
     </div>
     <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="199" data-speed="4000"></span> <span class="counter-text">Awards</span>
       </div>
    </div>
 </div>
</div>
</div>

<!-- Service Section -->
<div id="service" class="parallax-section">
 <div class="container"> 
   <!-- Section Title -->
   <div class="section-title" >
     <h3>Otravel Solution <span>Services</span></h3>
     <p>SERVING THE COMMUNITY OF PORTSMOUTH FOR OVER 30 YEARS</p>
  </div>
  <div class="row"> 
     <!-- Service 1 -->
     <div class="col-md-4 col-sm-6">
       <div class="service-thumb">
         <div class="thumb-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
         <h4>Booking</h4>
         <p>Arrive in style with Otravel Solution booking services. View our prestigious vechicle range of saloon and estates.</p>
      </div>
   </div>

   <!-- Service 2 -->
   <div class="col-md-4 col-sm-6">
    <div class="service-thumb">
      <div class="thumb-icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
      <h4>Airport</h4>
      <p>Otravel Solution provide a full service from your door to all airports in the United Kingdom, 24/7 - 365 days a year.</p>
   </div>
</div>

<!-- Service 3 -->
<div class="col-md-4 col-sm-6">
 <div class="service-thumb">
   <div class="thumb-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
   <h4>Wedding</h4>
   <p>Ensure your special day runs smoothly and on time with Otravel Solution professional wedding services.</p>
</div>
</div>
</div>
</div>
</div>


<!-- Testimonials Section -->
{{-- <div id="testimonials">
   <div class="container"> 

    <!-- Section Title -->
    <div class="section-title">
     <h3>Testimonials</h3>
  </div>
  <ul class="testimonialsList">
     <!-- Client -->
     <li class="item">
      <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
      <p>"Best Car rental solution in UK"</p>
      <div class="clientname">Abdul hafiz</div>
      <div class="clientinfo">CEO - Softme solution</div>
   </li>

   <!-- Client -->
   <li class="item">
      <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
      <div class="clientname">Gm Farook</div>
      <div class="clientinfo">CEO - LaraSoft</div>
   </li>

</ul>
</div>
</div> --}}


<!-- Newsletter-->
<div class="newsletter">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <h3>Newsletter</h3>
    <p>Subscribe for our weekly newsletter.</p>
 </div>
 <div class="col-md-8">
    <div class="input-group">
     <input type="text" class="form-control" placeholder="Enter Your Email Address">
     <span class="input-group-btn">
      <button class="btn btn-secondary" type="button">Sign Up <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
   </span> </div>
</div>
</div>
</div>
</div>

<div id="contact">
 <div class="container"> 

   <!-- Dection Title -->
   <div class="section-title" >
     <h3>Contact <span>Us</span></h3>
     <p>SEND US YOUR QUERIES, FEEDBACK, OR SUGGESTIONS</p>
  </div>

  <!-- CONTACT FORM HERE -->
  <div class="row">
     <div class="col-md-8">
      <div class="contact-form" style="margin:15px;">
        @include("web.layouts.notification")
      </div>
       <div class="contact-form">
         {!! Form::open(['route' => 'web.contact.store',  'files'=> false, 'id'=>'contact-form', 'class' => 'form-horizontal']) !!}
           <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" name="first_name" placeholder="Name" required  >
          </div>
          <div class="col-md-6 col-sm-6">
             <input type="email" class="form-control" name="email" placeholder="Email" required >
          </div>
          <div class="col-md-6 col-sm-12">
             <input type="number" class="form-control" name="phone" placeholder="Phone">
          </div>
          <div class="col-md-6 col-sm-12">
             <input type="text" class="form-control" name="address" placeholder="Address">
          </div>
          <div class="col-md-12 col-sm-12">
             <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
          </div>
          <div class="col-md-12">
             <button id="submit" type="submit" class="form-control">Send Message</button>
          </div>
          <input type="hidden" name="account_id" value="1">
        {!! Form::close() !!}
    </div>
 </div>
 <div class="col-md-4">
    <div class="contact-now">
      <div class="contact"> <span><i class="fa fa-home"></i></span>
        <div class="information"> <strong>Address:</strong>
          <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
       </div>
    </div>
    <!-- Contact Info -->
    <div class="contact"> <span><i class="fa fa-envelope"></i></span>
     <div class="information"> <strong>Email Address:</strong>
       <p>info@otravelsolution.com</p>
       <p>booking@otravelsolution.com</p>
    </div>
 </div>
 <div class="contact"> <span><i class="fa fa-phone"></i></span>
  <div class="information"> <strong>Phone No:</strong>
    <p>+12 345 67 09</p>
    <p>+12 345 67 09</p>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection