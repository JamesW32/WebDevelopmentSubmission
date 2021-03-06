<?php
session_start();
ini_set('display_errors','0');

include "connect.php";

if(isset($_POST['submit'])){
$Uname = filter_input(INPUT_POST, 'Uname', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'Pword', FILTER_SANITIZE_STRING);
$check = mysqli_prepare($conn, "SELECT Password FROM userdatabase WHERE Username = ?");
mysqli_stmt_bind_param($check, "s", $Uname);
mysqli_stmt_execute($check);
mysqli_stmt_bind_result($check, $storedhash);
if ($Uname == "MNADMIN" AND $password == "TEST")
{
  setcookie('loginname', $Uname, time() + (86400 * 30), "/");
$_SESSION['Username'] = "$Uname";
header("Location: admin.php");
mysqli_stmt_close($check);
mysqli_close($conn);
}
while (mysqli_stmt_fetch($check)) {
  if(password_verify($password, $storedhash)) {
    setcookie('loginname', $Uname, time() + (86400 * 30), "/");
    $_SESSION['Username'] = $Uname;
  header("Location: logged.php");
  mysqli_stmt_close($check);
  mysqli_close($conn);
}
}
}
?>

<html lang="en">
<head>
  <title>The Midnight</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Domine&display=swap');
@import 'css/style.css';
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="img/logo-image.png" class="img-fluid" alt="The Midnight" id="mn" style="width:15%">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="https://www.ticketmaster.com/the-midnight-tickets/artist/2485101">Tickets</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="shows.php">Shows</a></li>
            <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
            <li><a href="loggedout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <form class="form-signin" action = "login.php" method="post">
        <h1 class="form-signin-heading">LOGIN</h1>
      </br>
        <label for="Uname" class="sr-only">Username</label>
        <input name="Uname" type="text" id="Uname" class="form-control" placeholder="Username" required autofocus value="<?php echo $_COOKIE['loginname'] ?>">
        <label for="Pword" class="sr-only">Password</label>
        <input name ="Pword" type="password" id="Pword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" for="submit" type= "submit" name="submit" >Submit</button>
      </form>
</br>






<footer class="container-fluid text-center">
  <p>Pre-order our new album <b>Kids</b> Everywhere</p>
  <p>By using this website you abide with the <a href="http://www.legislation.gov.uk/ukpga/2018/12/contents/enacted">GDPR</a> laws</p>
  <h4>© James Wood 2019</h4>
</footer>

</body>
</html>
