<?php
/**
 *
 */
class Usuario extends AnotherClass
{
public $id;
public $nombre;
public $apellido1;
public $apellido2;
public $numeroNomina;
public $puesto;
public $telefono;
public $telefono2;
public $correo;
public $password;
public $dependencia;

  function __construct($id, $nombre, $apellido1, $apellido2, $numeroNomina, $puesto, $telefono, $telefono2, $correo, $password, $dependencia)
  {
           $this->$id=$id;
           $this->$nombre=$nombre;
           $this->$apellido1=$apellido1;
           $this->$apellido2=$apellido2;
           $this->$numeroNomina=$numeroNomina;
           $this->$puesto=$puesto;
           $this->$telefono=$telefono;
           $this->$telefono2=$telefono2;
           $this->$correo=$correo;
           $this->$password=$password;
           $this->$dependencia=$dependencia;
  }

}


 ?>
