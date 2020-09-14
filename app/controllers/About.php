<?php

class About extends Controller {

    public function index($nama='Febriyanto',$pekerjaan='dosen',$umur=28){
        
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $data['judul'] = 'About';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function page(){
        
        $data['judul'] = 'Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }


}