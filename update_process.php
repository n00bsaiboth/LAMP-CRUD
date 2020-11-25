<?php
	require_once "config.php";

	if(isset($_POST["id"]) && is_numeric($_POST["id"]) && !empty($_POST["id"]) && $_POST['id'] !== '') {
		$id = $_POST["id"];
	} else {
		echo "There is a problem with your ID.";
	}

	if(isset($_POST["writer"]) && !empty($_POST["writer"])) {
		$writer = $_POST["writer"];
	} else {
		echo "There is a problem with your username or also known as writer.";
	}

	if(isset($_POST["content"]) && !empty($_POST["content"])) {
		$content = $_POST["content"];
	} else {
		echo "There is a problem with your content.";
	}

	$sql = "UPDATE notes SET writer = :writer, content = :content WHERE id = :id";

	$stmt = $pdo->prepare($sql);

	$stmt->bindParam(":writer", $param_writer, PDO::PARAM_STR);
	$stmt->bindParam(":content", $param_content, PDO::PARAM_STR);
    $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

    $param_writer = $writer;
    $param_content = $content;
    $param_id = $id;

    if($stmt->execute()) {
    	header("location: index.php");	
    } else {
    	echo "Oops! Something went wrong.";
    }

    unset($stmt);
    unset($pdo);
?>