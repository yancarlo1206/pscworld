<?php
/*
* -------------------------------------
* 
* Date: 25/08/2020 21:04:53 
* usuariosModel.php
* -------------------------------------
*/
class usuariosModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Usuarios'); 
    }
}
?>