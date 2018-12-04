<?php
include_once("../accessdb.php");
session_start();
if (!empty($_POST)){
	$addmunicipality = $_POST['munipality'];
	$addsite = $_POST['site'];
	$addbrgy = $_POST['brgy'];
	$addvolunteer = $_POST['volunteer'];
	$adddistance = $_POST['distance'];
	$addweight = $_POST['weight'];
	$addtrash_bags = $_POST['trash_bags'];
	$addtotalplastic = $_POST['total_plastic'];
	$addtotaltinytrash = $_POST['total_tinytrash'];
	$addtotal_othertrash = $_POST['total_othertrash'];
	$addtotalglassmetals = $_POST['totalglassmetals'];
	$addtotalfishinggear = $_POST['totalfishinggear'];



	$insertdata = $conn->prepare("INSERT INTO tbldata(MUNICIPALITY, SITES, BRGY, VOLUNTEERS, DISTANCE, WEIGHT, TRASH_BAGS, PLASTIC, TINY_TRASH, OTHER_TRASH, GLASS_METALS, FISHING_GEAR)
	    VALUES(:municipality, :sites, :brgy, :volunteers, :distance, :weight, :trashbags, :plastic, :tinytrash, :othertrash, :grassmetals, :fishinggear)");
		$insertdata->execute(array(
		    "municipality" => $addmunicipality,
		    "sites" => $addsite,
		    "brgy" => $addbrgy,
		    "volunteers" => $addvolunteer,
		    "distance" => $adddistance,
		    "weight" => $addweight,
		    "trashbags" => $addtrash_bags,
		    "plastic" => $addtotalplastic,
		    "tinytrash" => $addtotaltinytrash,
		    "othertrash" => $addtotal_othertrash,
		    "grassmetals" => $addtotalglassmetals,
		    "fishinggear" => $addtotalfishinggear

		));
		echo "<script language='JavaScript'>
						window.location.href='../form';
							</SCRIPT>";

	}

?>