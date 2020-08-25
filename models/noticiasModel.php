<?php
/*
* -------------------------------------
* 
* Date: 24/08/2020 21:15:03 
* noticiasModel.php
* -------------------------------------
*/
class noticiasModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Noticias'); 
    }
}
?>