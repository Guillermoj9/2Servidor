<?php

class Libro{

private $id;
private $titulo;
private $descripcion;
private $autor;
private $categoria;
private $imagenPortada;

public function __construct($titulo="",$descripcion="",$autor="",$categoria="",$imagenPortada="")
{
    $this->titulo = $titulo;
    $this->descripcion=$descripcion;
    $this->autor=$autor;
    $this->categoria=$categoria;
    $this->imagenPortada=$imagenPortada;
}
/**
 * Get the value of titulo
 */ 
public function getTitulo()
{
return $this->titulo;
}

/**
 * Set the value of titulo
 *
 * @return  self
 */ 
public function setTitulo($titulo)
{
$this->titulo = $titulo;

return $this;
}

/**
 * Get the value of descripcion
 */ 
public function getDescripcion()
{
return $this->descripcion;
}

/**
 * Set the value of descripcion
 *
 * @return  self
 */ 
public function setDescripcion($descripcion)
{
$this->descripcion = $descripcion;

return $this;
}

/**
 * Get the value of autor
 */ 
public function getAutor()
{
return $this->autor;
}

/**
 * Set the value of autor
 *
 * @return  self
 */ 
public function setAutor($autor)
{
$this->autor = $autor;

return $this;
}

/**
 * Get the value of categoria
 */ 
public function getCategoria()
{
return $this->categoria;
}

/**
 * Set the value of categoria
 *
 * @return  self
 */ 
public function setCategoria($categoria)
{
$this->categoria = $categoria;

return $this;
}

/**
 * Get the value of imagenPortada
 */ 
public function getImagenPortada()
{
return $this->imagenPortada;
}

/**
 * Set the value of imagenPortada
 *
 * @return  self
 */ 
public function setImagenPortada($imagenPortada)
{
$this->imagenPortada = $imagenPortada;

return $this;
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
}
