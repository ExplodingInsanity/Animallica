<html> 
<head> 
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/animallica.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Animallica</title>
</head>
<body style='background-image: url("../media/bg0.jpg");'>
<center><a href=""><h1 class="title">Animal Aleatoriu</h1></a></centeR>

<?php include('../dbconnection.php');
$result = mysqli_query($connection, "Select count(id) from anunturi");
$nrAnunturi = mysqli_fetch_array($result)[0];

$idAnuntRandom = rand(1,$nrAnunturi);
$result = mysqli_query($connection, "Select * from anunturi where id=".$idAnuntRandom);
$anunt = mysqli_fetch_assoc($result);
?>
<div style="overflow:auto; background-color:rgba(255,255,255,0.6); position:absolute; top:30%;">
<br>
<?php
echo '<img src="'.$anunt['poza'].'" width=300 style="float:left;" border=5>';
echo '<p class="titluAnunt">'.$anunt['animal']. '</p>';
echo '<p class="descAnunt">'.$anunt['descriere'].'</p>';
if(strstr($anunt['pret'],"Gratuit")) echo '<p class="descAnunt">'."Pret: <font color=green>".$anunt['pret'].'</font></p>';
	else echo '<p class="descAnunt">'."Pret: ".$anunt['pret'].'</p>';
echo '<p class="descAnunt">'."Localitate: ".$anunt['localitate'].'</p>';
echo '<p class="descAnunt">'."Contact: ".$anunt['contact'].'</p>';
?>
</div>
<center><a href="../index.php"><p style="position:absolute; bottom:0; left:45%; color:red">Animallica</p></a></center>
<script src="../js/index.js"></script>
</body> 
</html>
