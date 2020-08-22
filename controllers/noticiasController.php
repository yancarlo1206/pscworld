<?php

class noticiasController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('index', 'noticias');
    }

    public function ver_noticia() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('ver_noticia', 'noticias');
    }

}

?>