<?php 
include('session1.php');

?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ICT Admin user reset</title>

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
				<a class="navbar-brand" href="#"><span>KNH ICT</span> Admin</a>
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
			<li class="active"><a href="admindash.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent"> <a href="#"><span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></use></svg> </span>Manage Users</a>
                  <ul class="children collapse" id="sub-item-1">
					<li > 
						<a href="Userlist.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> List Users
						</a>   
                              
                    </li>
					<li>
						<a class="" href="userAdd.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add a user
						</a>
					</li>
					<li>
						<a class="" href="reset.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> User password reset
						</a>
					</li>
					
				</ul>
              
			</li>
			<li class="parent"> <a href="Userpar.php"><span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></use></svg></span>User Performance</a>
                



			</li>
		<!--	<li class="parent"><a href="#"><span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"/></use></svg></span>Items</a>
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


			</li> -->
			<li><a href="approval.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></use></svg>Order approvals</a></li>
			<li class="parent"><a href="#"><span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"/></use></svg></span>Items Detail Edit</a>
                 <ul class="children collapse" id="sub-item-3">
					<li > 
						<a href="procaedit.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg></span> procurements
						</a>   
                              
                    </li>
					<li>
						<a class="" href="dispaedit.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Dispatches
						</a>
					</li>
					
				</ul>


			</li>
			
			
			<li role="presentation" class="divider"></li>
			<!--<li><a href="home.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Home Page</a></li> -->
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
				<h1 class="page-header">User Management</h1>
			</div>
		</div><!--/.row-->
            <h4>Enter User details to reset password</h4>
		<div class="panel panel-default">
          
        <div class="panel-body">
            <form method="post" Action="conreset.php">
            <div class="row">
                <input hidden id="user_id" name="user_id">
                <div class="form-group col-xs-3">
                    <label>Personal Number</label>
                    <input type="text " name="pno" required class="form-control">
                </div>
            </div>
         <div class="row">
                <div class="form-group col-xs-3">
                     <label>Username</label>
                    <input type="text " name="username" required class="form-control">
                </div>
            </div>
            
          
            <div class="row">
                <div class="form-group col-xs-3">
                     <label>Password</label>
                    <input type="password" name="pass" required class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                     <label>Confirm Password</label>
                    <input type="password" name="conpass" required class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <button class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i> Save Changes</button>                </div>
        </div>
        </form>
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
</body>


<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2017 11:02:41 GMT -->
</html>
