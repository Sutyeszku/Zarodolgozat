<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="getData.js"></script>
  <title>FootBall Meta</title>
</head>

<body>
  
  <div class="container bg-light p-0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php">Főoldal</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=Leagues.php">Leagues</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=Players.php">Players</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row p-3 justify-content-center">
    <?php
        if(isset($_GET['prog']))
          include $_GET['prog'];
         else
          include 'main.php'; 
      ?>
    </div>

  </div>
 
  <script src="bootstrap/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>