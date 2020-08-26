<?php


/* Date: 25/08/2020 21:27:58 */

namespace Entities;

/**
 * Usuarios
 *
 * @Table(name="usuarios")
 * @Entity
 */
class Usuarios
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
     * @Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="clave", type="string", length=200, nullable=false)
     */
    private $clave;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=false)
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Usuarios
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
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /** 
     * Set clave
     *
     * @param string $clave
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Usuarios
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
