
<!DOCTYPE html>
<?php
    require 'conn.php';
    session_start();
    
    if(!ISSET($_SESSION['user'])){
        header('location:index.html.php');
    }
?>
<html >
    <head>
    </head>
<body>

    <form action="subirimg.php" method="post" enctype="multipart/form-data">
        <b>Enviar un nuevo archivo: </b>
        <br>
        <input name="userfile" type="file">
        <br>
        <input type="submit" value="submit">
    </form>
    
            <h3>VOTAR!</h3>
            <a href="view.html.php">Ver Imagenes</a>
            <br />
            <br />
            <?php
                $id = $_SESSION['user'];
                $sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
                $sql->execute();
                $fetch = $sql->fetch();
            ?>
            <?php echo $fetch['firstname']?>
            <a href = "logout.php">Logout</a>
        </div>
    </div>
</body>
</html>