<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Notes - easier than you think</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../__/css/bootstrap.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-md static-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Add note</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Frontpage</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="container">
  	<div class="jumbotron">
  		<h2>Add a new note</h2>
      <form action="add_process.php" method="post">
        <div class="form-group">
          <label for="writer">Writer: </label>
          <input type="text" class="form-control" name="writer" id="writer">
        </div>
        <div class="form-group">
          <label for="content">Content: </label>
          <textarea class="form-control" name="content" id="content" rows="4"></textarea>
        </div>
	
        <input type="submit" class="btn btn-primary" name="submit" value="submit">
        <input type="reset" class="btn btn-primary" name="reset" value="reset">

      </form>
  	</div>
  </section>

  <footer class="py-4 bg-dark text-white-50">
    <div class="container">
      <small>Copyright &copy; 1984-2020 <a href="https://infected-design.net" target="_blank">infected-design.net</a>. </small>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

  <script src="../__/js/bootstrap.min.js"></script>
</body>
</html>

