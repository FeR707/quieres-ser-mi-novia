<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si o no</title>
    <style>
        .boton{
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            color: black;
            background-color: coral;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>¿Quieres ser mi novia?</h1>
        <button class="boton" id="btn-si" onclick="loSabia()">Si</button>
        <button class="boton" id="btn-no" style="position: absolute;">No</button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn-no").mouseenter(function(){
            n = valorAleatorio()+"%";
            $(this).css("right", n);
            $(this).css("top", n);
        });

        function valorAleatorio(min=10, max=80){
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    });

    function loSabia(){
        alert("Sabia que Dirias que SI!!!")
    }
</script>
</html>