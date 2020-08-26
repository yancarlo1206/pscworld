<?php
class bannerController extends Controller {   
    public function __construct() {
        parent::__construct();
        $this->_banner = $this->loadModel('banners');
    }
    
    public function listar() {
        // $this->_view->banners = $this->_banner->resultList();
    	$this->_view->titulo = '';
        $this->_view->renderizar('banners', 'listar');
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