<html> 
<head> 
<link rel="stylesheet" href="../css/animallica.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
h1{font-size:45;}
p{font-family:Helvetica; font-size:25; color:black;}
</style>

<title>Animallica</title>
</head>
<body bgcolor="#FAE8C8">
<center><h1 class="title">Despre noi</h1></center>
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
<?php include('../dbconnection.php');?>
<h1>Ce suntem noi?</h1>
<p> Animallica este un petshop, unde oricine poate sa isi puna anunturile. </p>
<h1>De ce?</h1>
<p> Sunt atatea animale care ar avea nevoie de un camin, si vrem sa rezolvam problema cu animalele fara stapan, sau o parte din ele, intr-un mod preventiv.</p>
<h1>Cine?</h1>
<p>Voi! Acest site se bazeaza complet pe contributia oamenilor prin adaugarea de anunturi pentru a putea fi descoperite de cei care sunt in cautare de un animal de companie. Astfel ne ajutam unii pe altii.
<br>
Eu! Echipa noastra este formata dintr-o singura persoana deocamdata. Eu, Sima Mihaela, sunt moderatorul site-ului, sunt studenta la Colegiul National "Horea Closca si Crisan" Alba Iulia, la profil de matematica-informatica, ceea ce m-a ajutat sa dau nastere acestui micut proiect al meu.</p>
<h1>Cat?</h1>
<p>
<?php 
$countRes = mysqli_query($connection,"select count(id) from anunturi");
$count = mysqli_fetch_array($countRes)[0];
echo "in prezent site-ul nostru contine ". $count ." anunturi, toate posibile animale de companie pentru voi!"; ?>
</p>
<script src="../js/menu.js"></script>
</body> 
</html>
