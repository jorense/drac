<?php		
	switch($_SESSION["step"]){
		case md5(0):
			$step = 0;
			$form = "
				<div id='form'>
					<form action='".$_SERVER['PHP_SELF']."' method='post'>
						<div class='form-group'>
							<div class='row'>
								<div class='col-sm-7'>
									<select class='form-control custom-select' name='service_type'>
										<option value=''>Service Type</option>
										<option value='1'>Type 1</option>
										<option value='2'>Type 2</option>
										<option value='3'>Type 3</option>
									</select>
								</div>
								<div class='col-sm-5'>
									<select class='form-control custom-select' name='passenger'>
										<option value=''>Passenger(s)</option>
										<option value='1 Passengers'>1 Passenger</option>
										<option value='2 Passengers'>2 Passengers</option>
										<option value='3 Passengers'>3 Passengers</option>
										<option value='4 Passengers'>4 Passengers</option>
										<option value='5 Passengers'>5 Passengers</option>
										<option value='6 Passengers'>6 Passengers</option>
										<option value='7 Passengers'>7 Passengers</option>
										<option value='8 Passengers'>8 Passengers</option>
										<option value='9 Passengers'>9 Passengers</option>
										<option value='10 Passengers'>10 Passengers</option>
										<option value='11 Passengers'>11 Passengers</option>
										<option value='12 Passengers'>12 Passengers</option>
									</select>
								</div>
							</div>
						</div>
						<div class='form-group'>
							<div class='row'>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='Pick-up Location' name='pick_up_location'>
								</div>
								<div class='col-xs-12 col-sm-3'>
									<input type='text' id='check_in_date' class='date-picker-custom' placeholder='Pick-up Date' name='check_in_date' required readonly>
								</div>
								<div class='col-xs-12 col-sm-3'>
									<select class='form-control custom-select' name='pick_up_time'>
										<option value=''>Pick-up Time</option>
										<option value='4:00 AM'>4:00 AM</option>
										<option value='5:00 AM'>5:00 AM</option>
										<option value='6:00 AM'>6:00 AM</option>
										<option value='7:00 AM'>7:00 AM</option>
										<option value='8:00 AM'>8:00 AM</option>
										<option value='9:00 AM'>9:00 AM</option>
										<option value='10:00 AM'>10:00 AM</option>
										<option value='11:00 AM'>11:00 AM</option>
										<option value='12:00 AM'>12:00 AM</option>
										<option value='1:00 PM'>1:00 PM</option>
										<option value='2:00 PM'>2:00 PM</option>
										<option value='3:00 PM'>3:00 PM</option>
										<option value='4:00 PM'>4:00 PM</option>
										<option value='5:00 PM'>5:00 PM</option>
										<option value='6:00 PM'>6:00 PM</option>
										<option value='7:00 PM'>7:00 PM</option>
										<option value='8:00 PM'>8:00 PM</option>
										<option value='9:00 PM'>9:00 PM</option>
									</select>
								</div>
							</div>
						</div>
						<div class='form-group'>
							<div class='row'>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='Drop-off Location' name='drop_off_location'>
								</div>
								<div class='col-xs-12 col-sm-3'>
									<input type='text' id='check_out_date' class='date-picker-custom' placeholder='Drop-off date' name='check_out_date' required readonly>
								</div>
								<div class='col-xs-12 col-sm-3'>
									<select class='form-control custom-select' name='drop_off_time'>
										<option value=''>Drop-off Time</option>
										<option value='4:00 AM'>4:00 AM</option>
										<option value='5:00 AM'>5:00 AM</option>
										<option value='6:00 AM'>6:00 AM</option>
										<option value='7:00 AM'>7:00 AM</option>
										<option value='8:00 AM'>8:00 AM</option>
										<option value='9:00 AM'>9:00 AM</option>
										<option value='10:00 AM'>10:00 AM</option>
										<option value='11:00 AM'>11:00 AM</option>
										<option value='12:00 AM'>12:00 AM</option>
										<option value='1:00 PM'>1:00 PM</option>
										<option value='2:00 PM'>2:00 PM</option>
										<option value='3:00 PM'>3:00 PM</option>
										<option value='4:00 PM'>4:00 PM</option>
										<option value='5:00 PM'>5:00 PM</option>
										<option value='6:00 PM'>6:00 PM</option>
										<option value='7:00 PM'>7:00 PM</option>
										<option value='8:00 PM'>8:00 PM</option>
										<option value='9:00 PM'>9:00 PM</option>
									</select>
								</div>
							</div>
						</div>
						<div class='form-group' id='buttons'>
							<input type='hidden' name='step' value='1'>
							<input type='submit' class='btn' name='submit' value='CHOOSE YOUR RIDE'>
						</div>
					</form>
				</div>
			";
		break;
		case md5(1):
			$step = 1;
			$form = "
				<div id='form'>
					<div id='filter'>
						<form action='".$_SERVER['PHP_SELF']."' method='get'>
							<div class='row'>
								<div class='col-xs-6 col-sm-5'>
									<select class='form-control custom-select' name='id'>
										$id_list
									</select>
								</div>
								<div class='col-xs-6 col-sm-5'>
									<select class='form-control custom-select' name='type'>
										$type_list
									</select>
								</div>
								<div class='col-xs-12 col-sm-2'>
									<button type='submit' id='search'><i class='fa fa-search'></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div id='filter-result'>
					".implode($carlist)."
				</div>
				<div id='form'>
					<div id='filter'>
						<form action='".$_SERVER['PHP_SELF']."' method='post'>
							<div id='buttons'>
								<input type='hidden' name='step' value='back_0'>
								<input type='submit' class='btn' name='submit' value='BACK'>
							</div>
						</form>
					</div>
				</div>
			";
		break;
		case md5(2):
			$step = 2;
			$form = "
				<div id='form'>
					<form action='".$_SERVER['PHP_SELF']."' method='post'>
						<div class='form-group'>
							<div class='row'>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='First Name' name='firstname'>
								</div>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='Last Name' name='lastname'>
								</div>
								<div class='col-sm-4'>
									<select class='form-control custom-select' name='gender'>
										<option value=''>Gender</option>
										<option value='Male'>Male</option>
										<option value='Female'>Female</option>
									</select>
								</div>
								<div class='col-sm-4'>
									<input type='text' id='check_in_date' class='date-picker-custom' placeholder='Date of Birth' name='date_of_birth' required readonly>
								</div>
								<div class='col-sm-4'>
									<select class='form-control custom-select' name='nationality'>
										$nationality
									</select>
								</div>
								<div class='col-sm-12'>
									<input type='text' class='form-control' placeholder='Address' name='address'>
								</div>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='Contact Number' name='contact_number'>
								</div>
								<div class='col-sm-6'>
									<input type='text' class='form-control' placeholder='Email Address' name='email_address'>
								</div>
							</div>
						</div>
						<div class='form-group' id='buttons'>
							<input type='hidden' name='step' value='3'>
							<input type='submit' class='btn' name='submit' value='SUBMIT'>
						</div>
					</form>
					<form action='".$_SERVER['PHP_SELF']."' method='post'>
						<div class='form-group' id='back_btn' class='back'>
							<input type='hidden' name='step' value='back_1'>
							<input type='submit' class='btn' name='submit' value='GO BACK'>
						</div>
					</form>
				</div>
			";
		break;
		case md5(3):
			$step = 3;
			$form = "
				<div id='form'>
					<form action='".$_SERVER['PHP_SELF']."' method='post'>
						<div class='row'>
							<div class='col-sm-8'>
								<table>
									<tr>
										<td id='title'>
											Service Type:
										</td>
										<td>
											With Driver
										</td>
									</tr>
									<tr>
										<td id='title'>
											Pick-up Location:
										</td>
										<td>
											123 Salcedo St. Legaspi Village Makati City
										</td>
									</tr>
									<tr>
										<td id='title'>
											Drop-off Location:
										</td>
										<td>
											Tagaytay City
										</td>
									</tr>
									<tr>
										<td id='title'>
											Pick-up Time:
										</td>
										<td>
											March 15, 2017 1:00 PM
										</td>
									</tr>
									<tr>
										<td id='title'>
											Drop-off Time:
										</td>
										<td>
											March 15, 2017 1:00 PM
										</td>
									</tr>
									<tr>
										<td id='title'>
											Passenger(s):
										</td>
										<td>
											2
										</td>
									</tr>
									<tr>
										<td id='title'>
											Type of Car:
										</td>
										<td>
											Toyota Wigo Manual
										</td>
									</tr>
								</table>
							</div>
							<div class='col-sm-4'>
								<div id='fare'>
									<h1>TOTAL FARE:</h1>
									<h2>Php900.00</h2>
								</div>
							</div>
						</div>
						<div class='form-group' id='buttons'>
							<input type='hidden' name='step' value='4'>
							<input type='submit' class='btn' name='submit' value='RENT A CAR'>
						</div>
					</form>
				</div>
				<div id='form'>
					<form action='".$_SERVER['PHP_SELF']."' method='post'>
						<div class='form-group' id='back_btn' class='back'>
							<input type='hidden' name='step' value='back_1'>
							<input type='submit' class='btn' name='submit' value='GO BACK'>
						</div>
					</form>
				</div>
			";
		break;
		case md5(4):
			$step = 4;
			$form = "
				<div id='form'>
					<div id='success'>
						<h1>Thank You! Our Customer Representative will contact you shortly.</h1>
						<a href='index.php'>GO BACK TO HOMEPAGE</a>
					</div>
				</div>
			";
			session_destroy();
		break;
	}
	
	switch($_SESSION["reservation"]){
		case md5(0):
			$reservation = "
				<form action='".$_SERVER['PHP_SELF']."' method='post'>
					<div id='reservation'>
						<div id='field'>
							<div class='form-group'>
								<input type='text' class='form-control' placeholder='Email Address' name='email_address'>
							</div>
						</div>
						<div id='field'>
							<div class='form-group'>
								<input type='text' class='form-control' placeholder='First Name' name='firstname'>
							</div>
						</div>
						<div id='field'>
							<div class='form-group'>
								<input type='text' class='form-control' placeholder='Last Name' name='firstname'>
							</div>
						</div>
						<div id='field'>
							<div class='form-group'>
								<select class='form-control custom-select' name='gender'>
									<option value=''>Nearest Branch</option>
									$branch
								</select>
							</div>
						</div>
						<div id='field'>
							<div class='form-group'>
								<input type='text' id='check_in_date' class='date-picker-custom' placeholder='Reservation Date' name='date_of_birth' required readonly>
							</div>
						</div>
						<!--
							<div id='field'>
								<div class='form-group'>
									<select class='form-control custom-select' name='passenger'>
										<option value=''>Passenger(s)</option>
										<option value='1 Passengers'>1 Passenger</option>
										<option value='2 Passengers'>2 Passengers</option>
										<option value='3 Passengers'>3 Passengers</option>
										<option value='4 Passengers'>4 Passengers</option>
										<option value='5 Passengers'>5 Passengers</option>
										<option value='6 Passengers'>6 Passengers</option>
										<option value='7 Passengers'>7 Passengers</option>
										<option value='8 Passengers'>8 Passengers</option>
										<option value='9 Passengers'>9 Passengers</option>
										<option value='10 Passengers'>10 Passengers</option>
										<option value='11 Passengers'>11 Passengers</option>
										<option value='12 Passengers'>12 Passengers</option>
									</select>
								</div>
							</div>
						-->
						<div id='field'>
							<div class='form-group'>
								<select class='form-control custom-select' name='gender'>
									<option value='0'>Type of Car</option>
									<option value='SUV'>SUV</option>
									<option value='Sedan'>Sedan</option>
									<option value='Van'>Van</option>
								</select>
							</div>
						</div>
						<div id='field-submit'>
							<div class='form-group'>
								<input type='hidden' value='1' name='reservation'>
								<input type='submit' class='form-control reservation-btn' placeholder='First Name' value='MAKE RESERVATION'>
							</div>
						</div>
					</div>
				</form>
			";
		break;
		case md5(1):
			$reservation = "
				<div id='reservation'>
					<div id='success'>
						<h1>Thank You! Our Customer Representative will contact you shortly.</h1>
					</div>
				</div>
			";
			$_SESSION["reservation"] = md5(0);
		break;
	}
	$car_listing = "
		<div id='form'>
			<div id='filter'>
				<form action='".$_SERVER['PHP_SELF']."' method='get'>
					<div class='row'>
						<div class='col-xs-6 col-sm-5'>
							<select class='form-control custom-select' name='id'>
								$id_list
							</select>
						</div>
						<div class='col-xs-6 col-sm-5'>
							<select class='form-control custom-select' name='type'>
								$type_list
							</select>
						</div>
						<div class='col-xs-12 col-sm-2'>
							<button type='submit' id='search'><i class='fa fa-search'></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id='filter-result'>
			".implode($carlist)."
		</div>
		<div id='form'>
			<div id='filter'>
				<form action='".$_SERVER['PHP_SELF']."' method='post'>
					<div id='buttons'>
						<input type='hidden' name='step' value='back_0'>
						<input type='submit' class='btn' name='submit' value='BACK'>
					</div>
				</form>
			</div>
		</div>
	";
?>