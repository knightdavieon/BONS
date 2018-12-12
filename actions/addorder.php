<?php
include_once("../accessdb.php");
//session_start();
if (!empty($_POST)){

	$id = $_POST['id'];
	$item= $_POST['item'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	$status="On Process";
	$total = $quantity * $price;
	

	date_default_timezone_set('Asia/Manila');
	$date = date('mdY');

	

	
		$orderlist = $conn->prepare("INSERT INTO orderlist(order_id, item, quantity, price, total, status)
	    VALUES(:order_id, :item, :quantity, :price, :total, :status)");
		$orderlist->execute(array(
			"order_id" => $id,
		   
		    "item" => $item,
		    "quantity" => $quantity,
		     "price" => $price,
		     "total" => $total,
		    "status" => $status
		   
		));

	echo "<script language='JavaScript'>
						window.location.href='../menu2.php';
							</SCRIPT>";

}

?>
