<?php
include("Conexion.php");
$desde= $_POST['desde'];
$hasta= $_POST['hasta'];
if(isset($desde)== false){
    $desde=$hasta;

}
if(isset($hasta)== false){
    $hasta=$desde;
    
}
$sql=mysqli_query($conexion,"SELECT * FROM carrito  WHERE serviciodomicilio=0 AND fecha BETWEEN $desde AND $hasta ORDER BY id ASC");

echo'
        <table class="table table-responsive">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Id de venta  </th>
              <th class="letrasmenu" scope="col">Id de usuario</th>
              <th class="letrasmenu" scope="col">Fecha</th>
              <th class="letrasmenu" scope="col">Usuario</th>
              <th class="letrasmenu" scope="col">Total</th>
              <th class="letrasmenu" scope="col">Id de producto</th>
             
              
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
';
if(mysqli_num_rows($sql)>0){
    while ($sql2=mysqli_fetch_array($sql)) {
        echo'
        <tr>
                  
                  <td class="letrasmenu">' .
                        $sql2["id"] .
                        '</td>
                  <th class="letrasmenu" scope="row">' .
                        $sql2["idusuario"] .
                        '</th>
                  
                  <td class="letrasmenu">' .
                        $sql2["fecha"] .
                        '</td>
                  <td class="letrasmenu" >' .
                        $sql2["usuario"] .
                        '</td>
                  
                  <td class="letrasmenu">' .
                        $sql2["totalpagar"] .
                        '</td>
                  
                  <td class="letrasmenu"><a href="ventaslocales22.php?id='.$sql2["id"].'"   type="button" class="btn btn-outline-danger" > Consultar</a></td>
                  
                  <td class="letrasmenu"><a href="#"  onclick="eliminar(' .
                        $sql2["id"] .
                        ')" type="button" class="btn btn-outline-danger" > <i class="fas fa-trash"></i></a></td>
                </tr>
            </table>
        ';
    }

}
?>