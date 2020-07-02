<?php
class about_us {
    function index() {
        include('interface/header.php');
        include('interface/about_us/index.php');
    }
}
$action = new about_us;
?>