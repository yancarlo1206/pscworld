<?php
class bannerController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_banner = $this->loadModel('banners');
    }

    public function index() {
        $this->_view->banners = $this->_banner->resultList();
    	$this->_view->titulo = '';
        $this->_view->renderizar('index');
    }

    public function registrar() {
        if($this->getInt('guardar')){
            $this->_banner->getInstance()->setTitulo($this->getTexto('titulo'));
            $this->_banner->getInstance()->setFecha(new \DateTime());
            $this->_banner->getInstance()->setEstado(1);
            try {
                $this->_banner->save();
                if(isset($_FILES['imagen']) && $_FILES['imagen']['name'] != "") {
                  $this->getLibrary('upload' . DS . 'class.upload');
                  $upload = new upload($_FILES['imagen']);
                  $upload->allowed = array('image/*');
                  $upload->file_new_name_body = $this->_banner->getInstance()->getId();
                  $upload->image_convert = 'jpg';
                  $upload->process(ROOT . "public" . DS . "images" . DS . "banners" . DS);
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
                $this->redireccionar('banner/');
            } catch (Exception $e) {
                echo $e;                
            }
        }
        $this->_view->titulo = '';
        $this->_view->renderizar('registrar');
    }

    public function editar($banner=null){
        $this->_view->banner = $this->_banner->get($banner);
        if($this->getInt('guardar')){
            $this->_banner->getInstance()->setTitulo($this->getTexto('titulo'));
            $this->_banner->getInstance()->setContenido($this->getTexto('contenido'));
            try {
                $this->_banner->update();
                $this->redireccionar('banners/listar/');
            } catch (Exception $e) {
                echo $e;                
            }
        }
        $this->_view->titulo = '';
        $this->_view->renderizar('editar', 'banners', 'editar_banner');
    }
}
?>