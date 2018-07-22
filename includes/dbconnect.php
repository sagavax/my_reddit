<?php
  date_default_timezone_set('Europe/Bratislava');
  $dbname     = "my_reddit";
 $dbserver   = "mariadb101.websupport.sk";
 $dbuser     = "webnews";
 $dbpass     = "OhYXCtXd44";

 date_default_timezone_set('Europe/Bratislava');
 $link = $connection = mysqli_connect("mariadb101.websupport.sk", "webnews", "OhYXCtXd44", "webnews", 3312);



  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
  }
mysqli_select_db($link,$dbname);

//
// Setup the UTF-8 parameters:
// * http://www.phpforum.de/forum/showthread.php?t=217877#PHP
//
// header('Content-type: text/html; charset=utf-8');
mysqli_query($link,'set character set utf8;');
mysqli_query($link,"SET NAMES `utf8`");
?>
