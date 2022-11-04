<?php
  $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  $id=$_GET["idcarpeta"];
 
  $nombrecompleto=$_GET['idcarpeta'];
  $sql="INSERT INTO Enviados VALUES(NULL, '$nombrecompleto','MORAL','Pendiente', 'Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente')";
  mysqli_query($con, $sql);
  



  $nombre2=$_GET['nombre2'];
  header("Location: actualizar6.php?idcarpeta=$id&nombre2=$nombre2");

  ?>
  

 