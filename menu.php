<?php
include_once("accessdb.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="resources/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/Font-Awesome-v5/css/fontawesome-all.min.css">

    <script src="resources/bootstrap-4.0.0/dist/js/jquery-3.3.1.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/popper.min.js"></script>

    <style>
    	label{
    		text-align: left;
    	}
    	.center{
			width: 130px;
  			margin: 40px auto;
  
		}

		/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
input{
	width: 70px;
}

body{
	padding-top: 40px;
}

.responsive {
    width: 100%;
    height: auto;
}
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
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

<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<h1>Bon's Menu</h1>
			<form>
				<label><b>Waiter's Name: </b><input type="text" name="" value=" Ivan D. Doropan" readonly style="width: 200px; height: 30px; border-style: none;"></label>
				<div class="row">
					<div class="col-md-6">
						<label>Order ID</label>
						<input type="text" name="orderid" class="form-control">
					</div>

					<div class="col-md-6">
						<label>Time in</label><br>
						<label id="date_time"></label>
					</div>
				</div>
			</form>
				
					
					<h2>Menu Tabs</h2>
						<p>Click on the buttons inside the tabbed menu:</p>

						<div class="tab">
						  <button class="tablinks" onclick="openCity(event, 'London')">Noodles</button>
						  <button class="tablinks" onclick="openCity(event, 'Paris')">SeaFood</button>
						  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Meat & Poultry</button>
						  <button class="tablinks" onclick="openCity(event, 'Beverage')">Vegetables</button>
						  <button class="tablinks" onclick="openCity(event, 'Dessert')">Dessert</button>
						  <button class="tablinks" onclick="openCity(event, 'Ad Onz')">Ad Onz</button>
						</div>

						<div id="London" class="tabcontent">
						  <h3>Choose Your Noodles</h3>
						  	<div class="row">
						  		<div class="col-md-4" style="margin-bottom: 10px;">
						  			<label>Pancit Seafood</label>
						  			<a href="#pancit" role="button" data-toggle="modal"> <img src="resources/images/pancitseafood.png" class="responsive"></a>	
						  		</div>

						  		<div class="col-md-4" style="margin-bottom: 10px;">
						  			<label>Common Pancit</label>
						  			<a href="#pancitcommon" role="button" data-toggle="modal"><img src="resources/images/pancit.png" class="responsive"></a>
						  		</div>
						  		<div class="col-md-4" style="margin-bottom: 10px;">
						  			<label>Pancit Miki Bihon</label>
						  			<a href="#pancitmb" role="button" data-toggle="modal"><img src="resources/images/pancitmikibihon.png" class="responsive"></a>
						  		</div>		
						  	</div>

						  	<div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#pancitcanton" role="button" data-toggle="modal"><img src="resources/images/pancitcanton.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#lomi" role="button" data-toggle="modal"><img src="resources/images/lomi.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#chowmien" role="button" data-toggle="modal"><img src="resources/images/chowmien.png" class="responsive"></a>
							  	</div>
							</div>

							<div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#beefmami" role="button" data-toggle="modal"><img src="resources/images/beefmami.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#chickenmami" role="button" data-toggle="modal"><img src="resources/images/chickenmami.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#supermami" role="button" data-toggle="modal"><img src="resources/images/supermami.png" class="responsive"></a>
							  	</div>
							</div>

							<div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#pancitsotanghon" role="button" data-toggle="modal"><img src="resources/images/pancitsotanghon.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#pancitmalabon" role="button" data-toggle="modal"><img src="resources/images/pancitmalabon.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#pancitpalabok" role="button" data-toggle="modal"><img src="resources/images/pancitpalabok.png" class="responsive"></a>
							  	</div>
							</div>

						</div>

						<div id="Paris" class="tabcontent">
						  <h3>Choose Your Sea Food</h3>
						  	<div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#butteredshrimp" role="button" data-toggle="modal"><img src="resources/images/butteredshrimp.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#kilawingpusit" role="button" data-toggle="modal"><img src="resources/images/kilawingpusit.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#adobongpusit" role="button" data-toggle="modal"><img src="resources/images/adobongpusit.png" class="responsive"></a>
							  	</div>
							 </div> 

							  <div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#fishfillet" role="button" data-toggle="modal"><img src="resources/images/fishfillet.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#calamares" role="button" data-toggle="modal"><img src="resources/images/calamares.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#tempura" role="button" data-toggle="modal"><img src="resources/images/tempura.png" class="responsive">
							  	</div></a>
							  </div> 

							  <div class="row">
							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#seafoodcurry" role="button" data-toggle="modal"><img src="resources/images/seafoodcurry.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#fishfilletsweetandsour" role="button" data-toggle="modal"><img src="resources/images/fishfilletsweetandsour.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<a href="#squidwithoystersauce" role="button" data-toggle="modal"><img src="resources/images/squidwithoystersauce.png" class="responsive"></a>
							  	</div>
							  </div>

							  <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<a href="#sinigangnatanigue" role="button" data-toggle="modal"><img src="resources/images/sinigangnatanigue.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<a href="#shrimpwithoystersauce" role="button" data-toggle="modal"><img src="resources/images/shrimpwithoystersauce.png" class="responsive"></a>
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">

							  	</div>
							  </div>  
						</div>

						<div id="Tokyo" class="tabcontent">
						  <h3>Choose Your Meat</h3>
							<div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/karekare.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/asado.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/sweetandsourpork.png" class="responsive">
							  	</div>
							 </div>  

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/liverwithonion.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/beefwithyoungcorn.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/chickenteriyaki.png" class="responsive">
							  	</div>
							 </div>

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/lemonchicken.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/orangechicken.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/chickencurry.png" class="responsive">
							  	</div>
							 </div>

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/beefsteak.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/beeftapa.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/salpicao.png" class="responsive">
							  	</div>
							 </div> 

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/beefcaldereta.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/papaitangbaka.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/hotchickenwings.png" class="responsive">
							  	</div>
							 </div> 

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/lechonkawali.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/sisig.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/porksinigang.png" class="responsive">
							  	</div>
							 </div>   

							  <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/bulalo.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/crispypata.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/friedchicken.png" class="responsive">
							  	</div>
							 </div>  
						</div>

						<div id="Beverage" class="tabcontent">
						  <h3>Choose Your Vegetable</h3>
						   <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/beefbrocoli.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/shrimpbrocoli.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/ampalayawithbeef.png" class="responsive">
							  	</div>
							 </div>  

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/chopsuey.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/eggfooyoung.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/chicharowithshrimp.png" class="responsive">
							  	</div>
							 </div>  
						</div>

						<div id="Dessert" class="tabcontent">
						  <h3>Choose Your Dessert</h3>
						   <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/lecheflan.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/halohalo.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/maisconyelo.png" class="responsive">
							  	</div>
							 </div> 

							 <div class="row">
							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/mangograham.png" class="responsive">
							  	</div>

							  	<div class="col-md" style="margin-bottom: 10px;">
							  		<img src="resources/images/gulaman.png" class="responsive">
							  	</div>

							  	<div class="col-md-4" style="margin-bottom: 10px;">
							  		<img src="resources/images/tapioca.png" class="responsive">
							  	</div>
							 </div>   
						</div>
						<div id="Ad Onz" class="tabcontent">
						  <h3>Choose Your Ad Onz</h3>
						  	

						</div>


			</div>
		</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>




<script>
	function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+'/'+months[month]+'/'+d+'/'+year+'/'+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}
</script>
<script type="text/javascript">window.onload = date_time('date_time');</script>
<?php include("modal.php");?>
<?php include("modalseafood.php");?>
</body>

</html>