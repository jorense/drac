<?php
session_start();
include "module.inc";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta name="author" content="AdSpark Inc.">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700|Roboto:300,400,500,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="http://getbootstrap.com/dist/js/bootstrap.js">
		</script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
		
		<link rel="stylesheet" href="form.css">
	</head>
	<body>
		<div id="form-container">
        <?php
			echo "$navigation";
			?>
			<?php
			echo "$form";
			?>
		</div>
		<script src="form.js"></script>
    </div>
    <!--body content ends here-->
</div>
<div class="full-wrapper">
    <div class="footer-home footer-index">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-item-one"> SMS Inquiry: 0917-869-84-56 | 0917-597-8744</p>
                </div>
                <div class="col-md-6">
                    <p class="footer-item-two"> 24/7 Road-Side Assistance Hotline Number: (02) 822-0679 | (02) 400-2863 | (02) 821 -1081</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="form.js"></script>


</body>
</html>
