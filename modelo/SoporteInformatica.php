<?php

/**
 *
 */
class SoporteInformatica extends AnotherClass
{
  public $id;
  public $nombreInteresado;
  public $telefonoContacto;
  public $asunto;
  public $tema;
  public $usuarioSolicitante;
  public $dependencia;
  public $fechaSolicitud;
  public $fechaResolucion;
  public $estado;
  public $dictamen;
  public $tecnico;

  function __construct($id, $nombreInteresado, $telefonoContacto, $asunto, $tema, $usuarioSolicitante, $dependencia, $fechaSolicitud, $fechaResolucion, $estado, $dictamen, $tecnico)
  {
    $this->$id=$id;
    $this->$nombreInteresado=$nombreInteresado;
    $this->$telefonoContacto=$telefonoContacto;
    $this->$asunto=$asunto;
    $this->$tema=$tema;
    $this->$usuarioSolicitante=$usuarioSolicitante;
    $this->$dependencia=$dependencia;
    $this->$fechaSolicitud=$fechaSolicitud;
    $this->$fechaResolucion=$fechaResolucion;
    $this->$estado=$estado;
    $this->$dictamen=$dictamen;
    $this->$tecnico=$tecnico;

  }
}


 ?>
