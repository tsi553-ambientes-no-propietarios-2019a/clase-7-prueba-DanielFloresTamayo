<?php
include('common/utils.php')
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 //align = "center">LOGIN</h1>
	</head>
	<body>
<form method="post">
     <center>
     <div>
     <label>Usuario : <input type="text" name="user" required ="required" placeholder="Usuario"></label>
     </div>
     <br>
     <div>
     <label>Clave : <input type ="password" name = "pass"  required ="required" placeholder="Clave"></label>
     </div>
     </center>
      <br>
      <center><input type="submit" value="INGRESAR"/> </center>
</form>
   

	</body>

</html>	
