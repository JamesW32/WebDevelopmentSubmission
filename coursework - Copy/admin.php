<?php
ini_set('display_errors','1');
session_start();
include "connect.php";
if($_SESSION['Username'] !== 'MNADMIN'){
  header("Location: failedaccess.php");
}

if(isset($_POST['Add'])){
  $Location = $_POST['Location'];
  $ShowDate = $_POST['ShowDate'];
  $add = mysqli_prepare($conn, "INSERT INTO shows (Location, ShowDate) VALUES (?, ?)");
  mysqli_stmt_bind_param($add, "ss", $Location, $ShowDate);
  mysqli_stmt_execute($add);
  mysqli_stmt_close($add);
  echo "<script type 'text/javascript'>alert('Add complete');</script>";
}

if(isset($_POST['Delete'])){
$Location = $_POST['Location'];
$ShowDate = $_POST['ShowDate'];
$delete = mysqli_prepare($conn, "DELETE FROM shows WHERE Location = ? AND ShowDate = ?");
mysqli_stmt_bind_param($delete, "ss", $Location, $ShowDate);
mysqli_stmt_execute($delete);
mysqli_stmt_close($delete);
echo "<script type 'text/javascript'>alert('Delete complete');</script>";
}

if(isset($_POST['Edit'])){
$ShowDate = $_POST['ShowDate'];
$LocationEdit = $_POST['LocationEdit'];
$ShowDateEdit = $_POST['DateEdit'];
$change = mysqli_prepare($conn, "UPDATE shows SET Location = ?, ShowDate = ? WHERE ShowDate = ?");
mysqli_stmt_bind_param($change, "sss", $LocationEdit, $ShowDateEdit, $ShowDate);
mysqli_stmt_execute($change);
mysqli_stmt_close($change);
echo "<script type 'text/javascript'>alert('Edit complete');</script>";
}


?>


<!DOCTYPE HTML>
<html>
<head>
  <title> Admin: The Midnight </title>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device-width, initial_scale=1.0">
  <link rel = "stylesheet" href = "css/bootstrap.css">
  <link rel = "stylesheet" href = "css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
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

  <br />
  <br />
  <h1>Admin Page</h1>
  <br />
  <br />
  <br />
  <br />
  <div id="contentbox2" class="row">
    <div class="col-sm-4">
    </div>

            <div class="col-sm-4">

                <h4 class="page-header" style = "color: White;">Show management</h4>
                <form role="form" action ="admin.php" method = "post">
                    <div class="form-group float-label-control">
                        <label for="Location" style = "color: White;">Location</label>
                        <input name = "Location" id="Location" type="text" class="form-control" placeholder="Enter Location Name">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="ShowDate" style = "color: White;">Date</label>
                        <input name = "ShowDate" id="ShowDate" type="date" class="form-control" placeholder="Enter Date">
                    </div>

                    <br />
                    <br />
                    <h4 class="page-header" style = "color: White;">Change to...<br />(Leave blank if adding or deleting)</h4>
                        <div class="form-group float-label-control">
                            <label for="LocationEdit" style = "color: White;">Location</label>
                            <input name = "LocationEdit" id="LocationEdit" type="text" class="form-control" placeholder="Enter New Location Name">
                        </div>
                        <div class="form-group float-label-control">
                            <label for="DateEdit" style = "color: White;">Date</label>
                            <input name="DateEdit" id="DateEdit" type="date" class="form-control" placeholder="Enter New Date">
                        </div>
                        <br />
                        <br />

                        <h4 class="page-header" style="color: White;">What do you want to do with the chosen show?</h4>
                        <br />
                        <div >
                          <button name ="Add" class="btn btn-lg btn-primary btn-block" type="submit" class="btn">Add</button>
                        </div>
                      <br />
                          <div >
                            <button name ="Delete" class="btn btn-lg btn-primary btn-block" type="submit" class="btn">Delete</button>
                          </div>
                          <br />
                            <div>
                              <button name ="Edit" class="btn btn-lg btn-primary btn-block" type="submit" class="btn">Edit</button>
                            </div>
                    </form>
                </div>

             <div class="col-sm-4">
             </div>

</body>
</footer>
</html>
