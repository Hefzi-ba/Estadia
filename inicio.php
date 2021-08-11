
<html lang="en">
    

    <body class="body">
      
    <div class="">
        <div class="row row-cols-1 row-cols-md-3 g-4 cardspace">
            <?php
            include "conexion/Conexion.php";

            $consulta = "select * from inicio  ";
            $respuesta = mysqli_query($conexion, $consulta);
            while ($arreglo2 = mysqli_fetch_array($respuesta)) {
                echo '
              
                    <div class="col">
                      <div class="card box">
                            <h5 class="card-title mmar">' .
                    $arreglo2["titular"] .
                    '</h5>
                    
                            <img src="imagenes/Inicio/' .
                    $arreglo2["imageninicio"] .
                    '" class="card-img-top imgcard model" alt="...">
                        
                            </div>
                            </div>
                          
                          ';
            }
            ?>
              
      </div>
  </div>
  
  
  
  <br>
 
  </body>
</html>