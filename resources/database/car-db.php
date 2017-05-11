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
			// <img src=' '>
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

	
	
	$car110 = "<div id='car-container'><img src='.\car-image\car001.jpg'><h1>TOYOTA WIGO</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA WIGO' name='car_name'><input type='hidden' value='999' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php999/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA WIGO' name='car_name'><input type='hidden' value='1999' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php1,999/day</h3></button></form></div>	";
	$car220 = "<div id='car-container'><img src='.\car-image\car002.jpg'><h1>TOYOTA VIOS</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA VIOS' name='car_name'><input type='hidden' value='1899' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php1,899/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA VIOS' name='car_name'><input type='hidden' value='2199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php2,199/day</h3></button></form></div>";
	$car331 = "<div id='car-container'><img src='.\car-image\car003.jpg'><h1>TOYOTA ALTIS</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA ALTIS' name='car_name'><input type='hidden' value='2399' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php2,399/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='TOYOTA ALTIS' name='car_name'><input type='hidden' value='2199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php2,199/day</h3></button></form></div>";
	$car431 = "<div id='car-container'><img src='.\car-image\car004.jpg'><h1>TOYOTA INNOVA</h1><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post'><input type='hidden' value='TOYOTA INNOVA' name='car_name'><input type='hidden' value='2599' name='price'><input type='hidden' value='Manual' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>MANUAL</h2><h3>Php2,599/day</h3></button></form><form id='car-button' action='".$_SERVER['PHP_SELF']."' method='post' style='visibility: hidden;'><input type='hidden' value='TOYOTA VIOS' name='car_name'><input type='hidden' value='2199' name='price'><input type='hidden' value='automatic' name='transmission'><input type='hidden' value='1' name='step4'><input type='hidden' name='step' value='2'><button type='submit' id='car'><h2>AUTOMATIC</h2><h3>Php2,199/day</h3></button></form></div>";
?>
