<?php


/* Date: 25/08/2020 21:04:53 */

namespace Entities;

/**
 * Banners
 *
 * @Table(name="banners")
 * @Entity
 */
class Banners
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
     * @Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

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
     * @return Banners
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
     * @return Banners
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
     * Set url
     *
     * @param string $url
     * @return Banners
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Banners
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /** 
     * Set estado
     *
     * @param boolean $estado
     * @return Banners
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
