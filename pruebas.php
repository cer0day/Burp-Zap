<?php
date_default_timezone_set('Mexico/General');
$hora=date('h:m:s');
include 'conexion.php';
$sql = mysqli_query($cx,"SELECT * FROM score WHERE herramienta ='BurpSuite'");		
while($row=mysqli_fetch_row($sql)){
    $pruebas=$row[3];
    if($pruebas==""){$pruebas="Standby";}
    echo $pruebas;				
}

?>