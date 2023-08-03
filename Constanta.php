<?php 
    define('NAMA','Sofyan Tanjung');
    echo NAMA ;

    echo "<br>";

    const UMUR = 21;
    echo UMUR;  



    class Mencoba {
        const CObaa = "Programmer";

        public $kelas = __CLASS__;
    }
    echo "<br>";
    $obj = new Mencoba;
    echo $obj->kelas;
    echo Mencoba::CObaa;
    echo "<br>";
    echo __LINE__;
?>