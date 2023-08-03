<?php 
    class Produk {

        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
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
        public $jmlHalaman;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$jmlHalaman = 0){

            parent::__construct($judul,$penulis,$penerbit,$harga);

            $this->jmlHalaman = $jmlHalaman;

        }

        public function getInfoProduk(){
            $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
            return $str;

        }
    }
    class Game extends Produk {
        public $wktMain;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$wktMain = 0){

            parent::__construct($judul,$penulis,$penerbit,$harga);

            $this->wktMain = $wktMain;

        }
        public function getInfoProduk(){
            $str = "Game : ". parent::getInfoProduk() ." ~ {$this->wktMain} Jam.";
            return $str;

        }
    }

    class CetakInfoProduk  {
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30_000,100);
    $produk2 = new Game("Dragon Ball","Akira Toriyama", "Elex Media Komputindo",20_000 , 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

