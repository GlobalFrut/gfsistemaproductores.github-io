<?php
    $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
    $id= $_POST['idcarpeta'];   
   
    $busqueda="SELECT * FROM Carpetas WHERE id_carpeta='$id' ";
    $resultado=mysqli_query($con, $busqueda);
 
    if ($row=mysqli_fetch_assoc($resultado)) {
    
        $carpeta=$row['Nombre_carpeta'];
        echo $carpeta;
    
    }


    $busqueda2="SELECT * FROM Enviados WHERE Nombre_carpeta='$carpeta' ";
    $resultado2=mysqli_query($con, $busqueda2);
 
    if ($row2=mysqli_fetch_assoc($resultado2)) {
    
        $tercero=$row2['Tercero'];
        $id=$row2['id_status'];
        $nombre=$row2['Nombre_carpeta'];
        
    
    }
        $nombre2= $_GET['nombrecomp'];
    
    if($tercero=="PRODUCTOR"){
        header("Location: actualizar3.php?idcarpeta=$nombre&nombre2=$nombre2");
    }
    if($tercero=="FISICA"){
        header("Location: actualizar2.php?idcarpeta=$nombre&nombre2=$nombre2");
    }
    if($tercero=="MORAL"){
        header("Location: actualizar6.php?idcarpeta=$nombre&nombre2=$nombre2");
    }
?>