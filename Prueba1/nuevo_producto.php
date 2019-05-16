<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
</head>
<body>

        <header style="text-align: center"> <h1>TiendasEC</h1></header>

        <div>
        <h2 style="text-align: center">Registro de productos</h2>
        <div class="container" style="text-align: center">
                       
                    <form action="php/process_registration.php" method="POST">
                        <div class="form-group" style = "padding-bottom:10px">
                            <label for="Nombre_tienda" style = "padding-rigth: 5px">Nombre de la tienda</label>
                            <input type="text" class="form-control" name="Nombre_tienda" required>
                        </div>
                        <div class="form-group" style = "padding-bottom:10px">
                            <label for="Usuario" style = "padding-right: 80px">Usuario</label>
                            <input type="text" class="form-control" name="Usuario" required>
                        </div>
                        <div class="form-group" style = "padding-bottom:10px">
                            <label for="Contrasena" style = "padding-right: 58px">Contraseña</label>
                            <input type="password" class="form-control" name="Contrasena" required>
                        </div>
                        <div class="form-group" style = "padding-bottom:10px">
                            <label for="Confi_contrasena" style = "padding-right: 10px">Repetir contraseña</label>
                            <input type="password" class="form-control" name="Confi_contrasena" required>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">registrar</button>
                        </div>
                    </form>
                
        </div>
        </div>


    
</body>
</html>