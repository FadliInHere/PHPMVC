<?php

class Siswa extends Controller{
    

    public function index(){

        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('siswa/index', $data);
    }
    
}