<html>
    <?php
    include("Menu.html");
    include("conexion/Conexion.php");
    ?>
     
    <div class="container">
      <div class="card">
        <?php
        
      
        $consulta="select * from nosotros  ";
        $respuesta=mysqli_query($conexion,$consulta);
        while($arreglo2=mysqli_fetch_array($respuesta)){
          echo '
          
                    <div class="card-body">
                        <h5 class="card-title nosotros">'.$arreglo2['titulo'].'</h5>
                        <p class=" ptext nosotros">'.$arreglo2['descripcion'].' </p>
                        <p class=" ptext nosotros">'.$arreglo2['correo'].' </p>
                    
                    </div>
                      
                     
                      
                   
                   
                   

            
            
            ';
          }
          ?>
          
  </div>
</div>
    
  
        <br>
        <br>

        <div class="container ">
                 <div class="card box w-100">
                    <p class="nosotros">Ubicación en Nuevo Casas Grandes </p>
                    
                    <iframe class="card w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.7396971491057!2d-107.91249424915549!3d30.415126381659444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcadd085b0f975%3A0xb740ad0a16aefc3b!2sDark%20Cube!5e0!3m2!1ses!2smx!4v1622143741243!5m2!1ses!2smx"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
        </div>
             
            
        
        <br>
        <br>
<?php
include("footer.html")?>
</html>