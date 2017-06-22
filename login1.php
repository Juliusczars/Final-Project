<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home_page.php");
      }else {
         $error = "Your Login Name or Password is invalid<br> Please enter correct details";
      }
   }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>admin_login_form</title>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/application.css" />
</head>
<body>

  <header>
    <h1>File Management</h1>
    <nav class="hide">
      <ul>
        <li><a href="#" id="signInReveal" class="current">Sign In</a></li>
      </ul>
    </nav>
  </header>

  <div class="signInWrap formWrap">
    <form class="signIn" method="post" action="Index.html">
      <legend>Sign In</legend>
      <fieldset>
        
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
      </fieldset>
      <div class="formActions">
        <button name="signIn" type="submit">Back</button>
      </div>
      
      <div class="loading"><span class="spinner"></span></div>
    </form>
    <form class="admin_login" method="post" action="login.html">
   <div class="formActions" align=right>
      <p>Admin Login</p>
        <button name="signUp" type="submit">Admin Login</button>
      </div>
     </form>
</body>
</html>
