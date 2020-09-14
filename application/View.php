<?php

class View {

    private $_controlador;
    private $_js;
    private $_css;
    private $_url;
    public  $tipo = false;
    public  $tiempo = true;
    
    public function __construct(Request $peticion) {
        $this->_controlador = $peticion->getControlador();
        $this->_url = $peticion->getUrl();
        $this->_js = array();
        $this->_css = array();
    }
    
    public function renderizar($vista, $item = false, $subItem = false) {
        $menu = array();

        // $menu[] = array(
        //         'id' => 'inicio',
        //         'titulo' => 'Inicio',
        //         'enlace' => BASE_URL
        //         );
        $menu[] = array(
                'id' => 'servicios',
                'titulo' => 'Certificados Digitales',
                'enlace' => BASE_URL . 'servicios/',
                'submenu' => 
                    array(
                        array(
                            'id' => 'certificado_nivel_psc',
                            'titulo' => 'Certificados Nivel PSC',
                            'enlace' => BASE_URL . 'servicios/certificado_nivel_psc/'
                        ),
                        // array(
                        //     'id' => 'estampado_tiempo',
                        //     'titulo' => 'Estampado de Tiempo',
                        //     'enlace' => BASE_URL . 'servicios/estampado_tiempo/'
                        // ),
                        array(
                            'id' => 'certificado_ssl',
                            'titulo' => 'Certificados SSL',
                            'enlace' => BASE_URL . 'servicios/certificado_ssl/'
                        )
                        // array(
                        //     'id' => 'nom_151',
                        //     'titulo' => 'Nom 151',
                        //     'enlace' => BASE_URL . 'servicios/nom_151/'
                        // )
                    )
                );
        $menu[] = array(
            'id' => 'nom_151',
            'titulo' => 'NOM-151',
            'enlace' => BASE_URL . 'servicios/nom_151/'
            );
        $menu[] = array(
            'id' => 'estampado_tiempo',
            'titulo' => 'Time Stamp',
            'enlace' => BASE_URL . 'servicios/estampado_tiempo/'
            );
        // $menu[] = array(
        //         'id' => 'doc2sign',
        //         'titulo' => 'doc2sign',
        //         'enlace' => BASE_URL . 'doc2sign/'
        //         );
            
        $menu[] = array(
            'id' => 'servicios_firmas',
            'titulo' => 'Firma Digital',
            'enlace' => BASE_URL . 'servicios/',
            'submenu' =>
                array(
                    array(
                        'id' => 'doc2sign',
                        'titulo' => 'doc2sign',
                        'enlace' => BASE_URL . 'doc2sign/'
                        // ,
                        // 'submenutres' =>
                        //     array(
                        //         array(
                        //             'id' => 'contratos',
                        //             'titulo' => 'Contratos',
                        //             'enlace' => BASE_URL . 'doc2sign/'
                        //         ),
                        //         array(
                        //             'id' => 'avaluos',
                        //             'titulo' => 'Avaluos',
                        //             'enlace' => BASE_URL . 'doc2sign/'
                        //         ),
                        //         array(
                        //             'id' => 'nomina',
                        //             'titulo' => 'Nomina',
                        //             'enlace' => BASE_URL . 'doc2sign/'
                        //         )
                        //     )
                    ),
                    array(
                        'id' => 'au2sign',
                        'titulo' => 'autosign',
                        'enlace' => BASE_URL . 'au2sign/'
                    )
                    // ,
                    // array(
                    //     'id' => 'certificado_ssl',
                    //     'titulo' => 'Certificados SSL',
                    //     'enlace' => BASE_URL . 'servicios/certificado_ssl/'
                    // ),
                    // array(
                    //     'id' => 'nom_151',
                    //     'titulo' => 'Nom 151',
                    //     'enlace' => BASE_URL . 'servicios/nom_151/'
                    // )
                )
            );

        if(Session::get('autenticado')){
            $menu[] = array(
                'id' => 'noticias',
                'titulo' => 'Noticias',
                'enlace' => BASE_URL . 'noticias/',
                'submenu' => 
                    array(
                        array(
                            'id' => 'listar_noticia',
                            'titulo' => 'Listar Noticias',
                            'enlace' => BASE_URL . 'noticias/listar'
                        ),
                        array(
                            'id' => 'registrar_noticia',
                            'titulo' => 'Registrar Noticias',
                            'enlace' => BASE_URL . 'noticias/registrar/'
                        )
                    )
                );
        }else{
            $menu[] = array(
                'id' => 'noticias',
                'titulo' => 'Blog',
                'enlace' => BASE_URL . 'noticias/'
                );  
        }
        $menu[] = array(
                'id' => 'contacto',
                'titulo' => 'Contáctanos',
                'enlace' => BASE_URL . 'contacto/'
                );

        if(Session::get('autenticado')){
            $menu[] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Sesion',
                'enlace' => BASE_URL . 'login/cerrar/'
                );
        }

        if(Session::accesoView('usuario')){
            
        }

        $js = array();
        if(count($this->_js)){$js = $this->_js;}
        $css = array();
        if(count($this->_css)){$css = $this->_css;}
        $_layoutParams = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_fonts' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/fonts/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
            'js' => $js,
            'css' => $css,
            'item' => $item,
            'subItem' => $subItem,
            'vista' => $vista
        );
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';
        if(is_readable($rutaView)){
            if($this->_controlador == 'index'){
            	include_once ROOT . 'views'. DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header_principal.php';
            }else{
                include_once ROOT . 'views'. DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            }
            include_once $rutaView;
            include_once ROOT . 'views'. DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
        } 
        else {
            throw new Exception('Error de vista');
        }
    }
    
    public function setJs(array $js) {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }
    
    public function setJsP(array $js) {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = BASE_URL . 'public/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }

    }

    public function setJsL(array $js) {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }

    public function setJsE($js) {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] =  $js[$i];
            }
        } else {
            echo file_get_contents(BASE_URL.TEM_T.'error/access/8345/');
            exit;
            header("Location: ". BASE_URL.TEM_T.'error/access/8345/');
        }
    }

    private  function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }

    public function encodeApp($value){
        if(!$value){return false;}
        $text = $value;
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, HASH_KEY, $text, MCRYPT_MODE_ECB, $iv);
        return trim($this->safe_b64encode($crypttext)); 
    }
    public function setCssL(array $css) {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->_css[] = BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/' . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de css');
        }
    }

    public function setCss(array $css) {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->_css[] = BASE_URL . 'views/' . $this->_controlador . '/css/' . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de css');
        }
    }

    public function setCssP(array $css) {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->_css[] = BASE_URL . 'public/css/' . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de css');
        }

    }

    public function includeview($view='') {
        if($view!=''){
            $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $view . '.phtml';
            if(is_readable($rutaView)){
                include_once($rutaView);
            }
        }
    }

    public function fechaLetras($value='') {   
        if($value==''){
            return '';
        }else{
            include_once ROOT.'libs'.DS."lib_fecha_letras.php";

            return FechaLetra::fechaALetras($value);
        }
    }

   public function getFechaFormateada($FechaStamp,$hora=false) { 
      if($hora){
        $hora = ', '.date('h:i A',strtotime($FechaStamp));
      }else{
        $hora = '';
      }
      $ano = date('Y',strtotime($FechaStamp));
      $mes = date('n',strtotime($FechaStamp));
      $dia = date('d',strtotime($FechaStamp));
      $diasemana = date('w',strtotime($FechaStamp));
      $diassemanaN= array("Domingo","Lunes","Martes","Miércoles",
                          "Jueves","Viernes","Sábado"); $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
                     "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
      return $diassemanaN[$diasemana].", $dia de ". $mesesN[$mes] ." del $ano".$hora;
    }

    public function getFechaLetras($value='') {   
        if($value==''){
            return '';
        }else{
            include_once ROOT.'libs'.DS."lib_fecha_letras.php";

            return FechaLetra::fechaALetras($value);
        }
    }

    public function getFormatoMoneda($value='',$s='') {
        if($value==''){
            $value = 0;
        }
        return $s.number_format($value, 2, ".", ",");
    }

    public function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }

    public function combobox($name, $default, $objeto, $selected, $value, $texto, $otros,$title) {
        $select = "<select name =" . $name . " " . $otros . " >";
        if ($default != "")
            $select .= "<option value =''>" . $default . "</option>";
        $options = "";
        foreach ($objeto as $obj) {
            $options .= "<option title='" . $obj->$title() . "' value = '" . $obj->$value() . "'";
            if ($obj->$value() == $selected)
                $options .= "selected>". $obj->$texto() . "</option>";
            if ($name == 'cliente')
                $options .= ">" . $obj->$texto() ." ". $obj->getApellido() ."</option>";
            if ($name == 'medicamento')
                $options .= ">" . $obj->$texto() ." ". $obj->getLaboratorio()->getNombre() . " " . $obj->getInfoAdicional() ."</option>";
            else
                $options .= ">" . $obj->$texto() . "</option>";
        }
        $select = $select . $options . "</select>";
        return $select;
    }
}

?>