<?php
ob_start(); //Turns on outpost bufferring
session_start();

$timezone = date_default_timezone_set("Indian/Mahe");

$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

 if(mysqli_connect_errno())
  {
     echo "Failed to connect".  mysqli_connect_error();
  }

 ?>