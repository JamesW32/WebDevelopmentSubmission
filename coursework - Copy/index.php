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
        <img src="img/logo-image.png" class="img-fluid" alt="The Midnight" style="width:15%">
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

  <div class="container-fluid text-center ">
    <div class="row content">
      <div id="text-body" class="text-centre">
<div>
<img src="img/Banner.png" class="img-fluid" alt="The Midnight" style="width:100%">
</div>
        <hr>
<div id="Countdown">
        <h3>Countdown for Release</h3>
        <h1 id="demo"></h1>

        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 20, 2020 18:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Download our new album Kids Now!";
          }
        }, 1000);
      </script>
</div>
      <div class="content-wrapper">
        <div class="iframe-wrapper res-16by9">
          <iframe width="700" height="460" src="https://www.youtube.com/embed/aQYTuk-_hKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

     <div id="flip"><p>Want more info? <b>Click here!</b></p></div>
    <div id="panel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> </div>
    <script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
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
