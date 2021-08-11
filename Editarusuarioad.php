<?php 
ob_start();
include "./conexion/Conexion.php";
include "indexad2.php";
$sql = "select * from usuarios where tipodeusuario='admin' and id=" . $_GET["id"] . "";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["nombreusuario"])) {
    $sql =
        "update usuarios set nombreusuario='" .
        $_POST["nombreusuario"] .
        "',  correousuario='" .
        $_POST["correousuario"] .
        "', contrasena='" .
        md5($_POST["contrasena"]) .
        "' where id=" .
        $_POST["id"] .
        "";
    mysqli_query($conexion, $sql);
    echo $sql;
    header("location: ./Verusuarios.php");
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
            <form action="Editarusuarioad.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de usuarios.</h1>  
                <div class="form-group">
                
                    <label  class="ptext">Usuario:</label>
                    <input type="text" class="form-control"   name="nombreusuario" value='<?php echo $fila[
                        "nombreusuario"
                    ]; ?>' >
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Correo:</label>
                    <input type="text" class="form-control"   name="correousuario"  value='<?php echo $fila[
                        "correousuario"
                    ]; ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Contrasena:</label>
                    <input type="pwd" class="form-control"  name="contrasena" value='<?php echo $fila[
                        "contrasena"
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