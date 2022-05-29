<?php
	
	date_default_timezone_set('Mexico/General');
	include 'conexion.php';
    $burp="Sin informacion";
    $zap="Sin informacion";
    $hash="Sin informacion";
    echo "<table class='t2'>";
	$sql = mysqli_query($cx,"SELECT * FROM score WHERE 1");		
	while($row=mysqli_fetch_row($sql)){
		$herramienta=$row[1];
		$pruebas=$row[3];
        $diferencia=$row[7];
        if($diferencia==0){$diferencia="Aun no se ejecuta la prueba";}
               
		echo "<tr>
                <th class='herramienta'>$herramienta</th>
                <th class='medida'>$diferencia</th>
            </tr>";
           
            
	}
    echo "</table>";
    $tiempo_milisegundos = microtime(true);
    echo "@cer0day";

?>