@extends('web.layouts.master')
@section('body')

<!-- Form Section -->
<div class="bformBox" style="margin-top: 80px;">
 <div class="container">
  <div class="contact-form" style="margin:15px;">
    @include("web.layouts.notification")
  </div>

  <h3>WEDDING BOOKING!</h3>
  {!! Form::open(['route' => 'web.wedding.booking.store',  'files'=> false, 'id'=>'contact-form', 'class' => 'form-horizontal']) !!}

  <div class="row">
   <div class="col-md-6 col-sm-6">
    <div class="formrow">
     <select class="form-control" name="vehicle_type">
      <option value="">Select Your Vehicle For Booking</option>
      <option value="Replica 1933 Asquith Taxi">Replica 1933 Asquith Taxi</option>
      <option value="E300 Mercedes">E300 Mercedes</option>
      <option value="Rolls Royce Silver Shadows">Rolls Royce Silver Shadows</option>
      <option value="mvp">MVP</option>
      <option value="coach">Coach</option>
    </select>
  </div>
</div>

<div class="col-md-6 col-sm-6">
 <div class="formrow">
   <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
     <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Booking Date Time" name="booking_date" required >
     <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
   </div>
 </div>
</div>



<div class="row">
  <div class="col-md-6 col-sm-6">
   <div class="formrow">
    <input type="text" class="form-control" placeholder="Your First Name" name="first_name" required >
  </div>
</div>
<div class="col-md-6 col-sm-6">
 <div class="formrow">
  <input type="text" class="form-control" placeholder="Your Last Name" name="last_name" required >
</div>
</div>
<div class="col-md-6 col-sm-6">
 <div class="formrow">
  <input type="email" class="form-control" placeholder="Your Email" name="email" required>
</div>
</div>
<div class="col-md-6 col-sm-6">
 <div class="formrow">
  <input type="text" class="form-control" placeholder="Phone" name="phone" required>

  <input type="hidden" name="status" value="active">
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
@endsection