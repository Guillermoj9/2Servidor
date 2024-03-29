<?php

class Enlaces{

protected $id;
 protected $nombre;
 protected $enlace;
 protected $precio;
 protected $imagen;
 protected $prioridad;
 protected $id_regalo;

public function __construct($id=0,$nombre="", $enlace="", $precio=0, $imagen="",$prioridad="",$id_regalo="") {

    $this->id = $id;
    $this->nombre = $nombre;
    $this->enlace = $enlace;
    $this->precio = $precio;
    $this->imagen = $imagen;
    $this->prioridad = $prioridad;
    $this->id_regalo = $id_regalo;


}





/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

 /**
  * Get the value of nombre
  */ 
 public function getNombre()
 {
  return $this->nombre;
 }

 /**
  * Set the value of nombre
  *
  * @return  self
  */ 
 public function setNombre($nombre)
 {
  $this->nombre = $nombre;

  return $this;
 }

 /**
  * Get the value of enlace
  */ 
 public function getEnlace()
 {
  return $this->enlace;
 }

 /**
  * Set the value of enlace
  *
  * @return  self
  */ 
 public function setEnlace($enlace)
 {
  $this->enlace = $enlace;

  return $this;
 }

 /**
  * Get the value of precio
  */ 
 public function getPrecio()
 {
  return $this->precio;
 }

 /**
  * Set the value of precio
  *
  * @return  self
  */ 
 public function setPrecio($precio)
 {
  $this->precio = $precio;

  return $this;
 }

 /**
  * Get the value of imagen
  */ 
 public function getImagen()
 {
  return $this->imagen;
 }

 /**
  * Set the value of imagen
  *
  * @return  self
  */ 
 public function setImagen($imagen)
 {
  $this->imagen = $imagen;

  return $this;
 }

 /**
  * Get the value of prioridad
  */ 
 public function getPrioridad()
 {
  return $this->prioridad;
 }

 /**
  * Set the value of prioridad
  *
  * @return  self
  */ 
 public function setPrioridad($prioridad)
 {
  $this->prioridad = $prioridad;

  return $this;
 }

 /**
  * Get the value of id_regalo
  */ 
 public function getId_regalo()
 {
  return $this->id_regalo;
 }

 /**
  * Set the value of id_regalo
  *
  * @return  self
  */ 
 public function setId_regalo($id_regalo)
 {
  $this->id_regalo = $id_regalo;

  return $this;
 }
}




?>