
<?php

// connect to database
$con = mysqli_connect('localhost','root','root','ap-grab meals');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
