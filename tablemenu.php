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
				<form method="POST" action="actions/addorder.php">
				<div class="row">
					<div class="col-md-4">
						
						<a href="#table1" role="button" data-toggle="modal"><img src="resources/images/1.png" class="responsive"></a>


						<div class="modal fade" id="table1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        					<div class="col-md-12">
													    	<div class="row">
													    	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table1" autocomplete="off" value="Table1"> Table 1
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table2" autocomplete="off" value="Table2"> Table 2
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table3" autocomplete="off" value="Table3"> Table 3
													        		</label>
													        	</div>
												        	</div>
												        	</div>

												        	<div class="row">
													    	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table4" autocomplete="off" value="Table4"> Table 4
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table5" autocomplete="off" value="Table5"> Table 5
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table6" autocomplete="off" value="Table6"> Table 6
													        		</label>
													        	</div>
												        	</div>
												        	</div>

												        	<div class="row">
													    	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table7" autocomplete="off" value="Table7"> Table 7
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table8" autocomplete="off" value="Table8"> Table 8
													        		</label>
													        	</div>
												        	</div>
												        	<div class="col-md-4" style="margin-top: 4px;">
															    <input type="hidden" name="scholarship" value="">
													        	<div class="btn-group-toggle" data-toggle="buttons">
													        		<label class="btn btn-secondary">
													        			<input type="checkbox" name="table9" autocomplete="off" value="Table9"> Table 9
													        		</label>
													        	</div>
												        	</div>
												        	</div>
													    </div>
							      	</div>
								      <div class="modal-body">
								      	<h4 style="text-align: left;">Order List: </h4>
								        <div class="row">
								        	
								        </div>
								      </div>
							      <div class="modal-footer">
							      	<div class="col-md-12">
								      	<div class="row">
									      	<div class="col-md-6">
									       		<button type="submit" class="btn btn-success">Place Order</button>
									        </div>
									        <div class="col-md-6">
									       		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									    </div>
								    </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</form>

					<div class="col-md-4">
						<img src="resources/images/2.png" class="responsive">
					</div>

					<div class="col-md-4">
						<img src="resources/images/3.png" class="responsive">
					</div>
					</form>
				</div>


				<div class="row">
					<div class="col-md-4">
						<img src="resources/images/4.png" class="responsive">
					</div>

					<div class="col-md-4">
						<img src="resources/images/5.png" class="responsive">
					</div>

					<div class="col-md-4">
						<img src="resources/images/6.png" class="responsive">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<img src="resources/images/7.png" class="responsive">
					</div>

					<div class="col-md-4">
						<img src="resources/images/8.png" class="responsive">
					</div>

					<div class="col-md-4">
						<img src="resources/images/9.png" class="responsive">
					</div>
				</div>
			</div>
			<div class="card-footer" style="text-align: right;">
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>	
				<div class="col-md-3">		
					<button type="submit" class="btn btn-secondary" style="width: 100%;" formaction="menu.php">Place Order</button>
				</div>
				</div>
			</div>
		</div>

	</form>


</div>
</body>


</html>