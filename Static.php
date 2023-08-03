<?php 

    class ContohStatic {

        public static $angka = 1;

        public static function halo(){
            return "Halo ". self::$angka++ ." Kali.";
        }

    }   

    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo();
    echo "<hr>";
    echo ContohStatic::halo();
    echo "<hr>";

    class Objectt {
        public static $nomor = 1;

        public function hallo(){
            return "Hallo " . self::$nomor++ . " Kali. <br>";
        }
    }
    $obj = new Objectt;
    echo $obj->hallo();
    echo $obj->hallo();
    echo $obj->hallo();
    echo "<hr>";    
    $obj2 = new Objectt;
    echo $obj2->hallo();
    echo $obj2->hallo();
    echo $obj2->hallo();
?>

