<?php
//$connect = mysql_connect("localhost","test","123") or die ("Error: could not connect to database");
//echo $connect;

    $host = "localhost";   //See Step 3 about how to get host name
    $user = "test";                     //Your Cloud 9 username
    $pass = "123";                                 //Remember, there is NO password!
    $db = "guestbook";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

//And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM entries";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['entryID '] . " and the guestname is: " . $row['guestName'];
    }

//echo 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, ';
