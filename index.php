<?php
	require_once "config.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Notes - easier than you think</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Server Project">
  <meta name="keywords" content="Infected-design, ID, Id, id, Freelancer, Media, IT, Tietotekniikka, Tietoturva, Ohjelmointi, Palvelu, Kotisivut, Kotisivuohjelmointi, Kotisivujen suunnittelu, Web-ohjelmointi, Webohjelmointi, Web, Web-design, Web-development, Web-devaus, Devaaminen, Developer, Git, GitHub, Project, Showcase, Project Showcase, CRUD, Notes, HTML5, CSS3, PHP7, HTML, CSS, PHP, jQuery, MySQL, MariaDB, Bootstrap, Portsa, Port Arthur Turku, Turku, Turku Suomi, Suomi, Jussi, Jokinen, Jussi Jokinen, n00bsaiboth, Hobitti, Hobbit">
  <meta name="author" content="Jussi Jokinen">

  <link rel="stylesheet" href="../__/css/bootstrap.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-md static-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Notes</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="add.php">Add a new note</a>
          </li>      
        </ul>
      </div>
    </div>
  </nav>

  <section class="container">
  	<div class="jumbotron">
      <h1 class="display-6">Welcome to notes</h1>
      <p>&nbsp;</p>
  		<?php
				$sql = "SELECT id, writer, time, content FROM notes ORDER BY time DESC";

				$stmt = $pdo->prepare($sql);  
				$stmt->execute();

				while($row = $stmt->fetch()) {
					$id = htmlspecialchars($row["id"]);
					$writer = htmlspecialchars($row["writer"]);
					$time = $row["time"];
					$content = htmlspecialchars($row["content"]);
    			$content = nl2br($content);
				
    			echo "<div class=\"row\">";
    			
					echo "<hr>";
					
					echo "<div class=\"col\">";	
					echo "<p>Writer: " . $writer . "</p>";
					echo "<p>Time: " . $time . "</p>";
					echo "<p>Content: " . $content . "</p>";
					echo "</div>";

					echo "<div class=\"col\">";
					echo "<p><a href=\"remove.php?id={$id}\" class=\"btn btn-primary\" title=\"remove\" name=\"remove\" id=\"remove\">remove</a></p>";
					echo "<p><a href=\"update.php?id={$id}\" class=\"btn btn-primary\" title=\"update\" name=\"update\" id=\"update\">update</a></p>";
					echo "</div>";	

					echo "</div>";	
				}		

  		?>	
  	</div>
  </section>

  <section>
    <div class="container">
      <article>
        <h2>Instructions</h2>
        <p>Here are the small instructions to make the CRUD system work. </p>
        <h4>Create database</h4>
        <p><pre>
          CREATE DATABASE project;
        </pre></p>
        <h4>Create user</h4>
        <p><pre>
          CREATE USER 'new_user'@'localhost' IDENTIFIED BY 'new_password';

          GRANT ALL ON my_db.* TO 'new_user'@'localhost';

          FLUSH PRIVILEGES;
        </pre></p>
        <h4>Create table for the database</h4>
        <p><pre>
          CREATE TABLE notes (
            id INT PRIMARY KEY AUTO_INCREMENT,
            writer TEXT,
            time DATETIME,
            content TEXT
        );         
        </pre></p>
        <h4>Update credentials</h4>
        <p>Remember to update your credentials to config.php -file.</p>
      </article>
    </div>
  </section>

  <section>
    <div class="container">
      <article>
        <h3>CRUD</h3>
        <p>Read more about this project on GitHub.</p>
        <a class="btn btn-primary btn-lg" title="Simple salary calculator written with PHP" href="https://github.com/infected-design/CRUD" target="_blank">CRUD</a>
      </article>
    </div>
  </section>



  <footer class="py-4 bg-dark text-white-50">
    <div class="container">
      <small>Copyright &copy; 1984-2020 <a href="https://infected-design.net" target="_blank">infected-design.net</a>. </small>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="__/js/bootstrap.min.js"></script>
</body>
</html>
