<?php
class home {
    function index() {
        include('interface/header.php');
        include('interface/home/index.php');
    }
}
$action = new home;
?>