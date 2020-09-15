<?php

class serviciosController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = 'Certificados Digitales';
        $this->_view->renderizar('index', 'servicios');
    }    

    public function estampado_tiempo(){
    	$this->_view->titulo = 'Estampado de Tiempo';
        $this->_view->renderizar('estampado_tiempo', 'estampado_tiempo');
    }

    public function certificado_ssl(){
    	$this->_view->titulo = 'Certificado SSL';
        $this->_view->renderizar('certificado_ssl', 'servicios', 'certificado_ssl');	
    }

    public function nom_151(){
    	$this->_view->titulo = 'Nom 151';
        $this->_view->renderizar('nom_151', 'nom_151', 'nom_151');
    }

    public function certificado_nivel_psc(){
        $this->_view->titulo = 'Certificados PSC';
        $this->_view->renderizar('certificado_nivel_psc', 'servicios', 'certificado_nivel_psc');
    }

}

?>