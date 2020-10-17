<!DOCTYPE html>
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

<div id="contentbox2" class="center">
  <h1>Shows</h1>
<br />
<br />
<div id="clockdate">
<div class="clockdate-wrapper">
  <div id="localdate"></div>
</div>
</div>
<br />
<br />
<table class="table table-light">
  <tr>
    <th>Date (M-D-Y)</th>
    <th>Location</th>
  </tr>
  <?php
  ini_set('display_errors','1');
  include "connect.php";
  $table = "SELECT Location, ShowDate FROM shows";
  $conn->query("$table");
  $result = $conn->query($table);

  if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
      echo "<tr><td>".$row["Location"] ."</td><td>". $row["ShowDate"] ."</td></tr>";
    }
    echo "</table>";
  }
    else {
      echo "0 result";
    }

  $conn-> close();
  ?>
</div>
<div id="contentbox2" class="center">
  <script>
  function getVote(int) {
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("poll").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","poll_vote.php?vote="+int,true);
    xmlhttp.send();
  }
  </script>

  <div id="poll">
  <h3>Do you like our Website?</h3>
  <form>
  Yes:
  <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
  <br>No:
  <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
  </form>
  </div>

</div>




</body>
</html>
