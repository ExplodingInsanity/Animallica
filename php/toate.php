<html> 
<head> 
<link rel="stylesheet" href="../css/animallica.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Animallica</title>
</head>
<body style='background-image: url("../media/bg2.jpg");'>
<center><h1 class="title">Toate animalele</h1></center>
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
<center><p style="color:red"><a href="../index.php">Animallica</a></p></center>
<script src="../js/index.js"></script>
</body> 
</html>
