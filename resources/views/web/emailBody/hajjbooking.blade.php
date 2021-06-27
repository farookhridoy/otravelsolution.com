<!DOCTYPE html>
<html>
	<head>
		<title>Hajj Booking</title>
		<style>
			.allheader-form{
				max-width:1200px;
				margin:auto;
				text-align: center;
			}
			.allheader-form img{
				width: 100%;
				height: 160px;
				text-align: center;
			}
			.content{
				max-width:900px;
				position:relative;
				z-index:1;
				margin:auto;
			}
			.headtitle{
				width: 50%;
				margin-bottom: 20px;
				border-bottom: 2px solid #000;
			}
			.headtitle2{
				border-bottom: 1px solid #000;
				width:180px;
				margin-left:20px;
			}
			.table3{
				width:100%;
				margin-bottom:5px;
			}
			.table3 tr td{
				padding: 5px;
				border-bottom: 1px solid #000;
			}
			.table2{
				width:100%;
				margin-bottom:5px;
			}
			.table2 tr td{
				padding: 5px;
				border-bottom: 1px solid #000;
			}
			.para2{
				margin-left:20px;
				color:#000;
			}
			.footer{
				border-top:2px solid #000;
				padding:5px 5px;
				text-align:center;
				margin:30px 30px;
			}
			@media (max-width: 780px) {
				.wid100px {
					display: block;
					width: 100% !important;
					margin: 10px 0;		
				}
			}
		</style>
	</head>
	<body>
		<div class="content">
			<header class="allheader-form">
				<img src="{{URL::to('')}}/logo/umrahBookingForm.jpg" alt="">
			</header>
			<center>
				<h1 class="headtitle wid100px">Hajj Booking Form</h1>
			</center>
			<!--<table class="table3" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Ref/Care of: &nbsp;</span><span> {{$data['ref_care_of']}}</span></td>
					<td class="wid100px"><span>Ref/Care of Telephone:  &nbsp;</span><span>{{$data['ref_telephone']}}</span></td>
					<td class="wid100px"><span>Date: &nbsp;</span><span>{{$data['date']}}</span></td>
				</tr>
			</table>-->
			<h2 class="headtitle2 wid100px">Personal Details:</h2>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Hajji's Name: &nbsp;</span><span>{{$data['name']}} </span></td>
					<td class="wid100px"><span>Date of Birth: &nbsp;</span><span>{{$data['birthday']}}</span></td>
					<td class="wid100px"><span>Booking Date: &nbsp;</span><span>{{$data['updated_at']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Place of Birth: &nbsp;</span><span>{{$data['place_of_birth']}}</span></td>					
					<td class="wid100px"><span>Mother's Name: &nbsp;</span><span>{{$data['mothers_name']}}</span></td>
				</tr>
			</table>
			<table class="table3" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Profession: &nbsp;</span><span>{{$data['profession']}}</span></td><td class="wid100px"><span>Sex: &nbsp;<span></span>{{$data['gender']}}</span></td>
					<td class="wid100px"><span>Marital Status: &nbsp;</span><span>{{$data['maritail_status']}}</span></td>
				</tr>
			</table>
			<h2 class="headtitle2 wid100px">UK Address: </h2>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>{{$data['uk_address']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Post Code: &nbsp;</span><span>{{$data['post_code']}}</span></td>					
					<td class="wid100px"><span>Email: &nbsp;</span><span>{{$data['email']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Home Telephone: &nbsp;</span>{{$data['home_telephone']}}<span> </span></td>					
					<td class="wid100px"><span>Mobile: &nbsp;</span><span>{{$data['mobile']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Village in BD: &nbsp;</span><span>{{$data['village_in_bd']}}</span></td>					
					<td class="wid100px"><span>Up/Union: &nbsp;</span><span>{{$data['union']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>PS/Thana: &nbsp;</span><span>{{$data['thana']}}</span></td>					
					<td class="wid100px"><span>District: &nbsp;</span><span>{{$data['district']}}</span></td>
				</tr>
			</table>
			<h2 class="headtitle2 wid100px" style="width:405px;">Mahram Relation (Female only): </h2>
			<table class="table3" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Next of kin: Name: &nbsp;</span><span>{{$data['mahram_name']}}</span></td>					
					<td class="wid100px"><span>Telephone: &nbsp;</span><span>{{$data['mahram_phone']}}</span></td>
					<td class="wid100px"><span>Relationship: &nbsp;</span><span>{{$data['mahram_relation']}}</span></td>
				</tr>
			</table>
			<h2 class="headtitle2 wid100px" >Passport Details:</h2>
			<table class="table3" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Passport Number: &nbsp;</span><span> {{$data['passport_number']}}</span></td>					
					<td class="wid100px"><span>Type of Passport: &nbsp;</span><span>{{$data['passport_type']}}</span></td>
					<td class="wid100px"><span>Date of issue: &nbsp;</span><span>{{$data['issue_date']}}</span></td>
				</tr>
			</table>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Date of expiry: &nbsp;</span><span>{{$data['expiry_date']}}</span></td>					
					<td class="wid100px"><span>Place of issue/ Authority: &nbsp;</span><span>{{$data['authority']}}</span></td>
				</tr>
			</table>


		
			<!--<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Departure Date: &nbsp;</span><span> {{$data['departure_date']}}</span></td>					
					<td class="wid100px"><span>Return Date: &nbsp;</span><span>{{$data['arrival_date']}}</span></td>
					
				</tr>
			</table>-->
		<!--	<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Preferred Airline (if applicable): &nbsp;</span><span>{{$data['airline']}}</span></td>
				</tr>
			</table>-->

			<h2 class="headtitle2 wid100px" style="width:550px;">Requested Flights (please tick your preferred option):</h2>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span>Flight Details: &nbsp;</span><span>{{$data->relReqFlightRelation->flight_title}}</span></td>					
					
				</tr>
			</table>
			<h2 class="headtitle2 wid100px" style="width:658px;">Room Sharing Requirements (please tick your preferred option)</h2>
			<table class="table2" cellspacing="20">
				<tr>
					<td class="wid100px"><span> &nbsp;</span><span>{{$data->room_type}}</span></td>					
					
				</tr>
			</table>
			<h2 class="headtitle2 wid100px" style="width:220px;">Other Requirements:</h2>
			<p class="para2">
				1) Photocopy of passport with 6 months validity from the date of travel.
			</p>
			<p class="para2">
				2) Photocopy of proof of address.
			</p>
			<p class="para2">
				3) 4 passport sized photographs. Photocopy proof of mahram where necessary
			</p>
			<div class="footer">
				<p>
					Al-Kabir Travel & Tours Ltd a limited company registered in England and Wales with registered number 06635098. Registered
					Office 18 New Road, London, E1 2AX
				</p>
			</div>
		</div>

	</body>
</html>