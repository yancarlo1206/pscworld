<?php

class noticiasController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_noticia = $this->loadModel('noticias');
    }
    
    public function index() {
        // $this->_view->noticias = $this->_noticia->resultList();
        $this->_view->noticias = $this->_noticia->dql("select n from Entities\Noticias n order by n.id desc",array());
    	  $this->_view->titulo = '';
        $this->_view->renderizar('index', 'noticias');
    }

    public function ver_noticia($noticia=null) {
      $this->_view->noticia = $this->_noticia->get($noticia);
      $this->_view->noticias = $this->_noticia->dql("select n from Entities\Noticias n order by n.id desc",array());
    	$this->_view->titulo = '';
      $this->_view->renderizar('ver_noticia', 'noticias');
    }

    public function listar() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->noticias = $this->_noticia->resultList();
        $this->_view->titulo = '';
        $this->_view->renderizar('listar', 'noticias', 'listar_noticia');
    }

    public function registrar() {
        if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        if($this->getInt('guardar')){
            $this->_noticia->getInstance()->setTitulo($this->getTexto('titulo'));
            $this->_noticia->getInstance()->setContenido($this->getPostParam('editor1'));
            $this->_noticia->getInstance()->setFecha(new \DateTime());
            $this->_noticia->getInstance()->setEstado(1);
            try {
                $this->_noticia->save();
                if(isset($_FILES['imagen']) && $_FILES['imagen']['name'] != "") {
                  $this->getLibrary('upload' . DS . 'class.upload');
                  $upload = new upload($_FILES['imagen']);
                  $upload->allowed = array('image/*');
                  $upload->file_new_name_body = $this->_noticia->getInstance()->getId();
                  $upload->image_convert = 'jpg';
                  $upload->process(ROOT . "public" . DS . "images" . DS . "noticias" . DS);
                  if($upload->processed) {
                    /* $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 100;
                    $thumb->image_y = 70;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process(ROOT . "public" . DS . "img" . DS . "fotos" . DS); */
                  }else{
                    $this->_baner->delete();
                    echo $upload->error;
                  }
                }
                $this->redireccionar('noticias/listar/');
            } catch (Exception $e) {
                echo $e;                
            }
        }
        $this->_view->titulo = '';
        $this->_view->renderizar('registrar', 'noticias', 'registrar_noticia');
    }

    public function editar($noticia=null){
       if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->noticia = $this->_noticia->get($noticia);
        if($this->getInt('guardar')){
            $this->_noticia->getInstance()->setTitulo($this->getTexto('titulo'));
            $this->_noticia->getInstance()->setContenido($this->getPostParam('editor1'));
            try {
                $this->_noticia->update();
                if(isset($_FILES['imagen']) && $_FILES['imagen']['name'] != "") {
                  $fichero = ROOT . "public" . DS . "images" . DS. "noticias" . DS. $this->_noticia->getInstance()->getId().".jpg";
                  if (file_exists($fichero)){
                    unlink($fichero);
                  }
                  $this->getLibrary('upload' . DS . 'class.upload');
                  $upload = new upload($_FILES['imagen']);
                  $upload->allowed = array('image/*');
                  $upload->file_new_name_body = $this->_noticia->getInstance()->getId();
                  $upload->image_convert = 'jpg';
                  $upload->process(ROOT . "public" . DS . "images" . DS . "noticias" . DS);
                  if($upload->processed) { }else{ }
                }
                $this->redireccionar('noticias/listar/');
            } catch (Exception $e) {
                echo $e;                
            }
        }
        $this->_view->titulo = '';
        $this->_view->renderizar('registrar', 'noticias', 'registrar_noticia');
    }

    public function eliminar($noticia=null){
        if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_noticia->get($noticia);
        try {
            $this->_noticia->delete();
        } catch (Exception $e) {
            
        }
        $this->redireccionar('noticias/listar/');
    }

}

?>
