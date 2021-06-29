<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./node_modules/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <canvas id="migrafica" width="400" height="300"></canvas>
</body>
<script>
    let miCanvas=document.getElementById("migrafica").getContext("2d");

    var chart = new Chart(miCanvas,{
        type:"bar",
        data: {
            labels:["vino", "tequila", "ron"],
            datasets:[
                {
                    label: "mi grafica de bebidas",
                    backgroundColor:"reg(0,0,0)",
                    borderColor: "rgb(0,255,0)",
                    data:[12,39,30]
                }
            ]
        }
    })
</script>
</html>