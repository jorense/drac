<?php
	// steps validation starts here
				
		if(!isset($_SESSION["step"])){
			$_SESSION["step"] = md5(0);
		}
		
		if(isset($_POST["step"])){
			switch($_SESSION["step"]){
				case md5(0):
					$_SESSION["step"] = md5(1);
					$_SESSION["validate"] = 0;
					header("location:booking.php");
					// if(isset($_SESSION["validate"]) && $_SESSION["validate"] == 1){
						// $_SESSION["step"] = md5(1);
						// $_SESSION["validate"] = 0;
						// header("location:booking.php");
					// }
					// else {
						// $_SESSION["validate"] = 1;
						// header("location:booking.php");
					// }
				break;
				case md5(1):
					if($_POST["step"] == "back_0"){
						$_SESSION["step"] = md5(0);
					}
					else {
						$_SESSION["step"] = md5(2);
						// $_SESSION["validate"] = 0;
					}
					// if($_POST["step"] == "back_0"){
						// $_SESSION["step"] = md5(0);
						// header("location:booking.php");
					// }
					// else {
						// if(isset($_SESSION["validate"]) && $_SESSION["validate"] == 1){
							// $_SESSION["step"] = md5(2);
							// $_SESSION["validate"] = 0;
							// header("location:booking.php");
						// }
						// else {
							// $_SESSION["validate"] = 1;
							// header("location:booking.php");
						// }
					// }
				break;
				case md5(2):
					$_SESSION["step"] = md5(3);
					$_SESSION["validate"] = 0;
					// header("location:booking.php");
					if($_POST["step"] == "back_1"){
						$_SESSION["step"] = md5(1);
					}
					else {
						$_SESSION["step"] = md5(3);
						// $_SESSION["validate"] = 0;
					}
					// if($_POST["step"] == "back_1"){
						// $_SESSION["step"] = md5(1);
						// header("location:booking.php");
					// }
					// else {
						// if(isset($_SESSION["validate"]) && $_SESSION["validate"] == 1){
							// $_SESSION["step"] = md5(3);
							// $_SESSION["validate"] = 0;
							// header("location:booking.php");
						// }
						// else {
							// $_SESSION["validate"] = 1;
							// header("location:booking.php");
						// }
					// }
				break;
				case md5(3):
					// $_SESSION["step"] = md5(4);
					// $_SESSION["validate"] = 0;
					// header("location:booking.php");
					if($_POST["step"] == "back_2"){
						$_SESSION["step"] = md5(0);
					}
					else {
						$_SESSION["step"] = md5(2);
						// $_SESSION["validate"] = 0;
					}
					// if($_POST["step"] == "back_2"){
						// $_SESSION["step"] = md5(2);
						// header("location:booking.php");
					// }
					// else {
						// if(isset($_SESSION["validate"]) && $_SESSION["validate"] == 1){
							// $_SESSION["step"] = md5(4);
							// $_SESSION["validate"] = 0;
							// header("location:booking.php");
						// }
						// else {
							// $_SESSION["validate"] = 1;
							// header("location:booking.php");
						// }
					// }
				break;
				case md5(4):
					
				break;
			}
		}
		
	// steps validation ends here
	
	// reservation validation starts here
	
		if(!isset($_SESSION["reservation"])){
			$_SESSION["reservation"] = md5(0);
		}

		if(isset($_POST["reservation"])){
			if($_POST["reservation"] == 1){
				$_SESSION["reservation"] = md5(1);
				
			}
		}
	
	// reservation validation ends here
?>