<?php
$con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  $id=$_GET["idcarpeta"];

  $nombrecompleto=$_GET['idcarpeta'];
  $sql="INSERT INTO Enviados VALUES(null, '$id','PRODUCTOR','Pendiente', 'Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','N/A','N/A', 'N/A')";
  mysqli_query($con, $sql);
  mysqli_close($con);

$nombre2=$_GET['nombre2'];
  header("Location: actualizar3.php?idcarpeta=$id&nombre2=$nombre2");

 
 

  ?>