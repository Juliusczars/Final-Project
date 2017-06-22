<?php 
include('session.php');

?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ranged Support(comp) Tasking report</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">


<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]> -->
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<!--[endif]-->

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
			<li class="active"><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg> </span>Ticketing</a>
                  <ul class="children collapse" id="sub-item-1">
					<li > 
						<a href="suppreport.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> Support
                        </a>   
                              
                    </li>
					<li>
                        <a class="" href="wshopreport.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Workshop
                        </a>
                    </li>
                    
                </ul>
              
            </li>
            <li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></use></svg></span>Tasks</a>
                 <ul class="children collapse" id="sub-item-2">
                    <li > 
                        <a href="task_S_report.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> Support
                        </a>   
                              
                    </li>
                    <li>
                        <a class="" href="task_w_report.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Workshop
                        </a>
                    </li>
                    
                </ul>

			</li>
			<li class="parent"><a href="#"><span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"/></use></svg></span>Items</a>
                 <ul class="children collapse" id="sub-item-3">
					<li > 
						<a href="procreports.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> procurements
						</a>   
                              
                    </li>
					<li>
						<a class="" href="dispreports.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Dispatches
						</a>
					</li>
					
				</ul>


			</li>
			<li><a href="inventory.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></use></svg>Inventory</a></li>
			
			
			<li role="presentation" class="divider"></li>
			<li><a href="home.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Home Page</a></li>
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
				<h2 class="page-header">KNH ICT SUPPORT REPORTS</h2>
			</div>
		</div><!--/.row-->
		
		   
		    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Configure support tasking Report</h4>
                </div>
                <div class="panel-body">
                  <!--  <form method="post" action= "report1.php" name="report"> -->
                     <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Tasks Created" onclick="show2()"/></div>
                    <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Complete Tasks"  onclick="show1()"/></div>
                    <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Incomplete Tasks" onclick="show()"/></div>
                    
                   
                <br>
                  
    
       <div id="assigned" style="display:none; padding:50px 0;">
        <h5>Choose an option incomplete tasks report</h5>
        <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Daily report" onclick="cshow()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Ranged report" onclick="Rshow()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Summary report" onclick="Gshow()" /></div>
       </div>
        

       <div id="create" style="display:block;padding:50px 0;">
         <h5>Choose an option on complete tasks report</h5>
        <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Daily report" onclick="cshow1()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Ranged report" onclick="Rshow1()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Summary report" onclick="Gshow1()" /></div>
       </div>
      
    
      <div id="groupie" style="display:none;padding:50px 0;">
         <h5>Choose an option on created tasks report</h5>
        <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Daily Report" onclick="cshow2()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Ranged report" onclick="Rshow2()" /></div>
         <div style="float:left;padding:0 50px;"><input type="submit" class="btn btn-primary pull-right" value="Summary report" onclick="Gshow2()"/></div>
       </div> 
<div id="Dailysupp" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure incomplete Report(per day)</h4>
                </div>
        <form method="post" action= "dailytask.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-group col-lg-2">
                          <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>  <!---end of dailysupp-->
<div id="Rangesupp" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure the range on incomplete tasks Report</h4>
                </div>
        <form method="post" action= "rangetask.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>

<div id="Groupsupp" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure range on Incomplete Report(summary)</h4>
                </div>
        <form method="post" action= "grouptask.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>

               <!--Created-->

               <div id="createsupp" style="display:none;">
       <div class="panel-heading">
                   <h4>Configure on complete tasks Report(per day)</h4>
                </div>
        <form method="post" action= "dailytask1.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>  <!---end of dailysupp-->
<div id="Rangecreate" style="display:block;">
       <div class="panel-heading">
                    <h4>Configure the range on complete Report</h4>
                </div>
        <form method="post" action= "rangetask1.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>

<div id="groupcreate" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure range on complete tasks Report(Summary)</h4>
                </div>
        <form method="post" action= "grouptask1.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>
           <!-- Unassigned -->


                <div id="Dailyun" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure tasks created Report(per day)</h4>
                </div>
        <form method="post" action= "dailytask2.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>  <!---end of dailysupp-->
<div id="Rangeun" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure the range on tasks created Report</h4>
                </div>
        <form method="post" action= "rangetask2.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>

<div id="groupun" style="display:none;">
       <div class="panel-heading">
                    <h4>Configure on tasks created Report(summary)</h4>
                </div>
        <form method="post" action= "grouptask2.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date </label>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="start-date">
                                </div>
                            </div>

                        </div>
                         <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
                            </div>
                            <div class="form-group" id="data_2" >
                                <label class="font-noraml">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" required class="form-control" name="end-date">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-2">
                           <input type="submit" class="btn btn-primary pull-right" value="Generate Report" id="btn" />
                        </div>
                    </div>

                </form>
               </div>
    


      </div>     

               <!-- </form> -->
            </div>
        </div>
    </div>

     
    
      <div class="row" style="height:;" id="table">
        
            <div id="yield1" style="display:block;">
            <div  class="table-responsive col-lg-12" >
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="ibox-title">
                            <h3>Completed support tasks Report  from Date:<?php echo $_POST['start-date'];?> to date:<?php echo $_POST['end-date'];?>   </h3>
                        </div>
                        <div role="tabpanel" class="ibox-tools" >
                <div class="ibox-content">
                    <table id="trans_table"  class="table table-striped">
                        <thead>
                        <th>Ticket#</th>
                        <th>Officer</th>
                        <th>Assigned on</th>
                        <th>Time Done</th>
                        <th>Fault</th>
                        <th>Solution</th>
                        <th>Department</th>
                        <th>Location</th>
                        
                        <th>Created by</th>
                        </thead>

                        <tbody>
                       <?php 
                       $start=$_POST['start-date'];
                       $end=$_POST['end-date'];
                      
                          $query= "SELECT s_task.Ticket_no, s_task.Officer, s_task.Cdate, s_task.Timeclosed, s_ticket.Fault, s_task.Solution, s_ticket.Department, s_ticket.Location, s_task.Createdby from s_ticket, s_task WHERE s_task.Cdate >='$start' and s_task.Cdate<='$end'  AND s_task.Ticket_no=s_ticket.Ticket_no AND s_task.Solution!='pending'";
                          $result=mysqli_query($db,$query);
                         if(empty($start)||empty($end)){ $start="N/A"; $end="N/A";echo "<script type='text/javascript'> alert('Both dates are required.Please fill in both dates');</script>";}
                         
                      elseif (strtotime($start)> strtotime($end)) {
                           echo "<script type='text/javascript'> alert('Inappropriate date range  select an appropriate range. ');
                            </script>";
                            
                        }

                         else{
                        while($row=mysqli_fetch_array($result)){
                            echo "<tr>
                                <td>".$row['Ticket_no']."</td>
                                <td>".$row['Officer']."</td>
                                <td>".$row['Cdate']."</td>
                                <td>".$row['Timeclosed']."</td>
                                <td>".$row['Fault']."</td>
                                <td>".$row['Solution']."</td>
                                <td>".$row['Department']."</td>
                                <td>".$row['Location']."</td>
                               
                                <td>".$row['Createdby']."</td>
                            </tr>";
                                }
                   }

                       ?> 


                        </tbody>
                    </table>
                </div>
            </div>
                    </div>
        
    </div>
            </div> </div>


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
		})
	</script>	

           <script type="text/javascript">
            
     
            
             function show() { 
                
        if(document.getElementById('assigned').style.display=='none') { 
            document.getElementById('assigned').style.display='block'; 
            document.getElementById('create').style.display='none';
            document.getElementById('createsupp').style.display='none';
            document.getElementById('Rangecreate').style.display='none';
            document.getElementById('groupcreate').style.display='none';
            document.getElementById('groupie').style.display='none';
            document.getElementById('Dailyun').style.display='none';
            document.getElementById('Rangeun').style.display='none';
            document.getElementById('groupun').style.display='none';
            document.getElementById('yield1').style.display='none';
        } 

        return false;
    }    
       function cshow() { 
                
        if(document.getElementById('Dailysupp').style.display=='none') { 
            document.getElementById('Dailysupp').style.display='block'; 
            document.getElementById('Rangesupp').style.display='none';
            document.getElementById('Groupsupp').style.display='none';
            document.getElementById('yield1').style.display='none';
        } 

        return false;
    }        

    function Rshow() { 
                
        if(document.getElementById('Rangesupp').style.display=='none') { 
            document.getElementById('Rangesupp').style.display='block'; 
            document.getElementById('Dailysupp').style.display='none';
            document.getElementById('Groupsupp').style.display='none';
        } 

        return false;
    }      

     function Gshow() { 
                
        if(document.getElementById('Groupsupp').style.display=='none') { 
            document.getElementById('Groupsupp').style.display='block'; 
            document.getElementById('Rangesupp').style.display='none';
            document.getElementById('Dailysupp').style.display='none';
            document.getElementById('yield1').style.display='none';
        } 

        return false;
    }        
      function show1(){
        if(document.getElementById('create').style.display=='none'){
           document.getElementById('create').style.display='block'; 
           document.getElementById('assigned').style.display='none';
            document.getElementById('Rangesupp').style.display='none';
            document.getElementById('Dailysupp').style.display='none';
            document.getElementById('Groupsupp').style.display='none';
            document.getElementById('groupie').style.display='none';
            document.getElementById('Dailyun').style.display='none';
            document.getElementById('Rangeun').style.display='none';
            document.getElementById('groupun').style.display='none';
           
        }

      }
       function cshow1() { 
                
        if(document.getElementById('createsupp').style.display=='none') { 
            document.getElementById('createsupp').style.display='block'; 
            document.getElementById('Rangecreate').style.display='none';
            document.getElementById('groupcreate').style.display='none';
             document.getElementById('yield1').style.display='none';
        } 

        return false;
    } 
     function Rshow1() { 
                
        if(document.getElementById('Rangecreate').style.display=='none') { 
            document.getElementById('Rangecreate').style.display='block'; 
            document.getElementById('createsupp').style.display='none';
            document.getElementById('groupcreate').style.display='none';
        } 

        return false;
    } 
     function Gshow1() { 
                
        if(document.getElementById('groupcreate').style.display=='none') { 
            document.getElementById('groupcreate').style.display='block'; 
            document.getElementById('Rangecreate').style.display='none';
            document.getElementById('createsupp').style.display='none';
             document.getElementById('yield1').style.display='none';
        } 

        return false;
    } 


    function show2(){
        if(document.getElementById('groupie').style.display=='none'){
           document.getElementById('groupie').style.display='block'; 
           document.getElementById('create').style.display='none';
            document.getElementById('createsupp').style.display='none';
            document.getElementById('Rangecreate').style.display='none';
            document.getElementById('groupcreate').style.display='none';
            document.getElementById('assigned').style.display='none';
            document.getElementById('Rangesupp').style.display='none';
            document.getElementById('Dailysupp').style.display='none';
            document.getElementById('Groupsupp').style.display='none';
            document.getElementById('yield1').style.display='none';
        }

      }
       function cshow2() { 
                
        if(document.getElementById('Dailyun').style.display=='none') { 
            document.getElementById('Dailyun').style.display='block'; 
            document.getElementById('Rangeun').style.display='none';
            document.getElementById('groupun').style.display='none';
        } 

        return false;
    } 
     function Rshow2() { 
                
        if(document.getElementById('Rangeun').style.display=='none') { 
            document.getElementById('Rangeun').style.display='block'; 
            document.getElementById('Dailyun').style.display='none';
            document.getElementById('groupun').style.display='none';
        } 

        return false;
    } 
     function Gshow2() { 
                
        if(document.getElementById('groupun').style.display=='none') { 
            document.getElementById('groupun').style.display='block'; 
            document.getElementById('Dailyun').style.display='none';
            document.getElementById('Rangeun').style.display='none';
        } 

        return false;
    } 


     </script>
             <script type="text/javascript">


             </script>
         



        <link href="css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
                    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/buttons.html5.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/buttons.print.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/dataTables.buttons.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/jszip.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/pdfmake.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="js/dataTables/vfs_fonts.js"></script>

                    <script type="text/javascript" charset="utf8" src="js/dataTables/buttons.flash.min.js"></script>
                    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
                    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
                    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
                    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
                    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
                    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <script src="js/sugar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <link href="css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js/datatables/buttons.flash.min.js"></script>
    <script src="js/dataTables/vfs_fonts.js"></script>
    <script src="js/moment.js"></script>

    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <script>
        $(function(){
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#data_2 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#trans_table').DataTable({
                dom: 'lBrtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'Copy current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Export To Excel Current Page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'Export To PDF Current Page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }

                ],
                "columnDefs": [
                    { "visible": false }
                ],
                "order": [[ 0, 'asc' ]],
                "displayLength": 10

            } );

            // Order by the grouping
            $('#trans_table tbody').on( 'click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if ( currentOrder[0] === 0 && currentOrder[1] === 'asc' ) {
                    table.order( [ 0, 'desc' ] ).draw();
                }
                else {
                    table.order( [ 0, 'asc' ] ).draw();
                }
            } );

        })
    </script>
</body>



</html>
