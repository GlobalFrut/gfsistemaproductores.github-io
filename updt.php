<?php

 $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
 
 //$fecha = date('H:i:s');
 //echo $fecha;
 date_default_timezone_set("America/Mexico_City");
 $hora= date('H:i:s');
 $fecha= date('Y-m-j');


 $newDate=strtotime('+0 hour', strtotime($hora));
 $newDate= strtotime('+15 minute',$newDate);
 $newDate = date('H:i:s',$newDate);



                    $obser=$_POST["obs"];
                    $stat=$_POST["Status"];
                    $carpeta=$_GET["carpeta"];
                    echo $obser;
                    echo $carpeta;
                    echo $stat;
                        
                                 
                                    $actua="UPDATE Carpetas SET Estado='$stat', Observaciones='$obser' WHERE id_carpeta='$carpeta'";
                                    mysqli_query($con,$actua);

if (mysqli_query($con, $actua)) {
    echo'<script type="text/javascript">
    alert("Carpeta Actualizada");
    window.location.href="CarpStatus.php";
    </script>';
}else{
    echo"Error: ".$actua."<br>".mysqli_error($con);
}

mysqli_close($con);
 ?>
