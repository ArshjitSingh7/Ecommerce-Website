<?php

   $dbServerName="localhost";
   $dbUserName="root";
   $dbPassword="";
   $dbName="ecommerce";
   $conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
   if(!$conn) {
       die("connection Failed!".mysqli_connect_error());
   } 