<?php
	session_start();
	if(isset($_SESSION["step"])){
		echo $_SESSION["step"];
	}
	
	// $_SESSION["step"] = md5(0);
	$_SESSION["step"] = md5(1);
	// $_SESSION["step"] = md5(2);
	// $_SESSION["step"] = md5(3);
	// $_SESSION["step"] = md5(4);
?>