<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'data_guru';
    
    $con = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal Terhubung ke database');
?>