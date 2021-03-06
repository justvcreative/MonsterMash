<?php    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if ($_POST["name"] == "" || $_POST["comment"] =="") {
			header("location:index.php?status=error");
			exit;
		} else {
            try {
                $postId = trim(filter_input(INPUT_POST, "id",FILTER_SANITIZE_NUMBER_INT));
                $postName = trim(filter_input(INPUT_POST, "name",FILTER_SANITIZE_STRING));
                $postComment = trim(filter_input(INPUT_POST, "comment",FILTER_SANITIZE_SPECIAL_CHARS));

                include("inc/connection.php");
                $sql = "INSERT INTO comments ( id, name, comment) VALUES (:postID, :postName, :postComment)";
                $result = $db->prepare($sql);
                $result->bindParam(':postID',$postID);
                $result->bindParam(':postName',$postName);
                $result->bindParam(':postComment',$postComment);
                $result->execute();

                header("location:index.php?status=thanks");
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }