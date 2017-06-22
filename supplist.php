<?php 
include('session.php');






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
     <!-- <li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></use></svg></span>Workshop</a>
                 <ul class="children collapse" id="sub-item-2">
          <li > 
            <a href="wplist.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> Tickets
            </a>   
                              
                    </li>
          <li>
            <a class="" href="taskwp.php">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Tasks
            </a>
          </li>
          
        </ul>



      </li>-->
			
			<li role="presentation" class="divider"></li>
			<li><a href="support.php">  Back </a></li>
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
      <div><input type="text" class="filter" id="filter" ><label class="filter">Search</label></div>
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
                    <h4 class="modal-title" id="myModalLabel">Edit helpdesk ticket Details</h4>
                </div>
               <form method="post" action="suppedit.php">
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
                            <label >Fault</label>
                            <select type="text" name="desc" id="desc" class="form-control" required>
                            
                <option>Computer H/W</option>
                <option>Computer S/W</option>
                <option>Internet Connection</option>
                <option>Network Issues</option>

                <option>Printing Issues</option>
                <option>UPS</option>
                
        </select>  
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

         <div  class="table-responsive col-lg-12" >
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="ibox-title">
                            <h3>Hepldesk Tickets  </h3>
                        </div>
                        <div role="tabpanel" class="ibox-tools" >
                <div class="ibox-content">
                    <table id="trans_table"  class="table table-striped">
                    <thead>
                        <th>Ticket#</th>
                        <th>Name</th>
                        <th>Personal#</th>
                        <th>Ext#</th>
                        <th>Date</th>
                        <th>Fault</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Created by</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                       <?php 
                     
                          $query= "SELECT Ticket_no, employee.Fname, s_ticket.P_no, Ext_no, Cdate, Fault, s_ticket.Department, Location, Status, Timecreated, Createdby from s_ticket, employee WHERE employee.P_no=s_ticket.P_no ";
                          $result=mysqli_query($db,$query);
                        //  if(empty($start)||empty($end)){ $start="N/A"; $end="N/A";echo "<script type='text/javascript'> alert('Both dates are required.Please fill in both dates');</script>";}
                         
                      //   if (strtotime($start)> strtotime($end)) {
                        //     echo "<script type='text/javascript'> alert('This range is not among the valid possibilities select an appropriate range. ');</script>";
                        // }

                        //  else{
                        while($row=mysqli_fetch_array($result)){
                            $q="SELECT Ticket_no from s_ticket WHERE Ticket_no='".$row['Ticket_no']."'";
                            $r=mysqli_query($db, $q);
                            $t=mysqli_fetch_object($r);
                            echo "<tr>
                                <td>".$row['Ticket_no']."</td>
                                <td>".$row['Fname']."</td>
                                <td>".$row['P_no']."</td>
                                <td class='ext'>".$row['Ext_no']."</td>
                                <td class='date'>".$row['Cdate']."</td>
                                <td class='fault'>".$row['Fault']."</td>
                                <td class='dept'>".$row['Department']."</td>
                                <td class='loc'>".$row['Location']."</td>
                                 <td>".$row['Status']."</td>
                                <td>".$row['Timecreated']."</td>
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
        
         </div>
            </div>
    </div>

		
								
	</div>	<!--/.main-->

	<link href="css.jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
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
               var ext=$row.find('.ext').text();
                var fault=$row.find('.fault').text();
                var date=$row.find('.date').text();
                var dept=$row.find('.dept').text();
                var loc=$row.find('.loc').text();


             
             $("#username").val(ext);
             $("#desc").val(fault);
             $("#date").val(date);
             $("#quantity").val(dept);
             $("#loc").val(loc);
                 

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
               /*     {
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

                */],
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



        function filterGlobal () {
    $('#trans_table').DataTable().search(
        $('input.filter').val()
       
    ).draw();
}
$(document).ready(function() {
    
 
    $('input.filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
   
} );




    </script>   

    

       <script type="text/javascript">


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


    </script>
</body>


<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2017 11:02:41 GMT -->
</html>
