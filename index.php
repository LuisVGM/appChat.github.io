<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<style>
    body {
        /*background-color: #0B1220;
        background-color: #1E1E20;*/
        background: url("descarga.jpg");
        background-size: cover;
        background-attachment: fixed;
        overflow: hidden;
    }

    #contenedor {
            width: 25%;
        }

    #cuerpo {
        margin-top: 10%;
    }

    @media screen and (max-width: 900px){
        #contenedor {
            width: 70%;
        }

        #cuerpo {
            margin-top: 50%;
        }
    }
</style>

<body class="row align-items-center justify-content-center text-center text-white" id="cuerpo">
    
    <div class="text-center text-white col-sm-5" id="contenedor" style="border-radius: 15px; background-color: #0B1220;padding-top: 2%;padding-block-end: 2%;">
    <h1 style="margin-block-end: 40px;">Iniciar Sesion</h1>
        <form class="form-signin" method="POST" action="consultas.php">
            <input type="hidden" name="tipo" id="tipo" value="login">
            <input type="email" class="form-control" name="email"placeholder="E-mail" autofocus required>
            <input type="password" class="form-control" name="password" placeholder="Password" required style="margin-top: 5%;">
            <input type="submit" class="btn btn-light" value="Iniciar" style="margin-top: 8%; margin-block-end: 5%">
        </form>
        <a href="registro.php" >Registrate</a>
        <p class="mb-1 derechos" style="margin-top: 3%;">&copy; AppChat</p>
    </div>

    <script src="funciones.js" type="text/javascript"></script>
</body>
</html>
