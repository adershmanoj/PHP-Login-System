<?php 
    $username='root';
    $dsn='mysql:host=localhost;dbname=register';
    $password='';
    $db=new PDO($dsn,$username,$password);
    echo "Connected Successfully";
?>