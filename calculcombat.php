<!DOCTYPE html>
<html>
<body style="background-color:#00b300;color:white;">





<?php

$servername = "localhost";
$username = "tristanomg";
$password = "paqw94pa";
$dbname = "tristanomg";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$post = htmlspecialchars($_POST['choix']);

$email = htmlspecialchars($_POST['email']);
$score = 

$sql =  "SELECT `score` FROM `user` WHERE courriel =  '".$email."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  	$score =  $row ['score'] ;
	  $scoreMinus = $score -1;
	  $scorePlus = $score +1;
	

if ($post == 1) {
	$choix = "Roche";
}
elseif ($post == 2) {
	$choix = "Papier";
}
elseif ($post == 3) {
	$choix = "Ciseau";

}

elseif ($post == 4)  {
    $choix = "Feu";
	
}


$x = rand(1,4);


if ($x == 1) {
	$ordi = "Roche";
}
elseif ($x == 2) {
	$ordi = "Papier";
}
elseif ($x == 3) {
	$ordi = "Ciseau";
}
elseif ($x == 4) {
	$ordi = "Feu";
}
if ($post !=1){
	if ($post !=2){
		if ($post !=3){
			if ($x ==4){
				$resultat="Égalisé";
			}
			elseif ($x ==3){
				$resultat="Gagné";
			$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
				
			}
			elseif ($x ==2){
				$resultat="Gagné";
				$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
			}
			elseif ($x ==1){
				$resultat="Perdu";
				$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
			}
		
		}
	else {
		if ($x ==4){
			$resultat="Perdu";
			$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==3){
			$resultat="Égalisé";
		}
		elseif ($x ==2){
			$resultat="Gagné";
			$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==1){
			$resultat="Perdu";
			$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
		}	
	}
	}
	else 
{
		if ($x ==4){
			$resultat="Perdu";
			$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==3){
			$resultat="Perdu";
			$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==2){
			$resultat="Égalisé";
		}
		elseif ($x ==1){
			$resultat="Gagné";
			$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
		}	
}	
	
}
else 
{
		if ($x ==4){
			$resultat="Gagné";
			$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==3){
			$resultat="Gagné";
			$update=	"UPDATE user SET score = '".$scorePlus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==2){
			$resultat="Perdu";
			$update=	"UPDATE user SET score = '".$scoreMinus."' WHERE courriel ='".$email."'";
		}
		elseif ($x ==1){
			$resultat="Égalisé";
		}	
}



}}









?>

<div align="center" style= "font-size:90px;">
Tu as choisi: <?php echo $choix; ?> <br>
J'ai choisi: <?php echo $ordi; ?> <br>
Tu as <?php echo $resultat; ?> <br>
SCORE TOTAL: <?php echo $score; ?> <br>
<a href="/tristan/combat.php">Recommencer</a>
</div>

</body>
</html>
