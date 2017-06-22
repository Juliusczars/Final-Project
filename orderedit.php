<?php 
include('session.php');
$desc=$_POST['username'];
$reas=$_POST['quantity'];
$date=$_POST['date'];
$Id=$_POST['user_id'];

$query="UPDATE ordering SET Description='$desc', Reason='$reas', Order_date='$date' WHERE Order_Id='$Id' ";
$result=mysqli_query($db, $query);
if($result){
echo "<script> alert('Order Details updated successfully!');</script>";
}
else{echo "<script> alert('Order Details update failed!');</script>";}



?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Orders list</title>

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
                        <!--    <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
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
            <li class="active"><a href="orderlist.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Order list</a></li>
            
            
            <li role="presentation" class="divider"></li>
            <li><a href="contact.php"><svg class="glyph stroked home"></svg> Back</a></li>
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
                <h1 class="page-header">Order Details</h1>
            </div>
            <div><input type="text" class="filter" id="filter" ><label class="filter">Search</label></div>
        </div><!--/.row-->
        
         <div class="modal  fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete an order</h4>
                </div>
              <form method="post" action="orderdel.php"> 
                <div class="modal-body">
                    <input hidden id="del" name="id">
                    <p>Are you sure you want to delete this order.&hellip;</p>
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
                    <h4 class="modal-title" id="myModalLabel">Edit order Details</h4>
                </div>
               <form method="post" action="orderedit.php">
                <div class="modal-body">
                    <div class="row">
                         <input hidden id="user_id" name="user_id">
                        <div class="form-group col-xs-8">
                            <label >Description</label>
                            <input type="text" id="username" name="username" class="form-control" required>  
                       </div>
                    </div>
                     
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >Reason for Order</label>
                            <input type="text" name="quantity" id="quantity" class="form-control" required>  
                       </div>
                    </div> 
                    <div class="row">
                       
                        <div class="form-group col-xs-8">
                            <label >date</label>
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
                            <h3>Orders   </h3>
                        </div>
                        <div role="tabpanel" class="ibox-tools" >
                <div class="ibox-content">
                    <table id="trans_table"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Desc</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Procurement</th>
                        <th>Orderer</th>
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
               <?php  
                  $query="SELECT Order_Id, Description, Quantity, Order_date, Reason, Status, Procurement, Orderedby from ordering ";
                  $result=mysqli_query($db, $query);
               
                 while($row=mysqli_fetch_array($result)){
                    $q="SELECT Order_Id from ordering WHERE Order_Id='".$row['Order_Id']."'";
                    $r=mysqli_query($db, $q);
                    $t=mysqli_fetch_object($r);
                     echo " <tr>
                            <td>".$row['Order_Id']."</td>
                            <td class='desc'>".$row['Description']."</td>
                            <td >".$row['Quantity']."</td>
                            <td class='date'>".$row['Order_date']."</td>
                            <td class='quo'>".$row['Reason']."</td>
                            <td>".$row['Status']."</td>
                            <td>".$row['Procurement']."</td>
                            <td>".$row['Orderedby']."</td>
                            <td>
                                <div class='btn-group'>
                                    <button id='$t->Order_Id' class='btn-default' data-toggle='modal' data-target='#edit'>Edit</button>
                                    <!-- <button id='' data-toggle='modal' data-target='#delete' class='btn-danger' >Delete</button> -->
                                </div> 
                            </td>
                        </tr>";

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

        
                                
    </div>  <!--/.main-->
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
               var desc=$row.find('.desc').text();
                var quo=$row.find('.quo').text();
                var date=$row.find('.date').text();


             
             $("#username").val(desc);
             $("#quantity").val(quo);
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


</html>
