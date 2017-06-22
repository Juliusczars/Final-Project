<?php
include('session.php');
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ordering - ICT KNH</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
	<script src="js/moment.min.js"></script>

</head>
<body>
	<div id="heade">
       <span style="padding: 30px 0;"><img src="images/logo.png"></span>
       <label style="float:right"><a href="logout.php" >|Logout</a></label>
       <label style="float:right"><a href="Profile.php" >|Profile</a></label>
       <label style="float:right"><span style="color:#000;">Welcome, <?php echo $login_session; ?> </span></label><br>
       <div style="float:right;"> <div class='time-frame'>
    <div id='date-part'></div>
    <div id='time-part'></div>
</div> </div>
	</div>
	
	 <div id="head-status" ><P style="">ICT HELPDESK SYSTEM</P></div>
	<div id="header">
		<ul id="navigation">
			<li>
				<a href="home.php">Home</a>
			</li>
			 <li class="current">
            <a href="contact.php">Ordering</a>
         </li>
			<li>
				<a href="procurement.php">Procurement</a>
			</li>
			<li >
				<a href="dispatch.php">Dispatch</a>
			</li>
			<li>
				<a href="#">Support</a>
				<ul>
					<li>
						<a href="support.php">Helpdesk</a>
					</li>
					
					<li>
						<a href="workshop.php">Workshop</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="dashboard.php">Reports</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Ordering</h2> <a href="orderlist.php" style="float:right" class="btn btn-primary">List orders</a>
		<div id="contact">
		<form method="post" action="order.php">
			<h3>Ordering details</h3> 
			<label for="name">
				<span>Device Description</span>
				<input type="text" id="name" name="desc" required>
			</label>
			<label for="email">
				<span>Quantity</span>
				<input type="text" id="email" name="quo" required>
			</label>
			<label for="subject">
				<span>Date</span>
				<input type="text" name="date" id="date" readonly="true" required>
			</label>
			<label for="message">
				<span>Reason for order</span>
				<textarea name="message" id="message" cols="30" rows="5" required></textarea>
			</label>
			<input type="submit" id="send" value="Submit">
		</form>
		</div>
	</div>
	<div id="footer">
		<div>
			
			<p>
				&copy; 2017 Kenyatta National Hospital . All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https:://www.facebook.com/Kenyatta-National-Hospital-222808627792716/" id="facebook" target="_blank">Facebook</a>
			<a href="https:://twitter.com/knh_hospital?lang=en" id="twitter" target="_blank">Twitter</a>
			<a href="https://knh.or.ke/" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
    <script src="js/moment.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <link href="css.jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

     <script type="text/javascript">

     $(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                            + momentNow.format('dddd')
                             .substring(0,3).toLowerCase());
        $('#time-part').html(momentNow.format('A hh:mm:ss'));
    }, 100);
    
    $('#stop-interval').on('click', function() {
        clearInterval(interval);
    });


  
        var dateobj = new Date(); //Get today's date
var today = new Date(dateobj.getFullYear(),dateobj.getMonth(),dateobj.getDate() );
var lastDate = new Date(dateobj.getFullYear(), dateobj.getMonth() + 1, 0);  //To get the last date of today's month

$("#date").datepicker({
    startDate: today,
    todayBtn: "linked",
   keyboardNavigation: false,
   forceParse: false,
   calendarWeeks: true,
   autoclose: true,
   format: 'yyyy-mm-dd'


});


});


     </script>
</body>
</html>