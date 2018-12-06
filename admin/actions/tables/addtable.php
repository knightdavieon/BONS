<?php
include_once("../../../accessdb.php");
session_start();




$getaccountname = $conn->prepare("select MAX(ai_id) as lastid from tabless");
$getaccountname->execute();
$lastuniqid = $getaccountname->fetchColumn();

$lid = $lastuniqid['lastid'];

$insertaccount = $conn->prepare("INSERT INTO tabless(name, capacity, status)
VALUES(:name, :cap, :stat)");
$insertaccount->execute(array(
  "name" => "table". $lid,
  "cap" => "4",
  "stat" => "Available"
));

/*
date_default_timezone_set('Asia/Manila');
$logdate = date('l jS \of F Y h:i:s A');
$insertlog = $conn->prepare("INSERT INTO activity_log(account_id, account_name, activity, log_date_time)
VALUES(:accid, :accname, :activity, :logtimedate)");
$insertlog->execute(array(
"accid" => $_SESSION['accountid'],
"accname" => $_SESSION['accountname'],
"activity" => "Added a new account for " . $firstName ." ". $lastName,
"logtimedate" => $logdate
));
*/
$_SESSION['accountsNotifications'] = "<div class='alert alert-primary' role='alert'><strong>Success!</strong> New account created!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button></div>";


echo "<script language='JavaScript'>
window.location.href='../../tables';
</SCRIPT>";






?>
