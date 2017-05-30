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
	
	$car110 = "<div id='car-container'><img src='./car-image/toyota_wigo.jpg'><h1>TOYOTA WIGO</h1><div id='car-button'><div id='car'><h2>MANUAL</h2><h3>Php 999/day</h3></div></div><div id='car-button'><div id='car'><h2>AUTOMATIC</h2><h3>Php 1,199/day</h3></div></div></div>";
	$car220 = "<div id='car-container'><img src='./car-image/toyota_vios.jpg'><h1>TOYOTA VIOS</h1><div id='car-button'><div id='car'><h2>MANUAL</h2><h3>Php 1,899/day</h3></div></div><div id='car-button'><div id='car'><h2>AUTOMATIC</h2><h3>Php 2,199/day</h3></div></div></div>";
	$car322 = "<div id='car-container'><img src='./car-image/toyota_altis.jpg'><h1>TOYOTA ALTIS</h1><div id='car-button'><div id='car'><h2>AUTOMATIC</h2><h3>Php 2,399/day</h3></div></div></div>";
	$car411 = "<div id='car-container'><img src='./car-image/toyota_innova.jpg'><h1>TOYOTA INNOVA</h1><div id='car-button'><div id='car'><h2>MANUAL</h2><h3>Php 2,599/day</h3></div></div></div>";
	$car511 = "<div id='car-container'><img src='./car-image/toyoya_fortuner.jpg'><h1>TOYOTA FORTUNER</h1><div id='car-button'><div id='car'><h2>AUTOMATIC</h2><h3>Php 4,499/day</h3></div></div></div>";
	$car612 = "<div id='car-container'><img src='./car-image/toyota_camry.jpg'><h1>TOYOTA CAMRY</h1><div id='car-button'><div id='car'><h2>AUTOMATIC</h2><h3>Php 4,499/day</h3></div></div></div>";
	$car730 = "<div id='car-container'><img src='./car-image/nissan_urvan.jpg'><h1>NISSAN URVAN</h1><div id='car-button'><div id='car'><h2>w/ DRIVER</h2><h3>Php 3,899/10 hours</h3></div></div></div>";
?>
