<?php
session_start();
include("funciones.php");
//Obtengo la configuracion de la pagina
//para comprobar el usuario y la contrasenia
$config = obtenerConfiguracion();

//pregunto si se presiono el boton inciar
if(isset($_POST['iniciar'])){
    //tomo los datos del cliente
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //compruebo datos
    if($usuario == $config['user'] && ($password==$config['password'])){
        $_SESSION['usuarioLogueado'] = $user;

        //lo mando a la pagina principal
        header("Location: index.php"); 
    }else{
        $mensaje = "* El nombre de usuario o la contrasenia son incorrectos";
    }

}

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
                <div class="contenedor-formulario">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-login">
                     <p>Iniciar Sesion Como <strong>administrador</strong></p>
                     <input type="text" placeholder="Nombre del usuario" name="usuario" required class="input-login">
                     <input type="password" placeholder="Contrasenia" name="password" required class="input-login">
                     <input type="submit" placeholder="Iniciar Sesion" name="Iniciar" class="btn">

                     <!-- Mensaje que se mostrara cuando se haya procesado la solicitud y los datos sean incorrectos -->
                     <?php if(isset($_POST['inciar'])):?>
                        <span class="msj-error-input">
                        <?php echo $mensaje?>
                        </span>
                        <?php endif ?>
                </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>