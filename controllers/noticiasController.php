<?php

class noticiasController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_noticia = $this->loadModel('noticias');
    }
    
    public function index() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('index', 'noticias');
    }

    public function ver_noticia() {
    	$this->_view->titulo = '';
        $this->_view->renderizar('ver_noticia', 'noticias');
    }

    public function listar() {
        $this->_view->noticias = $this->_noticia->resultList();
        $this->_view->titulo = '';
        $this->_view->renderizar('listar', 'noticias');
    }

    public function registrar() {
        if($this->getInt('guardar')){
            $this->_noticia->getInstance()->setTitulo($this->getTexto('titulo'));
            $this->_noticia->getInstance()->setContenido($this->getTexto('contenido'));
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
        $this->_view->renderizar('registrar', 'noticias');
    }

}

?>