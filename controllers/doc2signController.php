<?php

class doc2signController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('index', 'servicios_firmas');
    }

    public function contrato() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('avaluo', 'doc2sign');
    }

    public function avaluo() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('contrato', 'doc2sign');
    }

    public function nomina() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('nomina', 'doc2sign');
    }

}

?>