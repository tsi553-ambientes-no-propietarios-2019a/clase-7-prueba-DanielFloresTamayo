<?php 
include('../common/utils.php');

if ($_POST) {
    if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && ($_POST['pass'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql_insert = "SELECT * FROM tienda WHERE usuario = '$username'
        AND Clave = MD5('$password')";
    $res =	$conn->query($sql);
    if($conn->error){
        redirect(' index.php?error_message=ocurrio un error: ' . $conn->error);
        header('Location: index.php?error_message=ocurrio un error: ' . $conn->error);
            exit;
        }if($res->num_rows = 0){
            while ($row = $res->fetch_assoc()){
                $_SESSION['user'] = [
                    'Username' => $row['username'],
                    'id' => $row['id']
                 ];
                header('Location: ../inicio.php');
            }
        }else{
            header('Location: ../inicio.php');
            exit;
    }}} 

?>