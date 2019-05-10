<?php
$servername = "db5000047478.hosting-data.io";
$database = "dbs42384";
$username = "dbu113975";
$password = "prueb@sTIC006";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if($_SERVER["REQUEST_METHOD"] == "POST") {

      $nom=$_POST['nom'];
      $llinatges=$_POST['llinatges'];
      $user=$_POST['username'];
      $password=$_POST['password'];

      $sql = "INSERT INTO AGENDA_USUARI (NOM, LLINATGES, USUARI, CONTRASENYA)
      VALUES ('$nom', '$llinatges', '$user', '$password')";

      if ($conn->query($sql) === TRUE) {
          header("location: agenda.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
   }

?>


DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agenda Virtual</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Agenda Virtual</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Log in</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registre1.php">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <form action="registre.php" method="post">
            <input type="text" name="nom" class="btn btn-secondary btn-xl rounded-pill mt-5" placeholder="Nom" /> <br>
            <input type="text" name="llinatges" class="btn btn-secondary btn-xl rounded-pill mt-5" placeholder="Llinatges" /> <br>
            <input type="text" name="username" class="btn btn-secondary btn-xl rounded-pill mt-5" placeholder="usuari" /> <br>
            <input type="password" name="password" class="btn btn-secondary btn-xl rounded-pill mt-5" placeholder="Contrasenya" /> <br>
            <input type="submit" class="btn btn-primary btn-xl rounded-pill mt-5" value="Enregistra't" />
            <?php echo $error; ?>
        </form>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>

