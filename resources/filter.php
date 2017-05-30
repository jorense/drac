<?php
	// ID list starts here

	if(isset($_GET["id"])){
		$id_list ="";
		
		for($c=0; $c<=4; $c++){
			if($_GET["id"] == md5($c)){
				$display_id = "disabled selected";
			}
			else{
				$display_id = "";
			}
			switch (md5($c)){
				case md5(0):
					$id_list .="<option value='".md5(0)."' ".$display_id.">Type of Car</option>";
				break;
				case md5(1):
					$id_list .="<option value='".md5(1)."' ".$display_id.">SUV</option>";
				break;
				case md5(2):
					$id_list .="<option value='".md5(2)."' ".$display_id.">Sedan</option>";
				break;
				case md5(3):
					$id_list .="<option value='".md5(3)."' ".$display_id.">Van</option>";
				break;
			}
		}
	}
	else {
		$id_list ="
			<option value='".md5(0)."'>Type of Car</option>
			<option value='".md5(1)."'>SUV</option>
			<option value='".md5(2)."'>Sedan</option>
			<option value='".md5(3)."'>Van</option>
		";
	}
	
	// ID list ends here
	
	// type list starts here
	
	if(isset($_GET["type"])){
		$type_list ="";
													
		for($d=0; $d<=3; $d++){
			if($_GET["type"] == md5($d)){
				$display_type = "disabled selected";
			}
			else{
				$display_type = "";
			}
			switch (md5($d)){
				case md5(0):
					$type_list .="<option value='".md5(0)."' ".$display_type.">Manual / Automatic</option>";
				break;
				case md5(1):
					$type_list .="<option value='".md5(1)."' ".$display_type.">Manual Transmission</option>";
				break;
				case md5(2):
					$type_list .="<option value='".md5(2)."' ".$display_type.">Automatic Transmission</option>";
				break;
			}
		}
	}
	else {
		$type_list ="
			<option value='".md5(0)."'>Manual / Automatic</option>
			<option value='".md5(1)."'>Manual Transmission</option>
			<option value='".md5(2)."'>Automatic Transmission</option>
		";
	}

	// type list ends here
	
	// Car List starts here
		// Default List
		if(!isset($_GET["id"]) || !isset($_GET["type"])){
			$carlist = Array(
				$car110,
				$car220,
				$car322,
				$car411,
				$car511,
				$car612,
				$car730
			);
		}
		else{
			// Type of Car starts here
				// Default List
				if($_GET["id"] == md5(0) && $_GET["type"] == md5(0)){
					$carlist = Array(
						$car110,
						$car220,
						$car322,
						$car411,
						$car511,
						$car612,
						$car730
					);
				}
				// SUV w/ M/A Transmission
				elseif($_GET["id"] == md5(1) && $_GET["type"] == md5(0)){
					$carlist = Array(
						$car110,
						$car411,
						$car511,
						$car612
					);
				}
				// Sedan w/ M/A Transmission
				elseif($_GET["id"] == md5(2) && $_GET["type"] == md5(0)){
					$carlist = Array(
						$car220,
						$car322
					);
				}
				// Van w/ M/A Transmission
				elseif($_GET["id"] == md5(3) && $_GET["type"] == md5(0)){
					$carlist = Array(
						$car730
					);
				}
			// Type of Car ends here
			
			// Manual Transmission starts here
				// All Cars w/ Manual Transmission
				elseif($_GET["id"] == md5(0) && $_GET["type"] == md5(1)){
					$carlist = Array(
						$car110,
						$car220,
						$car411,
						$car730
					);
				}
				// SUV w/ Manual Transmission
				elseif($_GET["id"] == md5(1) && $_GET["type"] == md5(1)){
					$carlist = Array(
						$car110,
						$car411
					);
				}
				// Sedan w/ Manual Transmission
				elseif($_GET["id"] == md5(2) && $_GET["type"] == md5(1)){
					$carlist = Array(
						$car220
					);
				}
				// Van w/ Manual Transmission
				elseif($_GET["id"] == md5(3) && $_GET["type"] == md5(1)){
					$carlist = Array(
						$car730
					);
				}
			// Manual Transmission ends here
			
			// Automatic Transmission starts here
				// All Cars w/ Automatic Transmission
				elseif($_GET["id"] == md5(0) && $_GET["type"] == md5(2)){
					$carlist = Array(
						$car110,
						$car220,
						$car322,
						$car612,
						$car730,
						$car511
					);
				}
				// SUV w/ Automatic Transmission
				elseif($_GET["id"] == md5(1) && $_GET["type"] == md5(2)){
					$carlist = Array(
						$car110,
						$car612,
						$car511
					);
				}
				// Sedan w/ Automatic Transmission
				elseif($_GET["id"] == md5(2) && $_GET["type"] == md5(2)){
					$carlist = Array(
						$car220,
						$car322
					);
				}
				// Van w/ Automatic Transmission
				elseif($_GET["id"] == md5(3) && $_GET["type"] == md5(2)){
					$carlist = Array(

					);
				}
			// Automatic Transmission ends here
		}
	
	// Car List ends here

?>