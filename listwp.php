<?php 
include('session.php');
$query="SELECT count(Ticket_no) AS no from s_ticket";
$q=mysqli_query($db, $query);
$T=mysqli_fetch_object($q);

$query1="SELECT count(SN) AS no1 from activity";
$q1=mysqli_query($db, $query1);
$P=mysqli_fetch_object($q1);

$query2="SELECT count(SN) AS no2 from p_dispatch";
$q2=mysqli_query($db, $query2);
$D=mysqli_fetch_object($q2);

$query3="SELECT count(Ticket_no) AS no3 from s_task";
$q3=mysqli_query($db, $query3);
$T1=mysqli_fetch_object($q3);
?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ticketing & Tasking details </title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>KNH ICT</span> User</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $login_session;?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<!--	<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg> </span>Helpdesk support</a>
                  <ul class="children collapse" id="sub-item-1">
          <li > 
            <a href="supplist.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> Tickets
            </a>   
                              
                    </li>
          <li>
            <a class="" href="supptask.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Tasks
            </a>
          </li>
          
        </ul>
              
      </li>
      <li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></use></svg></span>Workshop</a>
                 <ul class="children collapse" id="sub-item-2">
          <li > 
            <a href="listwp.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> Tickets
            </a>   
                              
                    </li>
          <li>
            <a class="" href="taskwp.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Tasks
            </a>
          </li>
          
        </ul>



      </li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="procurement.php"><svg class="glyph stroked home"></svg> Back</a></li>
		</ul>
		<div class="attribution">Created by <a href="#"><span>Julius Czars</span></a><br/></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">ICT KNH</li>
			</ol>
		</div><!--/.row-->



         
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ticketing & Tasking list</h1>
			</div>
		</div><!--/.row-->
		
		 <div class="modal  fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete a record</h4>
                </div>
              <form method="post" action="del.php"> 
                <div class="modal-body">
                    <input hidden id="del" name="id">
                    <p>Are you sure you want to delete this record?&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button  class="btn btn-danger">Delete</button>
                </div>
             </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit workshop ticket Details</h4>
                </div>
               <form method="post" action="useredit.php">
                <div class="modal-body">
                    <div class="row">
                         <input hidden id="user_id" name="user_id">
                        <div class="form-group col-xs-8">
                        	<label >Extension Number</label>
                        	<input type="text" id="username" name="username" class="form-control" required>  
                       </div>
                    </div>
                     <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Device</label>
                            <input type="text" name="dev" id="dev" class="form-control" required>  
                       </div>
                    </div> 
                      <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Info</label>
                            <input type="text" name="info" id="info" class="form-control" required>  
                       </div>
                    </div> 
                     
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Fault</label>
                            <input type="text" name="desc" id="desc" class="form-control" required>  
                       </div>
                    </div> 
                     
                     <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Department</label>
                            <input type="text" name="quantity" id="quantity" class="form-control" required>  
                       </div>
                    </div> 
                     <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Location</label>
                            <input type="text" name="loc" id="loc" class="form-control" required>  
                       </div>
                    </div> 
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                        	<label >Date</label>
                        	<input type="date" name="date" id="date" class="form-control" required>  
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


		
		 <div class="row">

        <div class="col-lg-12" >
            <div class="tile-body p-0">
                <table class="table table-bordered" id="users">
                     <h3>Workshop Tickets</h3>
                  <thead><th>Ticket#</th>
                        <th>Name</th>
                        <th>Personal#</th>
                        <th>Ext#</th>
                        <th>Date</th>
                        <th>Device</th>
                        <th>Info</th>
                        <th>Fault</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Created at</th>
                        <th>Created by</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                       <?php 
                      
                      
                          $query= "SELECT Ticket_no, employee.Fname, w_ticket.P_no, Ext_no, Cdate, Device, Info, Fault, w_ticket.Department, Location, Time, Createdby from w_ticket, employee WHERE employee.P_no=w_ticket.P_no ";
                          $result=mysqli_query($db,$query);
                        //  if(empty($start)||empty($end)){ $start="N/A"; $end="N/A";echo "<script type='text/javascript'> alert('Both dates are required.Please fill in both dates');</script>";}
                         
                      //   if (strtotime($start)> strtotime($end)) {
                        //     echo "<script type='text/javascript'> alert('This range is not among the valid possibilities select an appropriate range. ');</script>";
                        // }

                        //  else{
                        while($row=mysqli_fetch_array($result)){
                           $q="SELECT Ticket_no from w_ticket WHERE Ticket_no='".$row['Ticket_no']."'";
                            $r=mysqli_query($db, $q);
                            $t=mysqli_fetch_object($r);
                            echo "<tr>
                                <td>".$row['Ticket_no']."</td>
                                <td>".$row['Fname']."</td>
                                <td>".$row['P_no']."</td>
                                <td>".$row['Ext_no']."</td>
                                <td>".$row['Cdate']."</td>
                                <td>".$row['Device']."</td>
                                <td>".$row['Info']."</td>
                                <td>".$row['Fault']."</td>
                                <td>".$row['Department']."</td>
                                <td>".$row['Location']."</td>
                                <td>".$row['Time']."</td>
                                <td>".$row['Createdby']."</td>
                                <td>
                                <div class='btn-group'>
                                    <button id='$t->Ticket_no' class='btn-default' data-toggle='modal' data-target='#edit'>Edit</button>
                                  <!--<button id='$t->Ticket_no' data-toggle='modal' data-target='#delete' class='btn-danger' >Delete</button> -->
                                </div> 
                            </td>
                            </tr>";
                                }
                   // }

                       ?> 


                        </tbody>
                    </table>

            </div>
        </div>
    </div>

		
								
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		});

     

          $('.btn-default').click(function(){
            var $row=$(this).closest('tr');
               var desc=$row.find('.desc').text();
                var name=$row.find('.name').text();
                var date=$row.find('.date').text();


             
             $("#username").val(name);
             $("#desc").val(desc);
             $("#date").val(date);
                 

        });
          






		$(function () {
            $('#edit').on('show.bs.modal',function (e) {
                id = $(e.relatedTarget).attr('id');
                $("#user_id").val(id);
               
             function Edit(td) {
             $("#username").val(td.id[0]);
                 

            }
            });
            $("#delete").on('show.bs.modal',function (e) {
                ID = $(e.relatedTarget).attr('id');
                $("#del").val(ID);
            })
        });
        





	</script>	
</body>


<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2017 11:02:41 GMT -->
</html>
