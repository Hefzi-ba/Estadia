
 
 
<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["nombrecategoria"])) {
    $nombrecategoria = $_POST["nombrecategoria"];

    $sql =
        "insert into categoria (nombrecategoria) values
     ( '" .
        $nombrecategoria .
        "')";
    mysqli_query($conexion, $sql);
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Categoria registrada!");
        window.location="Vercategoria.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Vercategoria.php"
        </script>';
    }
}
?>

<html lang="en">
    
    <body >
       
    <br>
    <br>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Agregarcategoria.php"  method="POST"  class=" container form">
                
            <h1 class="ptext" >Registro de una nueva categoría.</1> 
                
                <div class="form-group">
                    <label  class="ptext">Nombre:</label>
                    <input type="text" class="form-control"   name="nombrecategoria" required>
                    
                </div>
                
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar categoría">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>
     