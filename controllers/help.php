<?php
 
class Help extends Controller {

    function __construct() {
        parent::__construct();
        echo 'help controller <br/>';
    }
    
    public function other($arg = false) {
        echo 'helpController/other <br/>';
        echo 'optional:' . $arg . '<br/>';
        
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}