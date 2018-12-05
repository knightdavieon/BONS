<?php
include("accessdb.php");
//include("sessionhandler.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tables</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="resources/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/Font-Awesome-v5/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="resources/customcss/navbar.css">
	<script src="resources/bootstrap-4.0.0/dist/js/jquery-3.3.1.min.js"></script>
	<script src="resources/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
	<script src="resources/bootstrap-4.0.0/dist/js/popper.min.js"></script>


	<style>
	.responsive {
		width: 100%;
		height: auto;
	}
	.img{
		height: auto;
		width: 100%;
		border: none;
		padding: 20px;
	}
	button{
		color: white;
		border-style: none;
		height: 40px;
		width: 100%;
		font-weight: bold;
		margin-bottom: 10px;
	}

	h1{
		text-align: left;
	}
	.hero-image{
		background-image: url("resources/images/web2.jpg"); /* The image used */
		background-color: #cccccc; /* Used if the image is unavailable */
		height: auto; /* You must set a specified height */
		width: auto;

		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: cover; /* Resize the background image to cover the entire container */
	}

	.btn-secondary:not(:disabled):not(.disabled).active{
		border-color: #0070EA;
		color:white;
		background-color: #007BFF;
	}
	label{
		font-weight: bold;
	}

</style>

</head>


<body class="hero-image">
	<div class="container" >
		<form style="text-align: center; position: center;">	
			<div class="card" style="width: 90%; margin-right: auto; margin-left: auto; background-color: #d5f1ea00; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="card-header" style="padding: 0; border: none;">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100 img" src="resources/images/4.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100 img" src="resources/images/3.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100 img" src="resources/images/2.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<h1 style="padding-left: 20px;">Bon's Restaurant</h1>



				<div class="card-body">
<form method="POST" action="actions/addorder">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" style="margin-top: 4px;">

							
									<div class="card">
										<div class="card-header">
											<label>4 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table1"> Table 1
												</label>
											</div>
										</div>
									</div>
							
							</div>
							<div class="col-md-4" style="margin-top: 4px;">

								
									<div class="card">
										<div class="card-header">
											<label>4 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table2"> Table 2
												</label>
											</div>
										</div>
									</div>
							

							</div>
							<div class="col-md-4" style="margin-top: 4px;">

							
									<div class="card">
										<div class="card-header">
											<label>5 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table3"> Table 3
												</label>
											</div>
										</div>
									</div>
								

							</div>
						</div>

						<div class="row">
							<div class="col-md-4" style="margin-top: 4px;">

								
									<div class="card">
										<div class="card-header">
											<label>6 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table4"> Table 4
												</label>
											</div>
										</div>
									</div>
								

							</div>
							<div class="col-md-4" style="margin-top: 4px;">

								
									<div class="card">
										<div class="card-header">
											<label>6 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table5"> Table 5
												</label>
											</div>
										</div>
									</div>
								

							</div>
							<div class="col-md-4" style="margin-top: 4px;">

							
									<div class="card">
										<div class="card-header">
											<label>7 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table6"> Table 6
												</label>
											</div>
										</div>
									</div>
							

							</div>
						</div>

						<div class="row">
							<div class="col-md-4" style="margin-top: 4px;">

							
									<div class="card">
										<div class="card-header">
											<label>7 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table7"> Table 7
												</label>
											</div>
										</div>
									</div>
							

							</div>
							<div class="col-md-4" style="margin-top: 4px;">

								
									<div class="card">
										<div class="card-header">
											<label>7 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table8"> Table 8
												</label>
											</div>
										</div>
									</div>
							

							</div>
							<div class="col-md-4" style="margin-top: 4px;">

							
									<div class="card">
										<div class="card-header">
											<label>8 Seats</label>
										</div>
										<div class="card-body">
											<label>Status: </label>
										</div>
										<div class="card-footer">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary">
													<input type="checkbox" name="table9" autocomplete="off" value="Table9"> Table 9
												</label>
											</div>
										</div>
									</div>
							

							</div>
						</div>
					</div>
					
</form>
				</div>
 
				<div class="card-footer" style="text-align: right;">
<button type="submit" class="btn btn-success">Select Order</button>

					
				</div>


			</div>


 <form method="POST" action="actions/addorder">
				<input type="checkbox" name="table9" autocomplete="off" value="Table9"> Table 9
<button type="submit" class="btn btn-success">Select Order</button>
</form>
					
				


		</div>
	</body>


	</html>