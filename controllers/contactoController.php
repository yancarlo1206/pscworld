<?php

class contactoController extends Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	$this->_view->titulo = 'Contacto';
        $this->_view->renderizar('index', 'contacto');
    }

    public function enviar(){
    	$nombre = $this->getPostParam('nombre');
    	$apellido = $this->getPostParam('apellido');
    	$telefono = $this->getPostParam('telefono');
    	$estado = $this->getPostParam('estado');
    	$nombreEmpresa = $this->getPostParam('nombreEmpresa');
    	$tamanoEmpresa = $this->getPostParam('tamanoEmpresa');
    	$email = $this->getPostParam('email');
    	$mensaje = $this->getPostParam('mensaje');
    	$asunto = "Información PSCWORLD";
    	$msj = $this->plantillaMsj($nombre, $apellido, $telefono, $estado, $nombreEmpresa, $tamanoEmpresa, $email, $mensaje);
    	$this->enviarCorreo($email, $nombre." ".$apellido ,$asunto, $msj);
    	echo "+ok";
    }

    private function plantillaMsj($nombre=null, $apellido=null, $telefono=null, $estado=null, $nombreEmpresa=null, $tamanoEmpresa=null, $email=null, $mensaje=null){
    	$msj = "La información registrada es.<br>";
    	$msj .= "Nombre: ".$nombre."<br>";
    	$msj .= "Apellido: ".$apellido."<br>";
    	$msj .= "Telefono: ".$telefono."<br>";
    	$msj .= "Estado: ".$estado."<br>";
    	$msj .= "Empresa: ".$nombreEmpresa."<br>";
    	$msj .= "Tamaño Empresa: ".$tamanoEmpresa."<br>";
    	$msj .= "Correo: ".$email."<br>";
    	$msj .= "Mensaje: ".$mensaje."<br>";
    	$msj .= "Muy pronto nos contactaremos con usted.";
    	return $msj;
    }

    public function enviarHome(){
    	$nombre = $this->getPostParam('nombre');
    	$apellido = $this->getPostParam('apellido');
    	$mensaje = $this->getPostParam('mensaje');
    	$telefono = $this->getPostParam('telefono');
    	$email = $this->getPostParam('email');
    	$asunto = "Información PSCWORLD";
    	//echo $this->templateEmail($this->plantillaMsj($nombre, $apellido, $email, $telefono, $mensaje));
    	$msj = $this->plantillaMsjHome($nombre, $apellido, $email, $telefono, $mensaje);
    	$this->enviarCorreo($email, $nombre." ".$apellido ,$asunto, $msj);
    	$this->redireccionar();
    }

    private function plantillaMsjHome($nombre=null, $apellido=null, $email=null, $telefono=null, $mensaje=null){
    	$msj = "La información registrada es.<br>";
    	$msj .= "Nombre: ".$nombre."<br>";
    	$msj .= "Apellido: ".$apellido."<br>";
    	$msj .= "Correo: ".$email."<br>";
    	$msj .= "Telefono: ".$telefono."<br>";
    	$msj .= "Mensaje: ".$mensaje."<br>";
    	$msj .= "Muy pronto nos contactaremos con usted.";
    	return $msj;
    }

}

?>