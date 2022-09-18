<?php
session_start();
include("persona.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Yuguen - Login</title>
</head>
<body>
    <div id="contenedor-login">
        <div class="presentacion">
            <div class="titulo">
                <h1>Yuguen</h1>
                <p>Sistema de Administracion</p>
            </div>
                <div class="contenedor-formulario">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-login">
                     <p>Iniciar Sesion Como <strong>administrador</strong></p>
                     <input type="text" placeholder="Nombre del usuario" name="usuario" required class="input-login">
                     <input type="password" placeholder="Contrasenia" name="password" required class="input-login">
                     <input type="submit" placeholder="Iniciar Sesion" name="Iniciar" class="btn">

                     <!-- Mensaje que se mostrara cuando se haya procesado la solicitud y los datos sean incorrectos -->
                     <?php
                        if(isset($_POST['Iniciar'])){
                            //tomo los datos del cliente
                            $usuario = $_POST['usuario'];
                            $password = $_POST['password'];
                      
                            $config = new persona();
                            $config -> setUser($_POST['usuario']);
                            $config -> setPassword($_POST['password']);
                            $config -> ingresarPersona();
                        }
                            
                    ?>
                        <span class="msj-error-input">
                            
                        
                        </span>      
                </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

    