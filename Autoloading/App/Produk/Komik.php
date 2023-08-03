<?php 
     class Komik extends Produk {
        public $jmlHalaman;

        public function mangan(){

        }
        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$jmlHalaman = 0){

            parent::__construct($judul,$penulis,$penerbit,$harga);

            $this->jmlHalaman = $jmlHalaman;

        }

        public function getInfoProduk(){
            $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
            return $str;

        }
    }
?>