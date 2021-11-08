<?php

class Admin extends Controller{

    public function __construct(){
    }

    function SayHi() {
        $this->view("admin",[]);
    }
}

?>