<?php
ob_start();
 include "indexad2.php";
 include "./conexion/Conexion.php";
$sql = "select * from nosotros where id=" . $_GET["id"] . "";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["titulo"])) {
    $sql =
        "update nosotros set titulo='" .
        $_POST["titulo"] .
        "',  descripcion='" .
        $_POST["descripcion"] .
        "', correo='" .
        $_POST["correo"] .
        "' where id=" .
        $_POST["id"] .
        "";
    mysqli_query($conexion, $sql);
    echo $sql;
    header("location: ./Vernosotros.php");
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
            <form action="Editarnosotros.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de producto en la sección nosotros.</h1>  
                <div class="form-group">
                
                    <label  class="ptext">Titular:</label>
                    <input type="text" class="form-control"   name="titulo" value='<?php echo $fila[
                        "titulo"
                    ]; ?>' >
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Frase de descripción:</label>
                    <input type="pwd" class="form-control"  name="descripcion" value='<?php echo $fila[
                        "descripcion"
                    ]; ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Correo:</label>
                    <input type="text" class="form-control"   name="correo"  value='<?php echo $fila[
                        "correo"
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

     