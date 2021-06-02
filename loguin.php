<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./css/bootstrap.css" rel="stylesheet">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./css/estiloDC.css" rel="stylesheet">
   
        <title>DarkCube</title>
    </head>
    <body class="body">
       

    
        <form action="/action_page.php" class="was-validated container form">
            
            <div class="form-group">
            
                <label for="uname" class="mar">Usuario:</label>
                <input type="text" class="form-control" id="uname" placeholder="Introduzca su usuario" name="uname" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Vacio es invalido</div>
            </div>
            <div class="form-group">
                <label for="pwd" class="mar">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="*******" name="pswd" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Vacio es invalido</div>
            </div>
           <br>
            <button type="submit" class="w-100 btnx btn btn-outline-danger">Iniciar sesión</button>
        </form>
        
        
    </body>
</html>
     