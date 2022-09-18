<?php
include("funciones.php");
include_once("conexion.php");

class persona{
    private $user;
    private $password;

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
   
    public function ingresarPersona(){
        $persona = new funciones();

        $persona ->ingresarPersona($this->user, $this->password);

    }
}
?>