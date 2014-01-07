<?php

class salecontroller extends maincontroller {

    function __construct() {
        require_once 'modles/mysql.php';
    }

    public function all() {
        $sql = 'SELECT sales.id,sales.sales_at,products.name,products.price,sales.quantity FROM `sales` INNER JOIN `products` ON products.id = sales.product_id ORDER BY `id` DESC';
        $mysql = new mysql();
        $resuly = $mysql->query($sql);
        require 'views/sales/index.php';
    }

    public function getinfo($id) {
        $sql = " SELECT * FROM `products` WHERE `id` = $id LIMIT 1 ";
        $mysql = new mysql();
        $resuly = $mysql->query($sql);
        $resuly = $resuly['0'];
        require 'views/sales/new.php';
    }

    public function buy($id,$quantity) {
        $sql = "INSERT INTO `sales` SET product_id = $id , sales_at = NOW(), quantity = $quantity";
        $mysql = new mysql();
        $resuly = $mysql->runsql($sql);
        require 'index.php';
    }

}

?>
