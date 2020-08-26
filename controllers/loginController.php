<?php

class loginController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuarios');
    }
    
    public function index() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
    	$this->_view->titulo = '';
        $this->_view->renderizar('index', 'login');
    }

    public function iniciar(){
        $usuario = $this->_usuario->findByObject(
            array(
                'clave' => Hash::getHash('sha1', $this->getSql('clave'), HASH_KEY),
                'email'  => $this->getTexto('email')
            )
        );
        if(!$usuario){
            echo "-error";
            exit;
        }
        Session::set('autenticado', true);
        Session::set('level', 'administrador');
        Session::set('tiempo', time());
        echo "+ok";
    }

    public function cerrar(){
        Session::destroy();
        $this->redireccionar();
    }

}

?>