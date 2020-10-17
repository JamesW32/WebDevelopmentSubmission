
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

<h1>No Access, Login to the admin account to access this page</h1>

<div id="div1"><h2>Admin struggling to login?</h2></div>

<button>More Info</button>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "adminlo.txt", success: function(result){
      $("#div1").html(result);
    }});
  });
});
</script>
