<?php
session_start();
ini_set('display_errors','1');

include "connect.php";
  $Location = filter_input(INPUT_POST, 'Location', );
  $Date = filter_input(INPUT_POST, 'Date', );
  $add = $conn->prepare("INSERT INTO ShowList (Location, Date) VALUES (?, ?)");
  $add->bind_param("ss", $Location, $Date);
  $add->execute();
  $add->close();
  header("Location: admin.php");
}
?>
