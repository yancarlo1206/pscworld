<?php

class au2signController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = 'Au2sign';
        $this->_view->renderizar('index', 'servicios_firmas');
    }

}

?>