<!DOCTYPE html>
<html>
<body style="background-color:#005ce6;color:white;">

<h1 style="font-size:60px;" <div align="center">Calculatrice</h1>
<div align="center">


<form  method="post" action="calcul.php" id="carform">
 <input type="text" name="chiffre1"> 
 
 
 <select id="operateur" name="operateur" form = "carform">
  <option value="1">+</option>
  <option value="2">-</option>
  <option value="3">x</option>
  <option value="4">/</option>
</select>

  <input type="text" name="chiffre2">
<input type="submit" value="CALCULER">


</form>

</body>
</html>