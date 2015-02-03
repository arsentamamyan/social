<?php

class View {

    function __construct() {
        // echo 'view <br/>';
    }

    public function render($name, $params = array()) {

        require 'views/' . $name . '.php';
    }

}
