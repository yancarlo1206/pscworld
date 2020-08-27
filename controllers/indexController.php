<?php

class indexController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_banner = $this->loadModel('banners');
        $this->_view->setJs(array('modalimg'));
    }
    
    public function index() {
    	$this->_view->banners = $this->_banner->resultList();
    	$this->_view->titulo = 'Inicio PscWorld';
        $this->_view->renderizar('index', 'inicio');
    }

}

?>