<?php    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$postId = trim(filter_input(INPUT_POST, "id",FILTER_SANITIZE_NUMBER_INT));
		$postName = trim(filter_input(INPUT_POST, "name",FILTER_SANITIZE_STRING));
		$postComment = trim(filter_input(INPUT_POST, "comment",FILTER_SANITIZE_SPECIAL_CHARS));

		if ($postName == "" || $postComment =="") {
			echo "Please fill in the correct fields<br>";
			echo "<a href='index.php'>Go Back</a>";
			exit;
		}

		include("inc/connection.php");
		$sql = "INSERT INTO comments (id, name, comment) VALUES ('$postId', '$postName', '$postComment')";
		$result = $db->query($sql);

		header("location:index.php?status=thanks");
    }
    
?>