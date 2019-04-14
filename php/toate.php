<html> 
<head> 
<link rel="stylesheet" href="../css/animallica.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Animallica</title>
</head>
<body style='background-image: url("../media/bg2.jpg");'>
<center><h1 class="title">Toate animalele</h1></center>
<div style="padding:0px;margin:0px;">
<a href="../index.php">
<img src="../media/menu1.png" width="20%" id="horizontalMenu1" style="float:left;">
</a>
<a href="./random.php">
<img src="../media/menu2.png" width="20%" id="horizontalMenu2" style="float:left;">
</a>
<a href="./toate.php">
<img src="../media/menu3.png" width="20%" id="horizontalMenu3" style="float:left;">
</a>
<a href="./adauga.php">
<img src="../media/menu4.png" width="20%" id="horizontalMenu4" style="float:left;">
</a>
<a href="./despre.php">
<img src="../media/menu5.png" width="20%" id="horizontalMenu5" style="float:left;">
</a>
</div>
<br>
<?php include('../dbconnection.php');
$result = mysqli_query($connection, "Select * from anunturi");

?>

<br>
<?php
while($anunt = mysqli_fetch_assoc($result)){
echo '<div style="overflow:auto; background-color:rgba(255,255,255,0.3);">';
echo '<img src="'.$anunt['poza'].'" width=300 style="float:left;" border=5>';
echo '<p class="titluAnunt">'.$anunt['animal']. '</p>';
echo '<p class="descAnunt">'.$anunt['descriere'].'</p>';
if(strstr($anunt['pret'],"Gratuit")) echo '<p class="descAnunt">'."Pret: <font color=green>".$anunt['pret'].'</font></p>';
	else echo '<p class="descAnunt">'."Pret: ".$anunt['pret'].'</p>';
echo '<p class="descAnunt">'."Localitate: ".$anunt['localitate'].'</p>';
echo '<p class="descAnunt">'."Contact: ".$anunt['contact'].'</p>';
echo '</div><br>';
}
?>
<script src="../js/menu.js"></script>
</body> 
</html>
