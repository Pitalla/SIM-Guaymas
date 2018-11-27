<?php

/**
 *
 */
class Permiso extends AnotherClass
{

public $id;
public $nombre;
public $sistema;
public  $rol;

  function __construct($nombre, $sistema, $rol)
      {
        $this->nombre=$nombre;
        $this->sistema=$sistema;
        $this->rol=$rol;
      }
}


 ?>
