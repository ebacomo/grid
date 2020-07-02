<?php
class contact_us {
    function index() {
        include('interface/header.php');
        include('interface/contact_us/index.php');
    }
}
$action = new contact_us;
?>