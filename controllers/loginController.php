<?php

class loginController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('index', 'login');
    }

    public function iniciar(){
        Session::set('autenticado', true);
        Session::set('level', 'administrador');
        Session::set('tiempo', time());
        $this->redireccionar();
    }

    public function cerrar(){
        Session::destroy();
        $this->redireccionar();
    }

}

?>