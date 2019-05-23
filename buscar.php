<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "projects";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM cursos WHERE courseName NOT LIKE '' ORDER By courseName ASC LIMIT 10";

    if (isset($_POST['consulta'])) {
			$q = $conn->real_escape_string($_POST['consulta']);
		
    	$query = "SELECT * FROM cursos WHERE  courseName LIKE '%$q%' OR courseDescription LIKE '%$q%' OR courseLevel LIKE '%$q%' OR courseCost LIKE '%$q%' ";
    }

		$resultado = $conn->query($query);
        $rows=mysqli_num_rows($resultado);
       
    if ($resultado->num_rows>0) {
    	$salida.="<div class='headTable'>
        <div class='headTableItem'>Código</div>
        <div class='headTableItem'>Curso</div>
        <div class='headTableItem'>Descripción</div>
        <div class='headTableItem'>Costo</div>
        <div class='headTableItem'>Nivel</div>
    </div>
    <div class='dataTable'>";

    	while ($fila = $resultado->fetch_assoc()) {
            $salida.="<div class='data'>".$fila['courseId']."</div>
            <div class='data'>".utf8_encode($fila['courseName'])."</div>
            <div class='data'>".utf8_encode(substr($fila['courseDescription'], 0 , 30))."...</div>
            <div class='data dataRight'>".$fila['courseCost']."</div>
            <div class='data dataCenter'>".utf8_encode($fila['courseLevel'])."</div>";

    	}
    	$salida.="</div>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }

    echo $salida;

    $conn->close();

?>