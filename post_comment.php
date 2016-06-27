<?php    
    $postId = $_POST["id"];
    $postName = $_POST["name"];
    $postComment = $_POST["comment"];

    include("inc/connection.php");
    $sql = "INSERT INTO comments (id, name, comment) VALUES ('$postId', $postName', '$postComment')";
    $result = $db->query($sql);
    $db = null;

    header("location:index.php?status=thanks");
?>