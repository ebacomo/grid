<?php
class products {
    function index() {
        include('interface/header.php');
        include('interface/products/index.php');
    }
}
$action = new products;
?>