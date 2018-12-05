<?php
include_once("../accessdb.php");
session_start();
if (!empty($_POST)){
	$table1 = $_POST['table1'];
	$table2 = $_POST['table2'];
	$table3 = $_POST['table3'];
	$table4 = $_POST['table4'];
	$table5 = $_POST['table5'];
	$table6 = $_POST['table6'];
	$table7 = $_POST['table7'];
	$table8 = $_POST['table8'];
	$table9 = $_POST['table9'];

	$status="On Process";
	

	date_default_timezone_set('Asia/Manila');
	$date = date('mdY');

	function generateCode() {
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		Global $generatedId;
		Global $usercode;
		$random_string_length = 6;
		$max = strlen($characters) - 1;
		for ($i = 0; $i < $random_string_length; $i++) {
			$usercode .= $characters[mt_rand(0, $max)];
		}
	}
	generateCode();
	$upcode = $date . $usercode;

	$insertpersonal = $conn->prepare("INSERT INTO customer_order(order_id, table_number, status)
	    VALUES(:order_id, :table_number, :status)");
		$insertpersonal->execute(array(
			"order_id" => $upcode,
		    "table_number" => $table1 + $table2 + $table3 + $table4 + $table5 + $table6 + $table7 + $table8 + $table9,
		    "status" => $status
		   
		));

	echo "<script language='JavaScript'>
						window.location.href='../menu.php';
							</SCRIPT>";

}

?>
