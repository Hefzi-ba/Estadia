<!DOCTYPE html>
<html lang="en">
<?php

?>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./css/bootstrap.css" rel="stylesheet">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./css/login.css" rel="stylesheet">
        <link href="./css/estiloDC.css" rel="stylesheet">
   
        <title>DarkCube</title>
    </head>
    <body class="">
        <form method="POST" action="conexion/validar.php" class="was-validated container">
            <div class="body" >
		        <div class="grad"></div>
		             <div class="header">
			            <div class="letraslogin"><span class="letraslogin">DarkCube</span></div>
		             </div>
		                <br>
		            <div class="login"  >
				        <input type="text" placeholder="Usuario" name="user"><br>
				
                        <input type="password" class="form-control"  placeholder="*******" name="contrasena" required>
                        <br>
				        <button type="submit" class=" btnx btn btn btn-outline-light">Iniciar sesión!!</button><br>
                    </div>
                </div>   
		    </div>
        </form>
    </body>
</html>