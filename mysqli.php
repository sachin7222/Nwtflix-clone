 <?php
 $servername = "sics";
 $username="bca";
 $password="";
$conn = mysqli_connect($servername, $username, $password);   
 if(!$conn){
die("sorry ! you have not connected ");

 }

     echo " connect was success";
     
 

 ?>
