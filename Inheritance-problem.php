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
               $wktMain,
               $tipe;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$jmlHalaman = 0,$wktMain = 0, $tipe = ""){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->wktMain = $wktMain;
            $this->tipe = $tipe;
        }

        public function getLabel(){
            return "$this->penulis , $this->penerbit";
        }

        public function getInfoLengkap(){
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    // Game : Dragon Ball | Akira Toriyama, Elex Media Komputindo (Rp. 25000) - 50 Jam.
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if($this->tipe == "Komik"){
                $str .= " - {$this->jmlHalaman}  Halaman.";
            } else if ($this->tipe == "Game"){
                $str .= " - {$this->wktMain}  Jam.";
            }
            return $str;
        }

    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30_000 , 100 , 0 ,"Komik");
    $produk2 = new Produk("Dragon Ball","Akira Toriyama", "Elex Media Komputindo",20_000 , 0 , 50 , "Game");
    $produk3 = new Produk("Lostsaga");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

