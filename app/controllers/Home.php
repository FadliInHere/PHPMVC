<?php

class Home extends Controller{

    public function index($nama = "agus", $hobi ="dages"){
        $this->view("home/index");
    }

    public function login ($nama ="" , $hari =""){
        echo"ini adalah login";
    }
}

?>