<?php
    echo $_GET['nombre'];
    echo $_GET['nombre2'];
    $hola=$_GET['nombre'];
    $contenido =$_POST['lote'];
    $nombre2=$_GET['nombre2'];

    date_default_timezone_set("America/Mexico_City");
    $fecha= date('Y-m-j').'-'.date('s');;
    $hora= date('H:i:s');
    $nuevo=$fecha.'-'.$hora;
    echo $nuevo;
    $nuevo=$fecha.'-'.$hora;
    echo $nuevo;

    $archivo = fopen('Documentos/'.$_GET['nombre'].'/Lotes Completos'.'.txt','a');
    fputs($archivo,$contenido);

    $archivo2=fopen('Documentos/'.$_GET['nombre'].'/'.$fecha.'.txt','a');
    fputs($archivo2,$contenido);

    fclose($archivo);
    fclose($archivo2);


    $status='Pendiente';

    $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
    $nombrecompleto=$_GET['nombrecomp'];

  $sql="INSERT INTO Carpetas VALUES(null,'".$_GET['nombre2']."','".$_GET['nombre']."', '".$_POST["lote"]."', 'PENDIENTE', 'NO')";

     if (mysqli_query($con, $sql)) {
        header("Location: pregunta.php?nombre=$hola&nombre2=$nombre2");
    }else{
        echo"Error: ".$sql."<br>".mysqli_error($con);
    }
   
    mysqli_close($con);
    
    

    
?>