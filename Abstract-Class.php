<?php 

    abstract class Buah {
        private $warna;

        abstract public function makan();

        public function setWarna($warna){
            $this->warna = $warna;
        }
    }

    class Apel extends Buah {
        public function makan(){
            
        }
    }
    
    class Tomat extends Buah {
        public function makan(){
            
        }
    }

?>