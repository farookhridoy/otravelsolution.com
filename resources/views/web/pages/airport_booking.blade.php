@extends('web.layouts.master')
@section('body')

<!-- Form Section -->
<div class="bformBox" style="margin-top: 80px;">
   <div class="container">
      <div class="contact-form" style="margin:15px;">
        @include("web.layouts.notification")
     </div>

     <h3>AIRPORT BOOKING!</h3>
     {!! Form::open(['route' => 'web.airport.booking.store',  'files'=> false, 'id'=>'contact-form', 'class' => 'form-horizontal']) !!}

     <div class="row">
       <div class="col-md-6 col-sm-6">
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
 <div class="col-md-6 col-sm-6">
        <div class="formrow">
         <select class="form-control" name="no_of_passengers">
          <option value="">Select Number Of Passengers</option>
          <option value="1-4">1-4</option>
          <option value="5-7">5-7</option>
          <option value="8">8</option>
          
       </select>
    </div>
 </div>
 <div class="col-md-6 col-sm-6">
        <div class="formrow">
         <select class="form-control" name="luggage">
          <option value="">Select Luggage</option>
          <?php 
            for ($i = 1; $i <= 10; $i++){
          ?>
          <option value="{{$i}}">{{$i}}</option>
          <?php } ?>
       </select>
    </div>
 </div>
 <div class="col-md-6 col-sm-6">
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
<div class="col-md-12 col-sm-12">
  <div class="formrow">
    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i> Flight</span>
      <input type="text" class="form-control" placeholder="Flight number (BA1386) or Airports (LHR - MAN) or City (London)" name="flight_details" required >
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
  <input type="hidden" name="type" value="airport">
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
 <input type="submit" class="btn" value="Get Quote">
</div>
{!! Form::close() !!}
</div>
</div>
@include('web.pages.terms')
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
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