<?php
 $servername = "sics";
 $username="bca";
 $password="";
$conn = mysqli_connect($servername, $username, $password);   
 if(!$conn){
die("sorry ! you have not connected ");

 }

     echo " connect was success";
     $sql = "CREATE DATABASE sumit"
     $result = mysqli_query ($conn,  $sql);
       



     if ($result){ e
      echo "database created succesfully ";

     }
     else{
        echo "the db not created by you " . mysql_error($conn);

     }
 ?>
