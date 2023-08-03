<?php
     abstract class Produk {

        private $judul,
               $penulis,
               $penerbit,
               $harga;
        protected $diskon;
        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        abstract public function mangan();
         public function setDiskon($diskon){
            $this->diskon = $diskon;
         }
         public function setJudul($judul){
            $this->judul = $judul;
         }
         public function getJudul(){
           return $this->judul;
         }
         public function setPenulis($penulis){
            $this->penulis = $penulis;
         }
         public function getPenulis(){
            return $this->penulis;
         }
         public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
         }
         public function getPenerbit(){
            return $this->penerbit;
         }
         public function setHarga($harga){
            $this->harga = $harga;
         }
         public function getHarga(){
            return $this->harga - ( $this->harga * $this->diskon / 100 );
         }
        public function getLabel(){
            return "$this->penulis , $this->penerbit";
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

    }
?>