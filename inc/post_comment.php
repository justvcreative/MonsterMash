<?php
    $host = 'localhost';
    $dbname = 'Grocery';
    $user = 'root';
    $pass = 'root';
    $dsn = "mysql:host=$host;dbname=$dbname"
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /*
    $id = $_POST["id"];
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    
    $sql = "INSERT INTO comments (id, name, comment) VALUES ('$id',$name', '$comment')";
    $result = $db->query($sql); */
