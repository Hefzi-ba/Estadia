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
    include("Menuadmin2.php");
    ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
           
            <canvas id="migrafica" width="400" height="300"></canvas>
            </div>
        </div> 
    </div><!-- /.container-fluid -->
</body>
<script>
    let miCanvas=document.getElementById("migrafica").getContext("2d");

    var chart = new Chart(miCanvas,{
        type:"bar",
        data: {
            labels:[ <?php 
                    include('./conexion/Conexion.php');
                    $sql= "SELECT * FROM carrito";
                    $resultado= mysqli_query($conexion, $sql);
                    while ($registros = mysqli_fetch_array($resultado)) {?>
                        
                    '<?php echo $registros["fecha"] ?>',
                    <?php    
                    }
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