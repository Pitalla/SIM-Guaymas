<?php

/**
 *
 */
class Dependencia extends AnotherClass
{
  public $id;
  public $nombre;
  public $nombreCorto;
  public $clave;
  public $dependencia;
  public $titular;
  public $direccion;
  public $telefono1;
  public $telefono2;
  public $telefono3;
  public $correo;
  public $sitioweb;




  function __construct($id, $nombre, $nombreCorto, $clave, $dependencia,$titular, $direccion, $telefono1, $telefono2, $telefono3, $correo, $sitioweb)
  {
    $this->$id=$id;
    $this->$nombre=$nombre;
    $this->$nombreCorto=$nombreCorto;
    $this->$clave=$clave;
    $this->$dependencia=$dependencia;
    $this->$titular=$titular;
    $this->$direccion=$direccion;
    $this->$telefono1=$telefono1;
    $this->$telefono2=$telefono2;
    $this->$telefono3=$telefono3;
    $this->$correo=$correo;
    $this->$sitioweb=$sitioweb;
  }




}
 ?>
