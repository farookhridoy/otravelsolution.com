@extends('web.layouts.master')
@section('body')

<div class="parallax-section" id="cars">
 <div class="container">
  <div class="section-title">
   <h3>Vehicle Models <span>For Rent</span></h3>
</div>
<div class="vehiclesList">
   <ul class="carsmodals">
    <li class="item">
     <div class="row">
      <div class="col-md-3">
       <h3>BMW 3-SERIES</h3>
       <div class="subtitle">ModernLine</div>
    </div>

    <div class="col-md-6"><a href="{{URL::to('frontend')}}/images/cars/01.jpg" class="image-popup"><img src="{{URL::to('frontend')}}/images/cars/01.jpg" alt="" /></a></div>
    <div class="col-md-3">
     <div class="carinfo">
      <ul>
       <li>Doors: <strong>4</strong></li>
       <li>Passengers: <strong>5</strong></li>
       <li>Luggage: <strong>2 Bags</strong></li>
       <li>Transmission: <strong>Automatic</strong></li>
       <li>Air conditioning: <strong>Dual Zone</strong></li>
       <li>Minimum age: <strong>35 years</strong></li>
    </ul>
 </div>
</div>
</div>
</li>
<li class="item">
   <div class="row">
    <div class="col-md-3">
     <h3>Subaru Impreza</h3>
     <div class="subtitle">Premium</div>
  </div>

  <div class="col-md-6"><a href="{{URL::to('frontend')}}/images/cars/02.jpg" class="image-popup"><img src="{{URL::to('frontend')}}/images/cars/02.jpg" alt="" /></a></div>
  <div class="col-md-3">
   <div class="carinfo">
    <ul>
     <li>Doors: <strong>4</strong></li>
     <li>Passengers: <strong>5</strong></li>
     <li>Luggage: <strong>2 Bags</strong></li>
     <li>Transmission: <strong>Automatic</strong></li>
     <li>Air conditioning: <strong>Dual Zone</strong></li>
     <li>Minimum age: <strong>35 years</strong></li>
  </ul>
</div>
</div>
</div>
</li>
<li class="item">
 <div class="row">
  <div class="col-md-3">
   <h3>Hyundai Santa Fe XL</h3>
   <div class="subtitle">Streetsville H</div>
</div>

<div class="col-md-6"><a href="{{URL::to('frontend')}}/images/cars/03.jpg" class="image-popup"><img src="{{URL::to('frontend')}}/images/cars/03.jpg" alt="" /></a></div>
<div class="col-md-3">
 <div class="carinfo">
  <ul>
   <li>Doors: <strong>4</strong></li>
   <li>Passengers: <strong>5</strong></li>
   <li>Luggage: <strong>2 Bags</strong></li>
   <li>Transmission: <strong>Automatic</strong></li>
   <li>Air conditioning: <strong>Dual Zone</strong></li>
   <li>Minimum age: <strong>35 years</strong></li>
</ul>
</div>
</div>
</div>
</li>
<li class="item">
   <div class="row">
    <div class="col-md-3">
     <h3>Honda Vizel</h3>
     <div class="subtitle">Streetsville H</div>

  </div>
  <div class="col-md-6"><a href="{{URL::to('frontend')}}/images/cars/04.jpg" class="image-popup"><img src="{{URL::to('frontend')}}/images/cars/04.jpg" alt="" /></a></div>
  <div class="col-md-3">
   <div class="carinfo">
    <ul>
     <li>Doors: <strong>4</strong></li>
     <li>Passengers: <strong>5</strong></li>
     <li>Luggage: <strong>2 Bags</strong></li>
     <li>Transmission: <strong>Automatic</strong></li>
     <li>Air conditioning: <strong>Dual Zone</strong></li>
     <li>Minimum age: <strong>35 years</strong></li>
  </ul>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>


<!-- Form Section -->
<div class="bformBox nomr">
   <div class="container">
      <div class="contact-form" style="margin:15px;">
        @include("web.layouts.notification")
     </div>

     <h3>BOOK YOUR CAR TODAY!</h3>
     {!! Form::open(['route' => 'web.booking.store',  'files'=> false, 'id'=>'contact-form', 'class' => 'form-horizontal']) !!}

     <div class="row">
       <div class="col-md-4 col-sm-4">
        <div class="formrow">
         <select class="form-control" name="vehicle_type">
          <option value="">Select Your Vehicle For Booking</option>
          <option value="any">Any</option>
          <option value="saloon">Saloon</option>
          <option value="estate">Estate</option>
          <option value="mvp">MVP</option>
          <option value="coach">Coach</option>
       </select>
    </div>
 </div>
 <div class="col-md-4 col-sm-4">
        <div class="formrow">
         <select class="form-control" name="no_of_passengers">
          <option value="">Select Number Of Passengers</option>
          <option value="1-4">1-4</option>
          <option value="5-7">5-7</option>
          <option value="8">8</option>
          
       </select>
    </div>
 </div>
 <div class="col-md-4 col-sm-4">
   <div class="formrow">
     <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
       <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Pickup Date Time" name="pickup_date" required >
       <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
    </div>
 </div>
</div>

<div class="row">
  <div class="col-md-6 col-sm-6">
    <div class="formrow">
      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Pick-Up</span>
         <input type="text" class="form-control" placeholder="Address, place name or post code" name="pickup" required >
      </div>
   </div>
</div>
<div class="col-md-6 col-sm-6">
  <div class="formrow">
    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Drop-Off</span>
      <input type="text" class="form-control" placeholder="Address, place name or post code" name="dropoff" required >
   </div>
</div>
</div>
</div>

<div class="row">
   <div class="col-md-6 col-sm-6">
      <div class="form-group" style="margin-left: 0px !important;">
        <label class="control-label" for="return_journey" style="color:white;font-size:18px;"><i class="fa fa-retweet"></i> Return Journey</label>
        <input class="form-control" data-val="1" data-val-required="The Return Journey field is required." id="return_journey" name="return_journey" style="width:33px;" type="checkbox" value="1">
        
     </div>
  </div>
  <div class="col-md-6 col-sm-6" id="return_date" style="display:none">
    <div class="formrow">
      <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
        <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Return Date and Time" name="return_date" required >
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
     </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 col-sm-4">
   <div class="formrow">
    <input type="text" class="form-control" placeholder="Your Name" name="name" required >
 </div>
</div>
<div class="col-md-4 col-sm-4">
 <div class="formrow">
  <input type="email" class="form-control" placeholder="Your Email" name="email" required>
</div>
</div>
<div class="col-md-4 col-sm-4">
 <div class="formrow">
  <input type="text" class="form-control" placeholder="Phone" name="phone" required>
  <input type="hidden" name="type" value="booking">
  <input type="hidden" name="paymnet_type" value="Cash">
  <input type="hidden" name="status" value="active">
</div>
</div>
<div class="col-md-12 col-sm-12">
   <div class="formrow">
    <input type="text" class="form-control" placeholder="Driver Note" name="driver_note">
 </div>
</div>
</div>

<div class="formbtn">
 <input type="submit" class="btn" value="Submit Car Booking">
</div>
{!! Form::close() !!}
</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">

   $(document).ready(function () {
      $('#return_journey').change(function () {
        if (!this.checked) 
         $('#return_date').fadeOut('slow');
      else 
         $('#return_date').fadeIn('slow');
   });
   });
</script>
@endsection