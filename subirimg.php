<?php
  require 'conn.php';



   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['userfile']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['userfile']['type'];
      $tamano = $_FILES['userfile']['size'];
      $temp = $_FILES['userfile']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if(!isset($_SESSION)) 
        { 
                session_start(); 
        }
        $id = $_SESSION['user'];
        $sql = $conn->prepare("INSERT into images (idUsu,Name,Descripcion,Imagen ) VALUES ('$id','$archivo','$tamano','$tipo')");
        $sql->execute();
        $fetch = $sql->fetch();
        if (move_uploaded_file($temp, 'imagenes/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('imagenes/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="imagenes/'.$archivo.'"></p> <a href="view.html.php">Ver Imagenes</a>';

      
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }

?>