<?php 

    class Anime {
        public $judul,
               $Mc,
               $Pendukung,
               $antagonis,
               $rating;
        
        private $diskon,
                $harga;

        public function __construct($judul = "Lookism",$Mc = "Daniel Park",$Pendukung = "Baek Eun",$antagonis = "Jonggun",$rating = 5,$harga = 50_000){
            $this->judul = $judul;
            $this->Mc = $Mc;
            $this->Pendukung = $Pendukung;
            $this->antagonis = $antagonis;
            $this->rating = $rating;
            $this->harga = $harga;
        }
        public function getHarga(){
            return $this->harga - ( $this->harga * $this->diskon / 100 );
         }
         public function setDiskon($diskon){
            $this->diskon = $diskon;
         }

        public function getLengkap(){
            return "$this->Mc , $this->Pendukung";
        }
        public function getInfoLengkap(){
            $str = "{$this->judul}, {$this->getLengkap()} (Rating.{$this->rating})";
            return $str;
        }
    }
    class Komik extends Anime {
        public $jmlHalaman;
        public function __construct($judul = "Lookism",$Mc = "Daniel Park",$Pendukung = "Baek Eun",$antagonis = "Jonggun",$rating = 5,$jmlHalaman = null){

            parent::__construct($judul,$Mc,$Pendukung,$antagonis,$rating);

            $this->jmlHalaman = $jmlHalaman;

        }
        public function getInfoLengkap(){
            $str = "Komik : {$this->judul} |". parent::getInfoLengkap() ." -{$this->jmlHalaman} Halaman";
            return $str;
        }
    }
    class Game extends Anime {
        public $wktMain;

        public function __construct($judul = "Lookism",$Mc = "Daniel Park",$Pendukung = "Baek Eun",$antagonis = "Jonggun",$rating = 5,$wktMain = null){

            parent::__construct($judul,$Mc,$Pendukung,$antagonis,$rating);

            $this->wktMain = $wktMain;

        }

        public function getInfoLengkap(){
            $str = "Game : {$this->judul} |". parent::getInfoLengkap() ." ~
            {$this->wktMain} Jam";
            return $str;
        }
    }

        class CetakAnime {
            public function cetak( Anime $anime ){
                $str = "{$anime->judul} | {$anime->getLengkap()} | {$anime->antagonis} dan {$anime->rating}";
                return $str;
            }
        }

        $Anime1 = new Game("Lostsaga","Cyber Medic", "HGD","Dev K",5,2);
        $Anime2 = new Komik("Dragon Ball","Goku","Bulma","Satan",4,100);
        echo $Anime1->getInfoLengkap();
        echo "<br>";
        echo $Anime2->getInfoLengkap();
        $Anime1->setDiskon(30);
        echo "<br>";
        echo $Anime1->getHarga();
    
    