<?php
	if($step == 4){

	}
	else{
		$navigation = "
			<div id='steps'>
				<div id='desktop'>";
				for($a=0; $a<=4; $a++){
					if($step == $a){
						$tab_active = "active";
					}
					else{
						$tab_active = " ";
					}
					switch ($a){
						case 0:
							$navigation .="<h1 id='".$tab_active."'>1 SELECT SERVICE TYPE</h1>";
						break;
						case 1:
							$navigation .="<h1 id='".$tab_active."'>2 CHOOSE YOUR RIDE</h1>";
						break;
						case 2:
							$navigation .="<h1 id='".$tab_active."'>3 YOUR INFORMAITON</h1>";
						break;
						case 3:
							$navigation .="<h1 id='".$tab_active."'>4 CONFIRMATION</h1>";
						break;
					}
				}
		$navigation .="
				</div>
				<div id='mobile'>
			";
				switch ($step){
					case 0:
						$navigation .="<h1 id='active'>1 SELECT SERVICE TYPE</h1>";
					break;
					case 1:
						$navigation .="<h1 id='active'>2 CHOOSE YOUR RIDE</h1>";
					break;
					case 2:
						$navigation .="<h1 id='active'>3 YOUR INFORMAITON</h1>";
					break;
					case 3:
						$navigation .="<h1 id='active'>4 CONFIRMATION</h1>";
					break;
				}
			$navigation .="	
					<div id='pagination'>
			";
					for($b=0; $b<=4; $b++){
						if($step == $b){
							$page_active = "active";
						}
						else{
							$page_active = " ";
						}
						switch ($b){
							case 0:
								$navigation .="<hr id='".$page_active."'></hr>";
							break;
							case 1:
								$navigation .="<hr id='".$page_active."'></hr>";
							break;
							case 2:
								$navigation .="<hr id='".$page_active."'></hr>";
							break;
							case 3:
								$navigation .="<hr id='".$page_active."'></hr>";
							break;
						}
					}
			$navigation .="	
					</div>
				</div>
			</div>";
	}
?>
