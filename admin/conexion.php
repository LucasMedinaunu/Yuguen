<?php
//Archivo que me permite conectarme a la BD


//Datos del Servidor
$server = "localhost";
$username = "root";
$password = "";
$bd = "yuguen_bd";

//Creo la conexion
$conn = mysqli_connect($server,$username,$password,$bd);

//Chequeo la conexion
if(!$conn){
    die("Conexion Fallida:" . mysqli_connect_errno());
}


?>