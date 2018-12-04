
<?php
include_once("accessdb.php");

$selecttotal = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata");
$rowtotal = $selecttotal->fetch(PDO::FETCH_ASSOC);

$selecttotalplastic = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata");
$rowtotalplastic = $selecttotalplastic->fetch(PDO::FETCH_ASSOC);


$selecttotalvolunteer = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata");
$rowtotalvolunteer = $selecttotalvolunteer->fetch(PDO::FETCH_ASSOC);


$selecttotalnonplastic = $conn->query("SELECT sum(TINY_TRASH) as 'ttrash', sum(OTHER_TRASH) as 'otrash', sum(GLASS_METALS) as 'gm', sum(FISHING_GEAR) as 'fg', ( sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totalnonplastic' FROM tbldata");
$rowtotalnonplastic = $selecttotalnonplastic->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcs = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata");
$rowtotaltrashpcs = $selecttotaltrashpcs->fetch(PDO::FETCH_ASSOC);

$selecttotalsumm = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata");
$rowtotalsumm = $selecttotalsumm->fetch(PDO::FETCH_ASSOC);  

//STA CRUZ

$selecttotalvolunteerstacruz = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Sta. Cruz'");
$rowtotalvolunteerstacruz = $selecttotalvolunteerstacruz->fetch(PDO::FETCH_ASSOC);

$selecttotalsummstacruz = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Sta. Cruz'");
$rowtotalsummstacruz = $selecttotalsummstacruz->fetch(PDO::FETCH_ASSOC);  

$selecttotalstacruz = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Sta. Cruz'");
$rowtotalstacruz = $selecttotalstacruz->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticstacruz = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Sta. Cruz'");
$rowtotalplasticstacruz = $selecttotalplasticstacruz->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcsstacruz = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Sta. Cruz'");
$rowtotaltrashpcsstacruz = $selecttotaltrashpcsstacruz->fetch(PDO::FETCH_ASSOC);

// end of sta cruz

// candelaria
$selecttotalvolunteercandelaria = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Candelaria'");
$rowtotalvolunteercandelaria = $selecttotalvolunteercandelaria->fetch(PDO::FETCH_ASSOC);

$selecttotalsummcandelaria = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Candelaria'");
$rowtotalsummcandelaria = $selecttotalsummcandelaria->fetch(PDO::FETCH_ASSOC);  

$selecttotalcandelaria = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Candelaria'");
$rowtotalcandelaria = $selecttotalcandelaria->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticcandelaria = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Candelaria'");
$rowtotalplasticcandelaria = $selecttotalplasticcandelaria->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcscandelaria = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Candelaria'");
$rowtotaltrashpcscandelaria = $selecttotaltrashpcscandelaria->fetch(PDO::FETCH_ASSOC);
// end of candelaria

// masinloc
$selecttotalvolunteermasinloc = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Masinloc'");
$rowtotalvolunteermasinloc = $selecttotalvolunteermasinloc->fetch(PDO::FETCH_ASSOC);

$selecttotalsummmasinloc = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Masinloc'");
$rowtotalsummmasinloc = $selecttotalsummmasinloc->fetch(PDO::FETCH_ASSOC);  

$selecttotalmasinloc = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Masinloc'");
$rowtotalmasinloc = $selecttotalmasinloc->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticmasinloc = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Masinloc'");
$rowtotalplasticmasinloc = $selecttotalplasticmasinloc->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcsmasinloc = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Masinloc'");
$rowtotaltrashpcsmasinloc = $selecttotaltrashpcsmasinloc->fetch(PDO::FETCH_ASSOC);
// end of masinloc

// palauig
$selecttotalvolunteerpalauig = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Palauig'");
$rowtotalvolunteerpalauig = $selecttotalvolunteerpalauig->fetch(PDO::FETCH_ASSOC);

$selecttotalsummpalauig = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Palauig'");
$rowtotalsummpalauig = $selecttotalsummpalauig->fetch(PDO::FETCH_ASSOC);  

$selecttotalpalauig = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Palauig'");
$rowtotalpalauig = $selecttotalpalauig->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticpalauig = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Palauig'");
$rowtotalplasticpalauig = $selecttotalplasticpalauig->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcspalauig = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Palauig'");
$rowtotaltrashpcspalauig = $selecttotaltrashpcspalauig->fetch(PDO::FETCH_ASSOC);
// end of palauig

// iba
$selecttotalvolunteeriba = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Iba'");
$rowtotalvolunteeriba = $selecttotalvolunteeriba->fetch(PDO::FETCH_ASSOC);

$selecttotalsummiba = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Iba'");
$rowtotalsummiba = $selecttotalsummiba->fetch(PDO::FETCH_ASSOC);  

$selecttotaliba = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Iba'");
$rowtotaliba = $selecttotaliba->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticiba = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Iba'");
$rowtotalplasticiba = $selecttotalplasticiba->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcsiba = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Iba'");
$rowtotaltrashpcsiba = $selecttotaltrashpcsiba->fetch(PDO::FETCH_ASSOC);
// end of iba

// botolan
$selecttotalvolunteerbotolan = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Botolan'");
$rowtotalvolunteerbotolan = $selecttotalvolunteerbotolan->fetch(PDO::FETCH_ASSOC);

$selecttotalsummbotolan = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Botolan'");
$rowtotalsummbotolan = $selecttotalsummbotolan->fetch(PDO::FETCH_ASSOC);  

$selecttotalbotolan = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Botolan'");
$rowtotalbotolan = $selecttotalbotolan->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticbotolan = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Botolan'");
$rowtotalplasticbotolan = $selecttotalplasticbotolan->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcsbotolan = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Botolan'");
$rowtotaltrashpcsbotolan = $selecttotaltrashpcsbotolan->fetch(PDO::FETCH_ASSOC);
// end of botolan

// cabangan
$selecttotalvolunteercabangan = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Cabangan'");
$rowtotalvolunteercabangan = $selecttotalvolunteercabangan->fetch(PDO::FETCH_ASSOC);

$selecttotalsummcabangan = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Cabangan'");
$rowtotalsummcabangan = $selecttotalsummcabangan->fetch(PDO::FETCH_ASSOC);  

$selecttotalcabangan = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Cabangan'");
$rowtotalcabangan = $selecttotalcabangan->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticcabangan = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Cabangan'");
$rowtotalplasticcabangan = $selecttotalplasticcabangan->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcscabangan = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Cabangan'");
$rowtotaltrashpcscabangan = $selecttotaltrashpcscabangan->fetch(PDO::FETCH_ASSOC);
// end of cabangan

// sanfelipe
$selecttotalvolunteersanfelipe = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'San Felipe'");
$rowtotalvolunteersanfelipe = $selecttotalvolunteersanfelipe->fetch(PDO::FETCH_ASSOC);

$selecttotalsummsanfelipe = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'San Felipe'");
$rowtotalsummsanfelipe = $selecttotalsummsanfelipe->fetch(PDO::FETCH_ASSOC);  

$selecttotalsanfelipe = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'San Felipe'");
$rowtotalsanfelipe = $selecttotalsanfelipe->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticsanfelipe = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'San Felipe'");
$rowtotalplasticsanfelipe = $selecttotalplasticsanfelipe->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcssanfelipe = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'San Felipe'");
$rowtotaltrashpcssanfelipe = $selecttotaltrashpcssanfelipe->fetch(PDO::FETCH_ASSOC);
// end of sanfelipe

// sannarciso
$selecttotalvolunteersannarciso = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'San Narciso'");
$rowtotalvolunteersannarciso = $selecttotalvolunteersannarciso->fetch(PDO::FETCH_ASSOC);

$selecttotalsummsannarciso = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'San Narciso'");
$rowtotalsummsannarciso = $selecttotalsummsannarciso->fetch(PDO::FETCH_ASSOC);  

$selecttotalsannarciso = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'San Narciso'");
$rowtotalsannarciso = $selecttotalsannarciso->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticsannarciso = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'San Narciso'");
$rowtotalplasticsannarciso = $selecttotalplasticsannarciso->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcssannarciso = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'San Narciso'");
$rowtotaltrashpcssannarciso = $selecttotaltrashpcssannarciso->fetch(PDO::FETCH_ASSOC);
// end of sannarciso

// sanantonio
$selecttotalvolunteersanantonio = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'San Antonio'");
$rowtotalvolunteersanantonio = $selecttotalvolunteersanantonio->fetch(PDO::FETCH_ASSOC);

$selecttotalsummsanantonio = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'San Antonio'");
$rowtotalsummsanantonio = $selecttotalsummsanantonio->fetch(PDO::FETCH_ASSOC);  

$selecttotalsanantonio = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'San Antonio'");
$rowtotalsanantonio = $selecttotalsanantonio->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticsanantonio = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'San Antonio'");
$rowtotalplasticsanantonio = $selecttotalplasticsanantonio->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcssanantonio = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'San Antonio'");
$rowtotaltrashpcssanantonio = $selecttotaltrashpcssanantonio->fetch(PDO::FETCH_ASSOC);
// end of sanantonio

// sanmarcelino
$selecttotalvolunteersanmarcelino = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'San Marcelino'");
$rowtotalvolunteersanmarcelino = $selecttotalvolunteersanmarcelino->fetch(PDO::FETCH_ASSOC);

$selecttotalsummsanmarcelino = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'San Marcelino'");
$rowtotalsummsanmarcelino = $selecttotalsummsanmarcelino->fetch(PDO::FETCH_ASSOC);  

$selecttotalsanmarcelino = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'San Marcelino'");
$rowtotalsanmarcelino = $selecttotalsanmarcelino->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticsanmarcelino = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'San Marcelino'");
$rowtotalplasticsanmarcelino = $selecttotalplasticsanmarcelino->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcssanmarcelino = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'San Marcelino'");
$rowtotaltrashpcssanmarcelino = $selecttotaltrashpcssanmarcelino->fetch(PDO::FETCH_ASSOC);
// end of sanmarcelino

// castillejos
$selecttotalvolunteercastillejos = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Castillejos'");
$rowtotalvolunteercastillejos = $selecttotalvolunteercastillejos->fetch(PDO::FETCH_ASSOC);

$selecttotalsummcastillejos = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Castillejos'");
$rowtotalsummcastillejos = $selecttotalsummcastillejos->fetch(PDO::FETCH_ASSOC);  

$selecttotalcastillejos = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Castillejos'");
$rowtotalcastillejos = $selecttotalcastillejos->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticcastillejos = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Castillejos'");
$rowtotalplasticcastillejos = $selecttotalplasticcastillejos->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcscastillejos = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Castillejos'");
$rowtotaltrashpcscastillejos = $selecttotaltrashpcscastillejos->fetch(PDO::FETCH_ASSOC);
// end of castillejos

// subic
$selecttotalvolunteersubic = $conn->query("SELECT sum(volunteers) as 'totalvolunteer' FROM tbldata WHERE MUNICIPALITY = 'Subic'");
$rowtotalvolunteersubic = $selecttotalvolunteersubic->fetch(PDO::FETCH_ASSOC);

$selecttotalsummsubic = $conn->query("SELECT sum(DISTANCE) as 'totaldistance', sum(TRASH_BAGS) as 'totaltrashbags', sum(TINY_TRASH) as 'totaltinytrash', sum(OTHER_TRASH) as 'totalothertrash', sum(GLASS_METALS) as 'totalglassmetals', sum(FISHING_GEAR) as 'totalfishinggear' FROM tbldata WHERE MUNICIPALITY = 'Subic'");
$rowtotalsummsubic = $selecttotalsummsubic->fetch(PDO::FETCH_ASSOC);  

$selecttotalsubic = $conn->query("SELECT sum(weight) as 'totalweight' FROM tbldata WHERE MUNICIPALITY = 'Subic'");
$rowtotalsubic = $selecttotalsubic->fetch(PDO::FETCH_ASSOC);

$selecttotalplasticsubic = $conn->query("SELECT sum(plastic) as 'totalplastic' FROM tbldata WHERE MUNICIPALITY = 'Subic'");
$rowtotalplasticsubic = $selecttotalplasticsubic->fetch(PDO::FETCH_ASSOC);

$selecttotaltrashpcssubic = $conn->query("SELECT (sum(PLASTIC) + sum(TINY_TRASH) + sum(OTHER_TRASH) + sum(GLASS_METALS) + sum(FISHING_GEAR)) as 'totaltrashpcs' FROM tbldata WHERE MUNICIPALITY = 'Subic'");
$rowtotaltrashpcssubic = $selecttotaltrashpcssubic->fetch(PDO::FETCH_ASSOC);
// end of subic

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="John Dave Espinosa">
    <link rel="icon" type="resources/admindesign/image/png" sizes="16x16" href="resources/images/ICCLogo.png">
    <title>Zambales Coastal Cleanup</title>

    <link rel="stylesheet" href="resources/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/Font-Awesome-v5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="resources/customcss/navbar.css">
    <script src="resources/bootstrap-4.0.0/dist/js/jquery-3.3.1.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap-4.0.0/dist/js/popper.min.js"></script>

    <style>
    body, html {
    /*height: 100%;
    background-color: #F4F4F4;
    overflow-x: hidden;*/
    }

    // best seen at 1500px or less

html, body {  }
body {
  background:radial-gradient(ellipse at center, rgba(255,254,234,1) 0%, rgba(255,254,234,1) 35%, #B7E8EB 100%);
  overflow: hidden;
}
li{
  list-style: none;
}

.ocean { 
  height: 20%;
  width:100%;
  position:relative;
  bottom:0;
  left:0;
  background: #015871;
  z-index: -1;
}

.wave {
  background: url(resources/images/wave.svg) repeat-x; 
  position: absolute;
  top: -158px;
  width: 6400px;
  height: 198px;
  animation: wave 50s cubic-bezier( 0.36, 0.45, 0.63, 0.53) infinite;
  transform: translate3d(0, 0, 0);
  z-index: -1;
}

.wave:nth-of-type(2) {
  top: -155px;
  animation: wave 35s cubic-bezier( 0.36, 0.45, 0.63, 0.53) 1s infinite, swell 10s ease 10s infinite;
  opacity: 1;
}

@keyframes wave {
  0% {
    margin-left: 0;
  }
  100% {
    margin-left: -1600px;
  }
}

@keyframes swell {
  0%, 100% {
    transform: translate3d(0,-25px,0);
  }
  50% {
    transform: translate3d(0,5px,0);
  }
}
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    hr{
        width: 50%;

    }
    .mapzindex{
      z-index: 2;
    }
    .desktop-display{
        display: block;
    }
    .mobile-display{
        display:none;
    }

      @media (max-width: 800px){
        body{
          
          overflow-y: scroll;
        }
      .desktop-display{
          display: none;
      }
      .mobile-display{
          display: block;
      }

    }
    .gradient-card {
      background: linear-gradient(to right, #d5f1ea00; , #f7f7f7);
    }
    .bringinfront{
      z-index: 2;
    }
    </style>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="desktop-display">
      <div class="row">
          <div class="col-md-6" style="padding-top: 22vh;">
              <div class="row" style="padding-left: 3%;">
                  <div class="col-md-6">
                      <h2 class="display-5">Total Trash: (Kg)</h2>
                      <h3 class="display-5"><?php echo $rowtotal['totalweight']; ?></h3>

                      <hr align="left">
                  </div>

                  <div class="col-md-6">
                      <h2 class="display-5" align="right">Plastic: </h2>
                      <h3 class="display-5" align="right"><?php echo $rowtotalplastic['totalplastic']; ?></h3>
                      <hr align="right">
                  </div>
              </div>
              <div class="row" style="padding-left: 3%;">
                  <div class="col-md-6">
                      <h2 class="display-5">Total Trash: (Pcs)</h2>
                      <h3 class="display-5"><?php echo $rowtotaltrashpcs['totaltrashpcs']; ?></h3>
                      <hr align="left">
                  </div>
                  <div class="col-md-6">
                      <h2 class="display-5" align="right">Non-Plastic:</h2>
                      <h3 class="display-5"align="right"><?php echo $rowtotalnonplastic['totalnonplastic']; ?></h3>
                      <hr align="right">
                  </div>
              </div>

                 <div class="row" style="padding-left: 3%;">
                  <div class="col-md-6">
                      <h2 class="display-5">Total Volunteer:</h2>
                      <h3 class="display-5"><?php echo $rowtotalvolunteer['totalvolunteer']; ?></h3>
                      <hr align="left">
                  </div>
                 
              </div>


              <div class="row" style="padding-top: 5vh;">
                  <h2 class="display-5 " style="color:white;" id="clockbox" align="right"></h2>
              </div>
          </div>
          
          <div class="col-md-3">
              <img class="center" src="resources/images/zambalesmap.png" usemap="#zambalesmap">
              <map name="zambalesmap" class="mapzindex">
                <area  alt="" title="sta cruz" href="http://www.image-maps.com/" shape="poly" coords="29,43,84,39,89,44,121,44,132,31,144,15,156,13,162,21,170,30,179,34,186,39,213,42,217,57,225,76,230,94,230,109,154,121,115,111,112,114,100,110,94,102,90,99,86,102,71,90,64,85,55,87,47,90,33,66,29,49" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="Candelaria" href="http://www.image-maps.com/" shape="poly" coords="101,108,112,114,116,111,155,120,228,110,247,147,129,156,114,163,108,159,104,154,101,153,98,158,90,154,86,141" style="outline:none;" data-toggle="modal" data-target="#candelaria" />

                <area  alt="" title="Masinloc" href="http://www.image-maps.com/" shape="poly" coords="228,190.00000381469727,145,211.00000381469727,133,207.00000381469727,118,218.00000381469727,114,218,111,213,111,211,107,210,105,211,103,212,97,213,94,213,86,208,88,203,86,197,84,191,85,186,90,166.00000762939453,93,161.00000762939453,90,153.00000762939453,98,158.00000762939453,100,153.00000762939453,107,154.00000762939453,106,158.00000762939453,113,163.00000762939453,128,156.00000762939453,248,148.00000762939453" style="outline:none;" data-toggle="modal" data-target="#masinloc" />

                <area  alt="" title="Palauig" href="http://www.image-maps.com/" shape="poly" coords="228,190.00000762939453,144,211.00000762939453,131,208.00000762939453,116,218.00000762939453,106,210.00000762939453,93,213.00000762939453,86,204.00000762939453,77,201.00000762939453,85,223.00000762939453,92,227.00000762939453,88,232.00000762939453,80,229.00000762939453,77,237.00000762939453,86,244.00000762939453,82,247.00000762939453,87,252.00000762939453,90,251.00000762939453,95,258.00000762939453,104,257.00000762939453,125,248.00000762939453,124,245.00000762939453,143,234.00000762939453,153,237.00000762939453,161,234.00000762939453,206,238.00000762939453,207,227.00000762939453" style="outline:none;" data-toggle="modal" data-target="#palauig" />

                <area  alt="" title="Iba" href="http://www.image-maps.com/" shape="poly" coords="96,258,101,255,125,248,124,245,135,234,158,235,206,239,207,272,150,279,147,287,131,296,125,302,112,286" style="outline:none;" data-toggle="modal" data-target="#iba" />

                <area  alt="" title="botolan" href="http://www.image-maps.com/" shape="poly" coords="124,302,136,318,133,333,141,349,152,345,158,345,167,332,206,348,229,393,308,434,311,408,305,374,287,324,280,313,271,306,219,287,207,271,149,278,145,286,140,286" style="outline:none;" data-toggle="modal" data-target="#botolan" />

                <area  alt="" title="cabangan" href="http://www.image-maps.com/" shape="poly" coords="229,393,206,350,167,332,158,340,156,345,154,346,153,344,148,342,145,346,142,350,152,395,157,392" style="outline:none;" data-toggle="modal" data-target="#cabangan" />

                <area  alt="" title="san felipe" href="http://www.image-maps.com/" shape="poly" coords="233,394,154,393,159,435,168,437,184,440,194,426" style="outline:none;" data-toggle="modal" data-target="#sanfelipe" />

                <area  alt="" title="san narciso" href="http://www.image-maps.com/" shape="poly" coords="223,405,210,452,189,461,158,465,159,437,183,440" style="outline:none;" data-toggle="modal" data-target="#sannarciso" />

                <area  alt="" title="san antonio" href="http://www.image-maps.com/" shape="poly" coords="188,461,158,464,157,465,154,484,147,485,129,490,130,497,139,498,152,494,157,493,155,503,151,503,154,513,162,513,160,525,165,544,168,559,178,574,202,583,193,491,206,478,191,471" style="outline:none;" data-toggle="modal" data-target="#sanantonio" />

                <area  alt="" title="san marcelino" href="http://www.image-maps.com/" shape="poly" coords="311,410,329,417,336,461,345,470,267,483,265,473,256,464,237,468,226,470,206,477,191,471,190,462,211,452,223,405,234,395,308,434" style="outline:none;" data-toggle="modal" data-target="#sanmarcelino" />

                <area  alt="" title="castillejos" href="http://www.image-maps.com/" shape="poly" coords="266,483,266,473,256,463,237,468,224,468,204,478,195,489,195,515,204,509,214,512,231,509,232,495,234,488,230,484,249,482,261,486" style="outline:none;" data-toggle="modal" data-target="#castillejos" />

                <area  alt="" title="subic" href="http://www.image-maps.com/" shape="poly" coords="345,489,351,476,346,471,345,469,268,483,263,486,250,481,232,484,231,495,232,509,215,512,206,509,197,515,195,517,205,583,210,578,214,584,222,572,230,548,231,529,226,519,234,515,241,518,246,528,253,525,270,494,279,488" style="outline:none;" data-toggle="modal" data-target="#subic" />

              </map>

          </div>
          <div class="col-md-3">
            <div class="card " style=" background-color: #d5ebe447; border:0;">
              <div class="card-header" style="text-align: center; ">
                <h4>Summary</h4>
              </div>
              <div class="card-body" >
                <div class="row">
                  <div class="col-md-6" style="text-align: right; padding-right: 0; margin:0;">
                    <ul>
                      <li>Distance:</li>
                      <li>Trash Bags:</li>
                      <li>Tiny Trash:</li>
                      <li>Other Trash:</li>
                      <li>Glass Metals:</li>
                      <li>Fishing Gear:</li>
                      
                    </ul>
                  </div>
                  <div class="col-md-6" style="text-align: left; padding-left:0; margin: 0; ">
                    <ul>
                      <li><?php echo $rowtotalsumm['totaldistance']; ?></li>
                      <li><?php echo $rowtotalsumm['totaltrashbags']; ?></li>
                      <li><?php echo $rowtotalsumm['totaltinytrash']; ?></li>
                      <li><?php echo $rowtotalsumm['totalothertrash']; ?></li>
                      <li><?php echo $rowtotalsumm['totalglassmetals']; ?></li>
                      <li><?php echo $rowtotalsumm['totalfishinggear']; ?></li>
                     
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

      </div>

      <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
    </div>

    <div class="mobile-display">
      <div class="row">
          <div class="col-md-3">
              <img class="center" src="resources/images/zambalesmap.png" usemap="#zambalesmap">
              <map name="zambalesmap" class="mapzindex">
                <area  alt="" title="sta cruz" href="http://www.image-maps.com/" shape="poly" coords="29,43,84,39,89,44,121,44,132,31,144,15,156,13,162,21,170,30,179,34,186,39,213,42,217,57,225,76,230,94,230,109,154,121,115,111,112,114,100,110,94,102,90,99,86,102,71,90,64,85,55,87,47,90,33,66,29,49" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="Candelaria" href="http://www.image-maps.com/" shape="poly" coords="101,108,112,114,116,111,155,120,228,110,247,147,129,156,114,163,108,159,104,154,101,153,98,158,90,154,86,141" style="outline:none;" data-toggle="modal" data-target="#candelaria" />

                <area  alt="" title="Masinloc" href="http://www.image-maps.com/" shape="poly" coords="228,190.00000381469727,145,211.00000381469727,133,207.00000381469727,118,218.00000381469727,114,218,111,213,111,211,107,210,105,211,103,212,97,213,94,213,86,208,88,203,86,197,84,191,85,186,90,166.00000762939453,93,161.00000762939453,90,153.00000762939453,98,158.00000762939453,100,153.00000762939453,107,154.00000762939453,106,158.00000762939453,113,163.00000762939453,128,156.00000762939453,248,148.00000762939453" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="Palauig" href="http://www.image-maps.com/" shape="poly" coords="228,190.00000762939453,144,211.00000762939453,131,208.00000762939453,116,218.00000762939453,106,210.00000762939453,93,213.00000762939453,86,204.00000762939453,77,201.00000762939453,85,223.00000762939453,92,227.00000762939453,88,232.00000762939453,80,229.00000762939453,77,237.00000762939453,86,244.00000762939453,82,247.00000762939453,87,252.00000762939453,90,251.00000762939453,95,258.00000762939453,104,257.00000762939453,125,248.00000762939453,124,245.00000762939453,143,234.00000762939453,153,237.00000762939453,161,234.00000762939453,206,238.00000762939453,207,227.00000762939453" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="Iba" href="http://www.image-maps.com/" shape="poly" coords="96,258,101,255,125,248,124,245,135,234,158,235,206,239,207,272,150,279,147,287,131,296,125,302,112,286" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="botolan" href="http://www.image-maps.com/" shape="poly" coords="124,302,136,318,133,333,141,349,152,345,158,345,167,332,206,348,229,393,308,434,311,408,305,374,287,324,280,313,271,306,219,287,207,271,149,278,145,286,140,286" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="cabangan" href="http://www.image-maps.com/" shape="poly" coords="229,393,206,350,167,332,158,340,156,345,154,346,153,344,148,342,145,346,142,350,152,395,157,392" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="san felipe" href="http://www.image-maps.com/" shape="poly" coords="233,394,154,393,159,435,168,437,184,440,194,426" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="san narciso" href="http://www.image-maps.com/" shape="poly" coords="223,405,210,452,189,461,158,465,159,437,183,440" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="san antonio" href="http://www.image-maps.com/" shape="poly" coords="188,461,158,464,157,465,154,484,147,485,129,490,130,497,139,498,152,494,157,493,155,503,151,503,154,513,162,513,160,525,165,544,168,559,178,574,202,583,193,491,206,478,191,471" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="san marcelino" href="http://www.image-maps.com/" shape="poly" coords="311,410,329,417,336,461,345,470,267,483,265,473,256,464,237,468,226,470,206,477,191,471,190,462,211,452,223,405,234,395,308,434" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="castillejos" href="http://www.image-maps.com/" shape="poly" coords="266,483,266,473,256,463,237,468,224,468,204,478,195,489,195,515,204,509,214,512,231,509,232,495,234,488,230,484,249,482,261,486" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

                <area  alt="" title="subic" href="http://www.image-maps.com/" shape="poly" coords="345,489,351,476,346,471,345,469,268,483,263,486,250,481,232,484,231,495,232,509,215,512,206,509,197,515,195,517,205,583,210,578,214,584,222,572,230,548,231,529,226,519,234,515,241,518,246,528,253,525,270,494,279,488" style="outline:none;" data-toggle="modal" data-target="#stacruz" />

              </map>

          </div>
          <div class="col-md-6" style="padding-top: 15vh;">
              <div class="row" style="padding-left: 3%;">
                  <div class="col-md-6">
                      <h2 class="display-5">Total Trash:</h2>
                      <h3 class="display-5"><?php echo $rowtotal['totalweight']; ?></h3>
                      <hr align="left">
                  </div>
                  <div class="col-md-6">
                      <h2 class="display-5" >Plastic: </h2>
                      <h3 class="display-5" ><?php echo $rowtotalplastic['totalplastic']; ?></h3>
                      <hr align="left">
                  </div>
              </div>
              <div class="row" style="padding-left: 3%;">
                  <div class="col-md-6">
                      <h2 class="display-5">Total Volunteer:</h2>
                      <h3 class="display-5"><?php echo $rowtotalvolunteer['totalvolunteer']; ?></h3>
                      <hr align="left">
                  </div>
                  <div class="col-md-6">
                      <h2 class="display-5">Non-Plastic</h2>
                      <h3 class="display-5"><?php echo $rowtotalnonplastic['totalnonplastic']; ?></h3>
                      <hr align="left">
                  </div>
              </div>
              <div class="row" style="">
                  <h2 class="bringinfront" style="color:white;" id="clockbox"></h2>
              </div>
          </div>
          <div class="col-md-3">
            <div class="card " style=" background-color: #d5ebe447; border:0;">
              <div class="card-header" style="text-align: center; ">
                <h4>Summary</h4>
              </div>
              <div class="card-body" >
                <div class="row">
                  <div class="col-md-6" style="text-align: center; padding-right: 0; margin:0;">
                    <ul>
                      <li>Distance: <?php echo $rowtotalsumm['totaldistance']; ?></li>
                      <li>Trash Bags: <?php echo $rowtotalsumm['totaltrashbags']; ?></li>
                      <li>Tiny Trash: <?php echo $rowtotalsumm['totaltinytrash']; ?></li>
                      <li>Other Trash: <?php echo $rowtotalsumm['totalothertrash']; ?></li>
                      <li>Glass Metals: <?php echo $rowtotalsumm['totalglassmetals']; ?></li>
                      <li>Fishing Gear: <?php echo $rowtotalsumm['totalfishinggear']; ?></li>
                      
                    </ul>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>

      </div>
    </div>


    <?php include("modalpops.php");?>
</body>
<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=nhour+":"+nmin+":"+nsec+ap+"<br />"+" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+tmonth[nmonth]+" "+ndate+", "+nyear+" ";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>

</html>