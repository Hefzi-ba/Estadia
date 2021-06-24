<html>
<?php
session_start();
session_destroy();
?>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Iniciar sesion</title>

    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <link href="./css/personalizado.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">    
</head>
    <body class="fondologuin">
    <main class="form-signin">
         <form  method="POST" action="phpconexion/validar.php">
         <img class="mb-4" src="./Imagenes/LOGOPAAT.png" alt="" width="72" height="57" style="margin-left: 40%;">

            <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required>
            
            <input type="text" class="form-control" name="contraseña" placeholder="******" require>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
        </form>
    </main>
       
    </body>
</html>