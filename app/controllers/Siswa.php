<?php

class Siswa extends Controller{
    

    public function index(){

       $data[
        'title' => 'Siswa'
        'nama' => 'faaq'
    ];

        $this->view("template/header", $data);
        $this->view("siswa/index", $data);
        $this->view("template/footer", $data);

    }

    public function biodata(){
        echo "ini adalah siswa biodata";
    }
}