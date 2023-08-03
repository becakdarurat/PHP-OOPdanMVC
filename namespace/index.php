<?php 
    require_once 'App/init.php';

    use App\Services\User as ServicesUser;
    use App\Produk\User as ProdukUser;
    new ProdukUser();
    echo "<br>";
    new ServicesUser();
?>