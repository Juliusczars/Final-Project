
<?php
   include('session.php');

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home-ICT KNH</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	
	<script type='text/javascript' src='js/mobile.js'></script>
	<script src="js/lumino.glyphs.js"></script>
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
	</div>  <div id="head-status" ><P style="">ICT HELPDESK SYSTEM</P></div>
	<div id="header">
		
		<ul id="navigation">
			<li class="current">
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="contact.php">Ordering</a>
			</li>
			<li>
				<a href="procurement.php">Procurement</a>
			</li>
			<li>
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
	<div id="bodi">
		<h2>Home</h2>
		
		<div style="margin-left:0;"><img src="images/admin-knh.png">


		</div>
      
       <!--<div id="nm"><h2 >Welcome to KNH ICT Helpdesk System</h2></div>-->
       <div style="max-width: 880px;float:left;">
         <div style="max-width: 290px;float:left;"><h3 style="margin-left:100px;">Our Motto:</h3><br><p style="margin-left:100px;color:#000;">We listen,, We Care</p></div>
         <div style="max-width: 590px;float:left;"><h3 style="margin-left:285px;">Our Mission:</h3><p style="margin-left:70px; color:#000;" >     To optimize patient experience through innovative, evidence based specialized healthcare, facilitate training and research; and participate in national health policy formulation</p></div>
         
       </div>
       <div style="max-width: 880px;float:left;margin-left:100px;"><p style="color:#000;">  Welcome to Kenyatta National Hospital ICT helpdesk system. Tehnology
       	has become so vital for organizations to ignore in their day to day business activities. It has introduced benefits to operations leaving firms with no 
       	option but to incorporate it and so has Kenyatta National Hospital. The ICT helpdesk system is aimed at monitoring and management of all ativities that take place in ICT department at KNH. <!-- This includes equipment acquisition
       from ordering, their procurement and dispatch of te same for use in the corportion. Keeping track of the same as to their condition and distribution
       in their organization is also captured. User support and network support is another area the systems covers.-->.It is built to work in supplement with the KNH ERP system used to manage the 
       hospitals activities. It narrows down to ICT department to  ensure security of information entered and
        generation of quality, accurate and reliable reports to assist in decision making to the managament. 
 


       </p></div>

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
			<a href="http://knh.or.ke/" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
<script src="js/moment.min.js"></script>
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
});


     </script>



</body>
</html>