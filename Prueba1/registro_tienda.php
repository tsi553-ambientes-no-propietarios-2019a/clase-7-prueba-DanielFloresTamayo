<?php 
/*if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}*/
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">TiendaEC</h1>
	</head>
	<body>
<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } 

?>


<form action="php/process_registration.php" method="post">
     <center>
     <h2 align = "center" >Registro de tienda</h2>
     <div>
     <label>Nombre de tienda : <input type="text"  name="tienda" required ="required"  /></label>
     </div>
     <br>
     <div>
     <label>Usuario : <input type="text" name="user" required ="required"  /></label>
     </div>
     <br>
     <div>
     <label>Clave : <input type ="password" name = "pass"  required ="required"></label>
     </div>
     <br>
     <div>
     <label>Repetir clave : <input type ="password" name = "pass1"  required ="required"></label>
     </div>
     </center>
      <br>
      <center><input type="submit" value="REGISTRAR"/> </center>
</form>
   

	</body>

</html>	






