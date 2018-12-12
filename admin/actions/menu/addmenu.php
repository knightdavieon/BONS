<?php
include_once("../../../accessdb.php");
session_start();
if (!empty($_POST)){
	$category = $_POST['category'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$regular_price = $_POST['regular_price'];
	$medium_price = $_POST['medium_price'];
	$large_price = $_POST['large_price'];
	

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

		$insertaccount = $conn->prepare("INSERT INTO menu(item_id, category, name, description, regular_price, medium_price, large_price)
	    VALUES(:item_id, :category, :name, :description, :regular_price, :medium_price, :large_price)");
		$insertaccount->execute(array(
		    "item_id" => $upcode,
		    "category" => $category,
		    "name" => $name,
		    "description" => $description,
		    "regular_price" => $regular_price,
		    "medium_price" => $medium_price,
		    "large_price" => $large_price
		));
		

	echo "<script language='JavaScript'>
						window.location.href='../../menu';
							</SCRIPT>";

}
?>
