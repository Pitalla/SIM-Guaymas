<?php
/**
 *
 */
class UsuarioRol extends AnotherClass
{
public $id;
public $Usuario;
public $Rol;

  function __construct($id, $usuario, $rol)
  {
           $this->$id=$id;
           $this->$usuario=$usuario;
           $this->$rol=$rol; 
  }

}


 ?>
