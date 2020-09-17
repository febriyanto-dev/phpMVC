<?php

use Carbon\Carbon;
use Hashids\Hashids;
class Mahasiswa extends Controller{

    protected $hashids;

    public function __construct() {
        $this->hashids = new Hashids('',5);
    }

    public function index(){

        $data['judul'] = 'Daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $data['dateNow'] = $sekarang = Carbon::now();
        $data['hashids'] = $this->hashids;

        $this->view('templates/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id){

        $data['judul'] = 'Detail mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('templates/header',$data);
        $this->view('mahasiswa/detail',$data);
        $this->view('templates/footer');
    }
}