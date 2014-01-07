<?php
class productscontroller extends maincontroller{

    function __construct() {
   
    }

    public function all() {
        $sql = 'SELECT * FROM `products` ORDER BY `id` ASC';
        require_once 'modles/mysql.php';
        $mysql = new mysql();
        $resuly = $mysql->query($sql);
        require 'views/products/index.php';
    }
}


?>
