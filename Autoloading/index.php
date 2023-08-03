<?php 
    require_once 'App/init.php';
      $produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30_000,100);
      $produk2 = new Game("Dragon Ball","Akira Toriyama", "Elex Media Komputindo",20_000 , 50);
  
      $cetakProduk = new CetakInfoProduk;
      $cetakProduk->tambahProduk($produk1);
      $cetakProduk->tambahProduk($produk2);
  
      echo $cetakProduk->cetak();
?>