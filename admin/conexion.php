<?php
//Archivo que me permite conectarme a la BD

class Conexion {
    private $nombreServidor = "localhost";
    private $nombreUsuario = "root";
    private $contraseña = "";
    private $bd = "yuguen_bd";
    private $con;

    public function Conectar()
    {
        $this->con = new mysqli($this->nombreServidor, $this->nombreUsuario, $this->contraseña, $this->bd);
        if ($this->con->connect_error) {
            $this->con = new mysqli($this->nombreServidor, $this->nombreUsuario, 'admin', $this->bd);
            if($this->con->connect_error){

            die("Error al conectarse " . $this->con->connect_error);

            } else {

                return $this->con;

            }
        } else {
            return $this->con;
        }

    }
    public function Desconectar()
    {
        $this->con->close();
    }
}
?>