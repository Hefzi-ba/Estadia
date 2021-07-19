<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./node_modules/chart.js/dist/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include("indexad2.php");
    ?>
    <br>
    <br>
    

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
            $sql = "SELECT * FROM carrito";
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