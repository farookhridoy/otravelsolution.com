@extends('web.layouts.master')
@section('body')

<div class="parallax-section" id="cars">
  <div class="container">
    <div class="section-title">
      <h3>Vehicle Models <span>For Rent</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget</p>
    </div>
    <div class="vehiclesList">
      <ul class="carsmodals">
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>BMW 3-SERIES</h3>
              <div class="subtitle">ModernLine</div>
              <div class="carPrice"> <strong>$99</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
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
                <div class="carPrice"> <strong>$125</strong> <span>/Day</span> </div>
                <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
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
                  <div class="carPrice"> <strong>$199</strong> <span>/Day</span> </div>
                  <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
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
                   <div class="carPrice"> <strong>$215</strong> <span>/Day</span> </div>
                   <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
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

           <h3>BOOK YOUR CAR TODAY!</h3>
           <form action="http://sharjeelanjum.com/html/car-rental/html/booking.php" method="POST">
             <div class="formrow">
               <select class="form-control" name="car_type" >
                 <option value="" >Select Your Car For Booking</option>
                 <option>BMW</option>
                 <option>Honda</option>
                 <option>Toyota</option>
                 <option>Nissan</option>
                 <option>Chrysler</option>
                 <option>Chevrolet</option>
                 <option>Mercedes</option>
                 <option>Volvo</option>
                 <option>Suzuki</option>
               </select>
             </div>
             <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="formrow">
                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Pick-Up</span>
                    <select class="form-control" data-live-search="true" name="pickup" id="pickup" required="required" >
                      <option value="">Select Pick-Up</option>
                      <option>New York</option>
                      <option>Los Angeles</option>
                      <option>Houston</option>
                      <option>San Diego</option>
                      <option>Chicago</option>
                      <option>California</option>
                      <option>San Jose</option>
                      <option>Atlanta</option>
                      <option>Kansas City</option>
                      <option>Chattanooga</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
               <div class="formrow">
                 <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                   <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Date and Time" name="datetime_pick" required >
                   <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6 col-sm-6">
                 <div class="formrow">
                   <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Drop-Off</span>
                     <select class="form-control" data-live-search="true" name="dropoff" id="drop" required="required">
                       <option value="" >Select Drop-Off</option>
                       <option>New York</option>
                       <option>Los Angeles</option>
                       <option>Houston</option>
                       <option>San Diego</option>
                       <option>Chicago</option>
                       <option>California</option>
                       <option>San Jose</option>
                       <option>Atlanta</option>
                       <option>Kansas City</option>
                       <option>Chattanooga</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-sm-6">
                <div class="formrow">
                  <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Date and Time" name="datetime_off" required >
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
                 </div>
               </div>
             </div>
             <div class="formbtn">
              <input type="submit" class="btn" value="Submit Car Booking">
            </div>
          </form>
        </div>
      </div>
      @endsection