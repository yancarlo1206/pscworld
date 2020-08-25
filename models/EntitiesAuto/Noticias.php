<?php


/* Date: 24/08/2020 21:15:03 */

namespace Entities;

/**
 * Noticias
 *
 * @Table(name="noticias")
 * @Entity
 */
class Noticias
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="titulo", type="string", length=200, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @Column(name="contenido", type="text", nullable=false)
     */
    private $contenido;

    /**
     * @var boolean
     *
     * @Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Noticias
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /** 
     * Set titulo
     *
     * @param string $titulo
     * @return Noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /** 
     * Set contenido
     *
     * @param string $contenido
     * @return Noticias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /** 
     * Set estado
     *
     * @param boolean $estado
     * @return Noticias
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
