<?php 

//    require_once 'Produk/Produk.php';
//    require_once 'Produk/CetakInfoProduk.php';
//    require_once 'Produk/Game.php';
//    require_once 'Produk/infoProduk.php';
//    require_once 'Produk/Komik.php';
//    require_once 'Produk/User.php';

//    require_once 'Services/User.php';

    // Function ini akan mencek di folder produk , ada class apa saja yang sudah terregistrasi di foldernya
    //         require_once 'Produk/' . $class . '.php';
    //    php akan berasumsi semua class yang ada di folder produk harus ada juga di folder Services jadi kita tidak bisa melakukan ini 
    spl_autoload_register(function( $class ){
     // App\Produk\User = ["App","Produk","User"];
          $class = explode('\\', $class);
          $class = end($class);
         require_once 'Produk/' . $class . '.php';
   });
   spl_autoload_register(function( $class ){
     $class = explode('\\',$class);
     $class = end($class);
     require_once 'Services/' . $class . '.php';
});
?>