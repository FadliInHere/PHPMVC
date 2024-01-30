<?php

class Controller{

    public function view($view, $data= []){
        require_once("../app/view/". $view .".php");
    }


    public function Siswa($view, $data= []){
        require_once("../app/view/siswa/" . $view .".php");
    }

    public function model($model){
        require_once("../app/models/" . $model . ".php");
        return new $model;
    }
}