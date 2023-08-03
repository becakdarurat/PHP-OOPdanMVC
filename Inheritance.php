<?php 

    // jualan Produk
    // Komik
    // Game

    class Produk {

        public $judul,
               $penulis,
               $penerbit,
               $harga,
               $jmlHalaman,
               $wktMain;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$jmlHalaman = 0,$wktMain = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->wktMain = $wktMain;
        }

        public function getLabel(){
            return "$this->penulis , $this->penerbit";
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

    }

    class Komik extends Produk {
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
            return $str;

        }
    }
    class Game extends Produk {
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->wktMain} Jam.";
            return $str;

        }
    }

    class CetakInfoProduk  {
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30_000 , 100 , 0 );
    $produk2 = new Game("Dragon Ball","Akira Toriyama", "Elex Media Komputindo",20_000 , 0 , 50);
    $produk3 = new Produk("Lostsaga");

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

