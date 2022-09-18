<?php
include_once("conexion.php");

class funciones extends conexion{
//funcion para obtener el registro de la configuaracion del sitio
function obtenerConfiguracion(){
    //me conecto a la base de datos
     conexion();

    //compruebo si existe el registro que mantiene la configuracion
    //cuento  la cantidad de registros de la tabla configuracion
    $query = "SELECT COUNT(*) total FROM configuracion";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    if($row['total']=='0'){
        //no existe el registro de la configuracion
        //lo inserto por primera vez
        $query = "INSERT INTO configuracion (id, user, password)
        VALUES (NULL, 'admin', 'admin')";

        if(mysqli_query($conn, $query)){//se inserto correctamente

        }else{
            echo "No se pudo insertar en la BD" . mysqli_errno($conn);
        }
    }

      //selecciono el registro que se inserto o el que ya estaba 
      $query = "SELECT * FROM configuracion WHERE id='1'";
      $result = mysqli_query($conn,$query);
      $config = mysqli_fetch_assoc($result);
  
 return $config;



}

public function ingresarPersona($user, $password){
      $conn=$this->Conectar();
      $query = "SELECT * FROM configuracion WHERE user='".$user."' AND password ='".$password."'";
      $result = $conn -> query($query);
      $config = $result-> fetch_assoc();
      
      if(mysqli_num_rows($result)>0){
            header("Location: index.php"); 
           
          }else{
            echo "Pusite mal las credenciales unu";
              
        }
    }
}




?>