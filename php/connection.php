<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword ="";
    $dbname = "meshkat";
    $dbscore=0;

    if(!$con = mysqli_connect($dbhost, $dbuser,$dbpassword,$dbname,$dbscore))
    {
      die("Failed !");
    }

