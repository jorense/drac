<?php
	// $car000
	// $car'car_id','car_type','transmission'
	// 1 = SUV
	// 2 = Sedan
	// 3 = Van
	
	// 0 = BOTH
	// 1 = MANUAL
	// 2 = AUTOMATIC

	// Car Format
	
		// <div id='car-container'>
			// <img src='./car-image/'>
			// <h1> </h1>
			// <form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'>
				// <input type='hidden' value=' ' name='car_name'>
				// <input type='hidden' value=' ' name='price'>
				// <input type='hidden' value='Manual' name='transmission'>
				// <input type='hidden' value='1' name='step4'>
				// <input type='hidden' name='step' value='2'>
				// <button type='submit' id='car'>
					// <h2>MANUAL</h2>
					// <h3>Php /day</h3>
				// </button>
			// </form>
			// <form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'>
				// <input type='hidden' value=' ' name='car_name'>
				// <input type='hidden' value=' ' name='price'>
				// <input type='hidden' value='automatic' name='transmission'>
				// <input type='hidden' value='1' name='step4'>
				// <input type='hidden' name='step' value='2'>
				// <button type='submit' id='car'>
					// <h2>AUTOMATIC</h2>
					// <h3>Php /day</h3>
				// </button>
			// </form>
		// </div>

	
	
	$car110 = "<div id='car-container'><img src='./car-image/toyota_wigo.jpg'><h1>TOYOTA WIGO</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Wigo' name='car_name'><input type='hidden' value='Php 999' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 999/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Wigo' name='car_name'><input type='hidden' value='Php 1,199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 1,199/day</h3></button></form></div>";
	$car220 = "<div id='car-container'><img src='./car-image/toyota_vios.jpg'><h1>TOYOTA VIOS</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Vios' name='car_name'><input type='hidden' value='Php 1,899' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 1,899/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Vios' name='car_name'><input type='hidden' value='Php 2,199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 2,199/day</h3></button></form></div>";
	$car322 = "<div id='car-container'><img src='./car-image/toyota_altis.jpg'><h1>TOYOTA ALTIS</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Altis' name='car_name'><input type='hidden' value='Php 2,399' name='price'><input type='hidden' value='Automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 2,399/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='Toyota Wigo' name='car_name'><input type='hidden' value='Php 999' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 999/day</h3></button></form></div>";
	$car411 = "<div id='car-container'><img src='./car-image/toyota_innova.jpg'><h1>TOYOTA INNOVA</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Innova' name='car_name'><input type='hidden' value='Php 2,599' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 2,599/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='Toyota Wigo' name='car_name'><input type='hidden' value='Php 1,199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 1,199/day</h3></button></form></div>";
	$car511 = "<div id='car-container'><img src='./car-image/toyoya_fortuner.jpg'><h1>TOYOTA FORTUNER</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Fortuner' name='car_name'><input type='hidden' value='Php 4,499' name='price'><input type='hidden' value='Automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 4,499/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='Toyota Fortuner' name='car_name'><input type='hidden' value='Php 4,499' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 2,599/day</h3></button></form></div>";
	$car612 = "<div id='car-container'><img src='./car-image/toyota_camry.jpg'><h1>TOYOTA CAMRY</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Toyota Camry' name='car_name'><input type='hidden' value='Php 4,499' name='price'><input type='hidden' value='Automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php 4,499/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='Toyota Fortuner' name='car_name'><input type='hidden' value='Php 4,499' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 2,599/day</h3></button></form></div>";
	$car730 = "<div id='car-container'><img src='./car-image/nissan_urvan.jpg'><h1>NISSAN URVAN</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='Nissan Urvan' name='car_name'><input type='hidden' value='Php 3,899' name='price'><input type='hidden' value='Automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>w/ DRIVER</h2><h3>Php 3,899/10 hours</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='Toyota Camry' name='car_name'><input type='hidden' value='Php 3,899' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php 3,899/10 hours</h3></button></form></div>";
?>
