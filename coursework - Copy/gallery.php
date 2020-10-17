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

  <div class="container-fluid text-center">
    <div class="row content">

      <div id="text-body" class="text-centre">
        <div class="container">
          <img src="img/kids.png" alt="Avatar" class="image" style="width:100%">
          <div class="middle">
            <div class="text">Kids</div>
          </div>
        </div>
</div>

<div id="text-body" class="text-centre">
  <div class="container">
    <img src="img/nocturnal.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
      <div class="text">Nocturnal</div>
    </div>
  </div>
</div>

<div id="text-body" class="text-centre">
  <div class="container">
    <img src="img/endless-summer.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
      <div class="text">Endless Summer</div>
    </div>
  </div>
</div>

<div id="text-body" class="text-centre">
  <div class="container">
    <img src="img/days-of-thunder.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
      <div class="text">Days of Thunder</div>
    </div>
  </div>
</div>


 <a href="gallery.php" title="Return to the top of the page">Click here</a>

 <script>
 $('a').tooltip({

    disabled: true,
    close: function( event, ui ) { $(this).tooltip('disable'); }
});

$('a').on('click', function () {
    $(this).tooltip('enable').tooltip('open');
});
 </script>
    </div>
  </div>
</div>





<footer class="container-fluid text-center">
  <p>Pre-order our new album <b>Kids</b> Everywhere</p>
  <p>By using this website you abide with the <a href="http://www.legislation.gov.uk/ukpga/2018/12/contents/enacted">GDPR</a> laws</p>
  <h4>© James Wood 2019</h4>
</footer>

</body>
</html>
