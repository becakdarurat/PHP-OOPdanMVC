<?php 

    // jualan Produk
    // Komik
    // Game

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

    }

    $produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30_000);
    $produk2 = new Produk("Dragon Ball","Akira Toriyama", "Elex Media Komputindo",20_000);
    $produk3 = new Produk("Lostsaga");

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Komik : " . $produk2->getLabel();
    echo "<br>";
    var_dump($produk3);

