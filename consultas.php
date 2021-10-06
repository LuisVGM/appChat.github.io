<?php
include_once('conexion.php');
error_reporting(~E_ALL);
$tipo = $_POST['tipo'];

if(!$conexion){
    echo 'alert("Error al conectarse a la BD");';
}

if($tipo == "login"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $inicio ="SELECT * FROM usuarios WHERE email='$email' and clave='$password'";

	$result= mysqli_query($conexion,$inicio);
	
	$totalFilas = mysqli_num_rows($result);
	//echo $totalFilas;
	//exit();
	if($totalFilas > 0){
		while($estado = mysqli_fetch_array($result)){
			$id = $estado['id'];
            $username = $estado['username'];
		}
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;

        header('Location: chat.php');
		
    }else{
		echo'<script type="text/javascript">alert("Correo o Contraseña incorrecta");
		window.location.href="index.php";</script>';
	}
}

if($tipo == "registro"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registro = "INSERT INTO usuarios(username,email,clave) VALUES ('$username','$email','$password');";

    $consulta = mysqli_query($conexion, $registro);

    if (!$consulta){
        echo'<script type="text/javascript">alert("Error al registrar el usuario");
        window.location.href="registro.php";</script>';
    }else{
        echo'<script type="text/javascript">alert("Haz sido registrado correctamente, continua iniciando sesión");
        window.location.href="index.php";</script>';
    } 
}

//cerrar la conexion
mysqli_close($conexion);

?>