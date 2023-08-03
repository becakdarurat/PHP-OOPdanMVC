<?php 

//    require_once 'Produk/Produk.php';
//    require_once 'Produk/CetakInfoProduk.php';
//    require_once 'Produk/Game.php';
//    require_once 'Produk/infoProduk.php';
//    require_once 'Produk/Komik.php';

    // Function ini akan mencek di folder produk , ada class apa saja yang sudah terregistrasi di foldernya
   spl_autoload_register(function( $class ){
        require_once 'Produk/' . $class . '.php';
   });
?>