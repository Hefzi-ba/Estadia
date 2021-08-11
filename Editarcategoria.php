<?php 
ob_start();
include "./conexion/Conexion.php";
include "indexad2.php";

$sql ="select * from categoria  where id=" . $_GET["id"] . " ";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["nombrecategoria"])) {
    $sql =
        "update categoria  set  nombrecategoria='" .$_POST["nombrecategoria"]."'  where  id=".$_POST["id"] ." ";
    mysqli_query($conexion, $sql);
    
    header("location: ./Vecategoria.php");
    ob_end_flush();
}


?>

    <body >
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Editarenvio.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de categorías.</h1>  
                <div class="form-group">
                
                    <label  class="ptext">Categoria:</label>
                    <input type="text" class="form-control"   name="texto_envio" value='<?php echo $fila[
                        "nombrecategoria"
                    ]; ?>' >
                    
                </div>
                
                
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar edición">
                <input type="hidden" name="id" value="<?php echo $fila[
                    "id"
                ]; ?>">
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->
    </body>
</html>
     