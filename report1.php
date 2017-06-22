<?php 
include('session.php');

?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>procurement report</title>

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
				<h2 class="page-header">KNH ICT PROCUREMENT REPORTS</h2>
			</div>
		</div><!--/.row-->
		
		   
		    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Configure procurements made Report</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action= "report1.php" name="report">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Select a Date Range</label>
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
                </div>


                </form>
            </div>
        </div>
    </div>




      <div class="row" style="height:;" id="table">
      	
		    
            <div  class="table-responsive col-lg-12" >
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="ibox-title">
                            <h3>Procurements made Report  From Date:<?php echo $_POST['start-date'];?>  To Date: <?php echo $_POST['end-date'];?>  </h3>
                        </div>
                        <div role="tabpanel" class="ibox-tools" >
                <div class="ibox-content">
                    <table id="trans_table"  class="table table-striped">
                        <thead>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Procurer</th>
                        </thead>

                        <tbody>
                       <?php 
                       $start=$_POST['start-date'];
                       $end=$_POST['end-date'];
                          $query= "SELECT * from activity WHERE Pdate >='$start' and Pdate <='$end'";
                          $result=mysqli_query($db,$query);
                        //  if(empty($start)||empty($end)){ $start="N/A"; $end="N/A";echo "<script type='text/javascript'> alert('Both dates are required.Please fill in both dates');</script>";}
                         
                         if (strtotime($start)> strtotime($end)) {
                             echo "<script type='text/javascript'> alert('This range is not among the valid possibilities select an appropriate range. ');</script>";
                         }

                          else{
                        while($row=mysqli_fetch_array($result)){
                            echo "<tr>
                                <td>".$row['SN']."</td>
                                <td>".$row['P_id']."</td>
                                <td>".$row['Name']."</td>
                                <td>".$row['Description']."</td>
                                <td>".$row['Quantity']."</td>
                                <td>".$row['Pdate']."</td>
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
		})
	</script>	

            <script type="text/javascript">
            $(document).ready(function(){

         

            });
             
      function submitform()
{
document.report.submit();
}
            
             function show() { 
             	
        if(document.getElementById('table').style.display=='none') { 
            document.getElementById('table').style.display='block'; 
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
