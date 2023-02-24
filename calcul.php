<!DOCTYPE html>
<html>
<body style="background-color:#005ce6;color:white;style:font-size:60px;">

<?php
 
$t1 = htmlspecialchars($_POST['chiffre1']);
$t2 = htmlspecialchars($_POST['chiffre2']);
$op = ($_POST['operateur']);


if ($op != 1){
		if ($op != 2){
			
				if ($op != 3){
				$resultat= $t1 / $t2;
				}
				else {
				$resultat= $t1 * $t2;
				}
		}
		else {
			$resultat= $t1 - $t2;
		}
}		
else {
$resultat= $t1 + $t2;
}


?>
<br>
<div style="font-size:60px;" align="center">Réponse: <?php echo $resultat; ?></div>
<div style="font-size:60px;" align="center"> <a href="index2.php">Recommencer</a>
</div>
</body>
</html>
