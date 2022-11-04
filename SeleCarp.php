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



?>
  <!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="CSS/update2.css">
        <meta charset="UTF-8">
        <title>Carpeta</title>

    <?php
                    error_reporting(E_ALL ^ E_NOTICE);          
            $valor = $_GET["idcarpeta"];
       
            $busqueda="SELECT * FROM Carpetas WHERE id_carpeta='$valor'";
            $resultado=mysqli_query($con, $busqueda);
           
            $row=mysqli_fetch_assoc($resultado);

    ?>

</form>
    </head>
    <body>
    <form action="" class="form1">

        <label for=""> <b> LA CARPETA ELEGIDA ES: <?php echo $row['Nombre_carpeta']; ?> </b> </label>
    </form> 
    <form action="updt.php?carpeta=<?php echo $valor; ?>" method="POST">
  
    <select name="Status" class="option" required>
                    <option value="Elegir">ELEGIR STATUS:</option>
                    <option value="PENDIENTE"><b>PENDIENTE</b> </option>
                     <option value="PROCESO DE REVISION"><b>PROCESO DE REVISION</b> </option>
                    <option value="COMPLETADA"><b>COMPLETADA</b> </option>
                </select>

    <input class="obsers" name="obs" type="text" placeholder="Ingrese las observaciones">
    <input type="submit"  class="Button1" value="ACTUALIZAR">

                
    
    </form>              
        
    </body>
    
</html>
