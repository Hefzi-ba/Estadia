<?php 
include('./conexion/Conexion.php');
?>
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
<div style="width: 50%;"> 
    <canvas id="canva" width="40" height="40"></canvas>
</div>
    
    <script>
        var randomScalingFactor = function(){return Math,round(Math,random()*100)},
        var myChart= new Chart(ctx,{
            type:"bar",
            data:{
                labels:[
                    <?php 
                    $sql= "SELECT * FROM carrito";
                    $resultado= mysqli_query($conexion, $sql);
                    while ($registros = mysqli_fetch_array($resultado)) {?>
                        
                    '<? echo $registros["lugar"] ?>',
                    <?php    
                    }
                    ?>
                ],
                datasets:[{
                        label:'Num datos',
                        data:[10,9,15],
                        backgroundColor:[
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                }]
            },
            
        });
        window.onload =function(){
            var ctx= document.getElementById("mi").getContext("2d");
            window.myChart= new Chart(ctx).Bar(barChartData,{
                responsive : true
            });
        }
    </script>
</body>
</html>