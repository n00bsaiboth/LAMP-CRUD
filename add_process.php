<?php
  require_once "config.php";

  if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
    if(isset($_POST["writer"]) && !empty($_POST["writer"])) {
      $writer = $_POST["writer"];   
    } else {
      $warning = "Oops! You forget to insert the writer.";
    } 

    if(isset($_POST["content"]) && !empty($_POST["content"])) {
      $content = $_POST["content"];
    } else {
      $warning = "Oops! You forget to insert the content.";
    }
  } else {

  }

  $sql = "INSERT INTO notes (writer, time, content) VALUES (:writer, :time, :content)";

  $stmt = $pdo->prepare($sql);

  $stmt->bindParam(":writer", $param_writer, PDO::PARAM_STR);
  $stmt->bindParam(":time", $param_time, PDO::PARAM_STR);
  $stmt->bindParam(":content", $param_content, PDO::PARAM_STR);

  $param_writer = $writer;
  $param_time = date_create()->format('Y-m-d H:i:s');
  $param_content = $content;

  if($stmt->execute()) {
    header("location: index.php");
  } else {
    echo "Something went wrong.";
  }

  unset($stmt);
  unset($pdo);
?>