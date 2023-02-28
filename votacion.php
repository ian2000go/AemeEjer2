<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Ranking votaciones</title>  
           
      </head>  
      <body>  
           <h1>Ranking:</h1>
      </body>  
 </html>  

<?php
  require 'conn.php';
  $sql = $conn->prepare("SELECT * FROM `images`");
  $sql->execute(); 
   $result = $sql->fetchAll(PDO::FETCH_COLUMN, 2);

   $sql2 = $conn->prepare( "INSERT into votar");

  
  ?>