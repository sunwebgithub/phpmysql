<?php


    $host = "localhost";   //See Step 3 about how to get host name
    $user = "test";                     //Your Cloud 9 username
    $pass = "123";                                 //Remember, there is NO password!
    $db = "guestbook";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306


$con = mysqli_connect("localhost","test","123","guestbook", null, "/cloudsql/phpmysql1");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
