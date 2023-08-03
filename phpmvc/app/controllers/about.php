<?php
    class about extends Controller{
        public function index($nama = 'Sofyan',$pekerjaan = 'Programmer', $umur = 21)
        {
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;
            $data['judul'] = 'Index';
            $this->view('templates/header',$data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
        public function page(){
            $data['judul'] = 'Pages';
            $this->view('templates/header',$data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
?>