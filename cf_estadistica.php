<?php 
include("indexad2.php");
?>


<body>
    

     <!--include "Menuadmin2.php"-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-12">
                    <div class="col-md-8">
                            <p class="text-center">
                                <h2 class="letrasmenu" style="text-align: center;">Ventas por dia</h2>
                            </p>
                            <form method="POST" action="cf_estadistica.php">
                                <input type="date" name="f1e" class="letrasmenu ">
                                <input type="date" name="f2e" class="letrasmenu ">
                                <input type="submit" class=" letrasmenu btn btn-dark" value="Buscar">
                            </form>
                            <!-- grafica dentro-->
                            <div class="chart">
                                <!-- Sales Chart Canvas se inserta el canvas  -->
                                <canvas id="migrafica" width="2000" height="2000"></canvas>
                            </div>

                        <!-- /.chart-responsive -->
                    </div>
                     
                </div> 
            </div>
        </div>
    
</div>
             <!-- /.container-fluid -->
</body>

<script>
    let miCanvas=document.getElementById("migrafica").getContext("2d");

    var chart = new Chart(miCanvas,{
        type:"bar",
        data: {
            labels:[ <?php
            include "./conexion/Conexion.php";
            $f1e=$_POST['f1e']."00:00:00";
            $f2e=$_POST['f2e']."11:59:59";
            
            $sql = "SELECT * FROM carrito WHERE fecha BETWEEN '$f1e' AND '$f2e' ";
            $resultado = mysqli_query($conexion, $sql);
            while ($registros = mysqli_fetch_array($resultado)) { ?>
                        
                        '<?php echo $registros["fecha"]; ?>',
                    <?php }
            ?>],
            datasets:[
                {
                    label: "Grafica de ventas",
                    backgroundColor:"reg(0,0,0)",
                    borderColor: "rgb(169, 50, 38 )",
                    data:[12,39,30]
                }
            ]
        }
    })
</script>
</html>
