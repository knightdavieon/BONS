<?php include("scriptvalidation.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="John Dave Espinosa">
    <link rel="icon" type="resources/admindesign/image/png" sizes="16x16" href="resources/images/ICCLogo.png">
    <title>International Coastal Cleanup</title>

    <link rel="stylesheet" href="resources/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/Font-Awesome-v5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="resources/customcss/navbar.css">
    <script src="resources/bootstrap-4.0.0/dist/js/jquery-3.3.1.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/popper.min.js"></script>




	<style>
		body{
			background:radial-gradient(ellipse at center, rgba(255,254,234,1) 0%, rgba(255,254,234,1) 35%, #B7E8EB 100%);
		}
		.bg{
			padding-left: 0;
			padding-right: 0;
			padding-top: 10px;
			background-color: #2aacc6;
			text-align: left;
		}

		h1{
			color: white;
			padding-left: 10px;
			font-weight: bold;
			font-size: 50px;
		}
		p{
			color: white;
			padding-left: 15px;
			font-weight: bold;
			margin-bottom: 0;
		}
		label{
			margin-top: 10px;
		}
		.buttonsubmit{
			background-color: #2AACC6;
			color: white;
		}
		.buttonsubmit:hover{
			background-color: #21859A;
			color: white;
		}

	</style>

</head>

<?php include('navbar.php');?>

<body>
	<form action="actions/add.php" method="POST">
	<div class="card" style="margin-top:6%; width: 90%; margin-right: auto; margin-left: auto; background-color: #d5f1ea00;">
  		<div class="card-body">

			<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
				<div class="col-lg-12 bg">
					<h1>TRASH COLLECTED</h1>

					<p>USE FOR THE TOTALS FOR DATA TO BE USEFUL</p>
					<p>PLEASE DO NOT USE WORDS OR CHECK MARKS</p>
				</div>

				<div class="row" style="margin-left: 10px; margin-right: 10px;">
					<div class="col-md-3">
						<label>Municipality</label>
										<select name="munipality" class="form-control">
											  <option value="Sta. Cruz">Sta. Cruz</option>
											  <option value="Candelaria">Candelaria</option>
											  <option value="Masinloc">Masinloc</option>
											  <option value="Palauig">Palauig</option>
											  <option value="Iba">Iba</option>
											  <option value="Botolan">Botolan</option>
											  <option value="Cabangan">Cabangan</option>
											  <option value="San Felipe">San Felipe</option>
											  <option value="San Narciso">San Narciso</option>
											  <option value="San Antonio">San Antonio</option>
											  <option value="San Marcelino">San Marcelino</option>
											  <option value="Castillejos">Castillejos</option>
											  <option value="Subic">Subic</option>
										</select>
					</div>

					<div class="col-md-3">
						<label>Sites</label>
						<input type="text" name="site" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly); " required placeholder="Number of Sites">
					</div>

					<div class="col-md-3">
						<label>Barangay</label>
						<input type="text" name="brgy" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);" required placeholder="Number of Barangay">
					</div>

					<div class="col-md-3">
						<label>Volunteer</label>
						<input type="text" name="volunteer" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);" required placeholder="Number of Volunteer">
					</div>

				</div>

				<div class="row" style="margin-left: 10px; margin-right: 10px;">
						<div class="col-md-4">
							<label>Distance</label>
							<input type="text" name="distance" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);" required placeholder="Estimated Total of Distance Cleaned">
						</div>

						<div class="col-md-4">
							<label>Weight</label>
							<input type="text" name="weight" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);" required placeholder="Estimated Total of Weight Collected">
						</div>

						<div class="col-md-4">
							<label>Trash bags</label>
							<input type="text" name="trash_bags" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Estimated Total of Trash Bags Filled">
						</div>
				</div>

				<div class="row" style="padding-left: 10px; padding-right: 10px;">
					<div class="col-md">
							<label>Plastic</label>
							<input type="text" name="total_plastic" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Total No. of Plastic">
					</div>

					<div class="col-md">
							<label>Tiny Trash</label>
							<input type="text" name="total_tinytrash" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Total No. of Tiny Trash">
					</div>

					<div class="col-md">
							<label>Other Trash</label>
							<input type="text" name="total_othertrash" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Total No. of Other Trash">
					</div>

					<div class="col-md">
							<label>Glass and Metals</label>
							<input type="text" name="totalglassmetals" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Total No. of Glass and Metals">
					</div>

					<div class="col-md">
							<label>Fishing Gears</label>
							<input type="text" name="totalfishinggear" class="form-control" onkeypress="return restrictCharacters(this, event, digitsOnly);"required placeholder="Total No. of Fishing Gears">
					</div>
				
				</div>

			</div>
		</div>
		<div class="card-footer" style="text-align: right;">
			<button class="btn buttonsubmit">Submit</button>
		</div>
	</div>
</form>
	




</body>
</html>