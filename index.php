<?php
@session_start();

require_once 'controllers/maincontroller.php';
require_once 'controllers/productscontroller.php';
require_once 'controllers/salescontroller.php';
if (!isset($_GET['page']))
{
    $_GET['page'] = 'defalut';
}

if (isset($_GET['id']) && isset($_GET['quantity']) && $_SESSION['buyd'] == 0) {
    //购买
    $_SESSION['buyd'] = 1;
    $buy = new salecontroller();
    $buy->buy($_GET['id'], $_GET['quantity']);
} else if ($_GET['page'] == 'buy') {
    //显示订购页面
    $_SESSION['buyd'] = 0;
    $app = new salecontroller();
    $app->getinfo($_GET['id']);
    return FALSE;
} else if ($_GET['page'] == 'sale') {
    //显示销售记录
    $app = new salecontroller();
    $app->all();
    return FALSE;
} else {
//显示所有商品
    $app = new productscontroller();
    $app->all();
    return FALSE;
}
?>
