<?php 
include('../common/utils.php');

function validar($pass,$pass1){
    if ($pass == $pass1) {
        echo '<pre>';
        echo "Contraseñas validas";
        echo '<br>';
        echo "Tienda registrada correctamente,puede iniciar sesión";
    }else {
        echo '<pre>';
        echo "Las contraseñas no coinciden";
        echo '<br>';
        echo 'USR no registrado';
    
    }
    
    }
    
    

if($_POST) {
	if (isset($_POST['tienda']) && isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['tienda']) && !empty($_POST['user'])) {
        $id = 0;
        $tienda = $_POST['tienda'];
        $username = $_POST['user'];
		$password = $_POST['pass'];
		$sql_insert = "INSERT INTO tienda
		(id,nombre,usr,clave)
		VALUES ('$id','$tienda','$username', MD5('$password'))";
		echo $sql_insert;
        $conn->query($sql_insert);

             
		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
            $id++;
            echo "suma";
            validar($_REQUEST['pass'],$_REQUEST['pass1']);
			redirect('../index.php');
        }
      

	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
    exit;


}

