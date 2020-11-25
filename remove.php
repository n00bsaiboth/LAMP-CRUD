<?php
	require_once "config.php";

	if(isset($_GET["id"]) && is_numeric($_GET["id"]) && !empty($_GET["id"]) && $_GET['id'] !== '') {
    $id = $_GET["id"];
  } else {
  	echo "There was a problem with your ID.";
  }

  $sql = "SELECT * FROM notes WHERE id = :id";

  $stmt = $pdo->prepare($sql);

  $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

  $param_id = $id;

  if($stmt->execute()) {
    $sql = "DELETE FROM notes WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

    $param_id = $id;

    if($stmt->execute()) {
      header("location: index.php");    
    } else {
      echo "Oops! Something went wrong.";
    }	
  } else {
  	echo "Oops! Something went wrong.";
  }

  unset($stmt);
  unset($pdo);
?>