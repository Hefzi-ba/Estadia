<?php 
ob_start();
include "./conexion/Conexion.php";
include "indexad2.php";
$sql ="select * from envio  where id=" . $_GET["id"] . " ";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["montoenvio"])) {
    $sql =
        "update envio  set  montoenvio='" .$_POST["montoenvio"]."',texto_envio='" .$_POST["texto_envio"]."'  where  id=".$_POST["id"] ." ";
    mysqli_query($conexion, $sql);
    
    header("location: ./Verenvio.php");
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
               letter-spacing: 2px;">Edición de envio mínimo.</h1>  
                <div class="form-group">
                
                    <label  class="ptext">Texto de envío:</label>
                    <input type="text" class="form-control"   name="texto_envio" value='<?php echo $fila[
                        "texto_envio"
                    ]; ?>' >
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Monto minimo de envío:</label>
                    <input type="text" class="form-control"   name="montoenvio"  value='<?php echo $fila[
                        "montoenvio"
                    ]; ?>'>
                    
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
     