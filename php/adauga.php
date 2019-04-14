<html> 
<head> 
<link rel="stylesheet" href="../css/animallica.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Animallica</title>
</head>
<body style='background-image: url("../media/bg0.jpg");'>
<center><h1 class="title">Adauga anunt</h1></center>
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
if(isset($_POST['update'])){
$nume=$_POST['nume'];
$desc=$_POST['descriere'];
$poza=$_POST['imagine'];
$pret=$_POST['pret'];
$contact=$_POST['contact'];
$localitate=$_POST['localitate'];

$query="INSERT INTO anunturi (animal,descriere,poza,pret,contact,localitate) VALUES ('".$nume."','".$desc."','".$poza."','".$pret."','".$contact."','".$localitate."')";
$result=mysqli_query($connection,$query);
if($result) echo 'Anuntul a fost inregistrat in baza de date.';
else echo 'A aparut o problema la trimiterea anuntului. Va rugam reincercati mai tarizu';
}
?>
<br>
<form action="adauga.php" method="POST">
	Numele animalului: <input type="text" name="nume" required><br><br>
	Descriere: <textarea rows="4" cols="50" name="descriere" required></textarea><br><br>
	Link poza*: <input type="text" name="imagine" required><br><br>
	Pret**: <input type="text" name="pret" required><br><br>
	Contact***: <input type="text" name="contact" required><br><br>
	Localitate: <input type="text" name="localitate" required><br><br>
	<input type="submit" name="update" value="Trimite anuntul">
</form>
* Animallica nu ofera servicii de hostare de fisiere. In acest sens, va rugam sa incarcati imaginile pe un site extern si sa scrieti in campul de imagine doar linkul direct catre imagine. Va multumim pentru intelegere.<br>
** In ceea ce priveste textul, oferim posibilitatea exprimarii acestuia in orice forma. Aveti in vedere faptul ca daca pretul este trecut ca fiind "Gratuit", atunci acesta va aparea cu verde in anunt.<br>
*** Echipa Animallica recomanda folosirea unei adrese de email, evitand astfel divulgarea datelor personale.
<script src="../js/menu.js"></script>
</body> 
</html>
