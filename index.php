<?php
    header("Content-Type: text/html;charset=utf-8"); 
    //mysqli_query("SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <section class="principal">

        <h1 class="title">Busqueda de Cursos</h1>

        <div class="form">
            <label for="box_search">Buscar</label>
            <input type="text" name="box_search" id="box_search"></input>       
        </div>

        <div id="dataContainer">
            
            <div class="dataTable">
        
            </div>
        </div>

    </section>

    <script type="text/javascript" src="main.js"></script>
    
</body>
</html>