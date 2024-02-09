<?php 
    $hostname = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'form';

    $conn = new mysqli($hostname,$user,$pass,$db);

    if($conn->connect_error){
        die('Falha na conexão: ' . $conn->connect_error);
    }

?>