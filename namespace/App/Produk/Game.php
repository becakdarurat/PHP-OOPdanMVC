<?php 
    class Game extends Produk {
        public $wktMain;

        public function __construct($judul = "Mobile Legends",$penulis = "Moonton",$penerbit = "Moonton",$harga = 50_000,$wktMain = 0){

            parent::__construct($judul,$penulis,$penerbit,$harga);

            $this->wktMain = $wktMain;

        }
        public function mangan(){
            
        }
    
        public function getInfoProduk(){
            $str = "Game : ". parent::getInfoProduk() ." ~ {$this->wktMain} Jam.";
            return $str;

        }
    }
?>