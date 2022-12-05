<?php

class Prestamo{
    private $id;
    private $fecha_inicio;
    private $fecha_fin;
    private $idusuario;
    private $idlibro;
    private $estado;

    public function __construct($fecha_inicio="",$fecha_fin="",$idusuario="",$idlibro="",$estado="")
    {
        $this->fecha_inicio= $fecha_inicio;
        $this->fecha_fin= $fecha_fin;
        $this->idusuario = $idusuario;
        $this->idlibro = $idlibro;
        $this->estado = $estado;
    }

    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of fecha_inicio
     */ 
    public function getFecha_inicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set the value of fecha_inicio
     *
     * @return  self
     */ 
    public function setFecha_inicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    /**
     * Get the value of fecha_fin
     */ 
    public function getFecha_fin()
    {
        return $this->fecha_fin;
    }

    /**
     * Set the value of fecha_fin
     *
     * @return  self
     */ 
    public function setFecha_fin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    /**
     * Get the value of idlibro
     */ 
    public function getIdlibro()
    {
        return $this->idlibro;
    }

    /**
     * Set the value of idlibro
     *
     * @return  self
     */ 
    public function setIdlibro($idlibro)
    {
        $this->idlibro = $idlibro;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

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