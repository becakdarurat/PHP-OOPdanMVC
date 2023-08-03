<?php
// kalau session nya tidak ada, maka jalankan sessionnya
    if( !session_id() ) session_start();

    require_once '../app/init.php';
   $app = new App();
?>