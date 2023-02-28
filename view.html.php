<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Imagenes existentes</title>  
           
      </head>  
      <body>  
           <h1>Imagenes participantes:</h1>

<?php
  require 'conn.php';

   $sql = $conn->prepare("SELECT * FROM `images`");
   $sql->execute(); 
    $result = $sql->fetchAll(PDO::FETCH_COLUMN, 2);
    $result2 = $sql->fetchAll(PDO::FETCH_COLUMN, 1);
    
    foreach ($result as $valor){
        '<form action="votacion.php" method="post"';
        echo '<p><img src="imagenes/'. $valor .'"></p> <br> <p><input type="submit" value=""></p> <br>';
         '</form>';
    }
   

    ?>

  <a href = "home.html.php">Home</a>
  <br>
  <a href = "logout.php">Logout</a>



      </body>  
 </html>  

