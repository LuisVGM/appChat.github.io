<?php
   //RETOMAMOS LA SESION QUE ESTA INICIADA
   session_start();

   //SI NO HAY INICIADA UNA SESION REDIRIGIRA AL INDEX
   if(!isset($_SESSION["username"])){
       header('Location: index.php');
   }
   error_reporting(0); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppChat</title>
</head>
<body>
    <?php echo "<h1>Bienvenido ".$_SESSION['username']."</h1>"; ?>
    
</body>
</html>