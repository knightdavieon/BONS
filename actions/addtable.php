<?php
include_once("../accessdb.php");
//session_start();
if (!empty($_POST)){


	$table =$_POST['table1'].$_POST['table2'].$_POST['table3'].$_POST['table4'].$_POST['table5'].$_POST['table6'];
	$status = 'On Process';
	

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

	
		$orderlist = $conn->prepare("INSERT INTO customer_order(order_id, table_number, status)
	    VALUES(:order_id, :table_number, :status)");
		$orderlist->execute(array(
			"order_id" => $upcode,
		    "table_number" => $table,		    
		    "status" => $status
		   
		));

	echo "<script language='JavaScript'>
						window.location.href='../admin/orderlist.php';
							</SCRIPT>";

}

?>
