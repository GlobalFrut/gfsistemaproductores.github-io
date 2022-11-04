<?php
    $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
    $id=$_GET["idcarpeta"];
    error_reporting(0);
    $nombrecompleto=$_GET['nombre'];
    $sql="INSERT INTO Enviados VALUES(null, '$id','FISICA','Pendiente', 'Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente', 'N/A')";
    mysqli_query($con, $sql);
    mysqli_close($con);
  $nombre2=$_GET['nombre2'];
  header("Location: actualizar2.php?idcarpeta=$id&nombre2=$nombre2");

 


  ?>