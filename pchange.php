
<?php
include('session.php');
$pass=$_POST['cpass'];
$npass=$_POST['npass'];
$cnpass=$_POST['cnpass'];

$query=mysqli_query($db, "SELECT P_no from users where Username='$login_session'");
$q=mysqli_fetch_object($query);
$n=$q->P_no;


$edit="UPDATE users SET Password='$npass' Where P_no='$n'";
$qpass=mysqli_query($db, "SELECT Password from users Where P_no='$n'");
$qp=mysqli_fetch_object($qpass);
$right=$qp->Password;

if( $right==$pass  ){
  
    if( strlen($npass)>=6 && preg_match('`[A-Z]`',$npass)  && preg_match('`[0-9]`',$npass)){
     if($npass==$cnpass){ 
$resolt=mysqli_query($db, $edit);
if($resolt){
  echo "<script> alert('Password changed successfully! Effective after logging out.');</script>";
  

}else{echo "<script> alert('Password change failed! Contact Admin');</script>";
} //
   }else{echo "<script> alert('New password entries does not match!');</script>";}
   } else{echo "<script> alert('Password not valid, must be atleast 6 characters contain atleast one uppercase letter and a digit ')</script>";}
  
}
else{
echo "<script> alert('Failed Enter your correct current password!');</script>";

}


$query2="SELECT * FROM employee where P_no='$n'";
$result=mysqli_query($db, $query2);
$p=mysqli_fetch_object($result);


?>

<html>
<head><title>profile code</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">


<style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}
body{
  background: #f1f4f7;
}




</style>


</head>
<body>

<div class="container">
      <div class="row">
      	<div style="float:right; height:20px; witdh:50px;"><span style="margin-right: 565px ;"><img src="images/logo.png"></span> </div>

      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">

           <A href="home.php" >Home</A>|

        <A href="logout.php" >Logout</A>
       <br>
<p class=" text-info"  id="demo"><div class='time-frame'>
    <div id='date-part'></div>
    <div id='time-part'></div>
</div> </p>
      </div>
         
         <div class="modal  fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Change password</h4>
                </div>
              <form method="post" action="pchange.php"> 
                <div class="modal-body">
                    <input hidden id="del" name="id">
                    <input hidden id="desc" name="desc">
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Current Password</label>
                            <input type="password" name="cpass" id="cpass" class="form-control" required>  
                       </div>
                    </div> 
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >New Password</label>
                            <input type="password" name="npass" id="npass" class="form-control" required>  
                       </div>
                    </div> 
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Confirm New Password</label>
                            <input type="password" name="cnpass" id="cnpass" class="form-control" required>  
                       </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary">Save Changes</button>
                </div>
             </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit your Details</h4>
                </div>
               <form method="post" action="profedit.php">
                <div class="modal-body">
                    <div class="row">
                         <input hidden id="user_id" name="user_id">
                        <div class="form-group col-xs-8">
                        	<label >Home Address</label>
                        	<input type="text" id="username" name="username" class="form-control" required>  
                       </div>
                    </div>
                     
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                        	<label >Email</label>
                        	<input type="email" name="quantity" id="quantity" class="form-control" required>  
                       </div>
                    </div> 
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                        	<label >Phone Number</label>
                        	<input type="text" name="phon" id="phone" class="form-control" required>  
                       </div>
                    </div> 
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>



        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $p->Fname;?>  <?php echo $p->Lname;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="" ="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">

                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $p->Department;?></td>
                      </tr>
                      <tr>
                        <td>Personal Number:</td>
                        <td><?php echo $p->P_no;?></td>
                      </tr>
                      <tr>
                        <td>ID Number:</td>
                        <td><?php echo $p->Id_no;?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender:</td>
                        <td><?php echo $p->Gender;?></td>
                      </tr>
                        <tr>
                        <td>Home Address:</td>
                        <td class="desc"><?php echo $p->Address;?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td class="quo"><?php echo $p->Email;?></td>
                      </tr>
                        <td>Phone Number:</td>
                        <td class="date"><?php echo $p->Contact;?></td>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>

                   
                  <input type="button" class="btn btn-primary" id="pedit" data-toggle='modal' data-target='#edit' value="Edit Profile"> 
                  <a href="#" class="btn btn-primary" data-toggle='modal' data-target='#delete'>Change My password</a>
                 
                </div>
              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
    </div>


     <link href="css.jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="js/moment.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

<script type="text/javascript">



		$(function () {
            $('#edit').on('show.bs.modal',function (e) {
                id = $(e.relatedTarget).attr('id');
                $("#user_id").val(id);
               
            var $row=$(this).closest('tr');
               var desc=$row.find('.desc').text();
                var quo=$row.find('.quo').text();
                var date=$row.find('.date').text();


             
             $("#username").val($(".desc").text());
             $("#quantity").val($(".quo").text());
             $("#phone").val($(".date").text());

            });
            $("#delete").on('show.bs.modal',function (e) {
                ID = $(e.relatedTarget).attr('id');
                $("#del").val(ID);
            })
        });


    
        


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