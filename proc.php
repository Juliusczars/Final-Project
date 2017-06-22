<?php
include('session.php');

$product=$_POST['product'];
$name=$_POST['name'];
$date=$_POST['date'];
$desc=$_POST['desc'];
$quo=$_POST['quo'];
$odd=mysqli_real_escape_string($db, $_POST['odd']);
$quo1=intval($quo);

$curr_quo="SELECT Quantity from product where P_id='$product'";
$reslt=mysqli_query($db, $curr_quo);
//$value=intval($quo)+ intval(mysqli_fetch_object($reslt));

$sql="UPDATE product SET Quantity=Quantity+$quo  WHERE P_id='$product'";
$q="UPDATE ordering set Procurement='executed' WHERE Order_Id='$odd'";
$act="INSERT into activity values(NULL, '$product', '$odd' ,'$name', '$desc', '$quo', '$date', '$login_session' )";
$check="SELECT * from ordering where Status='Approved' AND Order_Id='$odd'";
$q2=mysqli_query($db, $check);
if(empty($date)){$message="Failed.Please select a date!!";}

elseif(mysqli_num_rows($q2)==0){
 $message="Product order was not approved or pends aprroval! Confirm order number";
}
else{
if(is_numeric($quo)&& is_numeric($odd)&& $quo>0 && strlen($quo)<4){ 
	$result=mysqli_query($db, $act) ;
if($result){
	mysqli_query($db, $sql);
	mysqli_query($db, $q);
	$message="Product added successfully";

}else{
$message="Procurement failed!The order is filled already processed!";
}
  } else
    {
    	$message="Data entered for Quantity or order# is not numeric or is too large";
    }
}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Procurement-ICT KNH</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
	<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
	
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
			 <li>
            <a href="contact.php">Ordering</a>
         </li>
			<li class="current">
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
	<div id="body">
		<h2>Procurement</h2> <div style="height:20px;width:"><a href="proclist.php" style="float:right" class="btn btn-primary">List procurements</a> </div>
		 
		  <p>The ICT department as part of the organization is required to enter details of equipments procured. The form is to be filled with details of Items procured as required.
		  </p>
		  <div></div>
		  <div id="Proc-left">
		   <form method="post"  action="proc.php">
		    <h3>Items details</h3>
		     <label for="details">
				<span>Product ID</span>
				<input type="radio" name="product" value="1" checked> 1:Processing Unit(CPU)<br>
                <input type="radio" name="product" value="2"> 2:Monitor<br>
                <input type="radio" name="product" value="3"> 3:Printer<br>
                <input type="radio" name="product" value="4"> 4:Computer accessories<br>
                <input type="radio" name="product" value="5"> 5:Switch/ Wireless AP<br>
                <input type="radio" name="product" value="6"> 6:Router<br>
                <input type="radio" name="product" value="7"> 7:Network cables<br>
                <input type="radio" name="product" value="8"> 8:Cabinets<br>
                <input type="radio" name="product" value="9"> 9:UPS<br>
                <input type="radio" name="product" value="10"> 10:Other Network Accessories<br>
                <input type="radio" name="product" value="11"> 11:Printer Accessories<br>
                
                 
			</label>

		   
		 </div> 
		 <div id="Proc-right" >
		 	<div style="height:60px;"> <span style="color:red;"><?php echo $message; ?></span></div>
             <label for="name">
				<span>Name</span>
				<input type="text" id="nic" name="name" required>
			</label>
			<label for="date">
				<span>Date</span>
				<input type="text" name="date" id="ni" readonly="true" required>
			</label>
			<label for="Description">
				<span>Decription</span>
				<input type="text" id="nic" name="desc" required>
			</label>
			<label for="Description">
				<span>Order number</span>
				<input type="number" id="nic" name="odd" required>
			</label>
			<label for="subject">
				<span>Quantity</span>
				<input type="text" name="quo" id="nic" required>
			</label>
			<input type="submit" id="sends" value="submit" style="margin-top:25px;">
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
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
<script src="js/moment.min.js"></script>
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

$("#ni").datepicker({
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