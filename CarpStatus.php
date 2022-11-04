<?php
  
    //$con2=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
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
  
    
</form>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Status de Carpetas</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="CSS/users3.css">

<script>$(document).ready(function () {
        $('#entradafilter').keyup(function () {
           var rex = new RegExp($(this).val(), 'i');
             $('.contenidobusqueda tr').hide();
             $('.contenidobusqueda tr').filter(function () {
                 return rex.test($(this).text());
             }).show();
     
             })
     
     });
</script>

<div class="input-group"> <span class="filtrado2">Filtrado</span>
    <input class="filtro" id="entradafilter" type="text">
</div>

<form action="SeleCarp.php" method="GET">
    <input class="idcar" type="text" placeholder="Ingrese el id de la carpeta"name="idcarpeta">
    <input class="Boton2"   type="submit"  value="Actualizar">

    <?php /*
                                
                                if (isset($_GET["idcarpeta"])) {
                                    $valor = $_GET["idcarpeta"];
                                    $actua="UPDATE Carpetas SET Status='Completada' WHERE id_carpeta='$valor'";
                                    mysqli_query($con,$actua);
                            } */?>

</form>
    </head>
    <body>
        <ul class="menu">
            <li><a href="menugloba.php"><b>Regresar</b></a></li>
        </ul>

        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $date=$_GET['fecha']; 
            $busqueda="SELECT * FROM Carpetas WHERE Estado='Completada' OR Estado='PROCESO DE REVISION'";
    
            error_reporting(E_ALL ^ E_NOTICE);
        ?>
        <ul class="table">
            <table class="default">
                <thead>
                    <tr class="jeje">
                        <th >id Carpeta</th>
                        <th >Usuario</th>
                        <th>Nombre de Carpeta</th>
                        <th>Lotes</th>
                        <th>Status</th>
                     
                     
                    </tr>
                <tbody class="contenidobusqueda">
                <?php
                    $resultado=mysqli_query($con, $busqueda);
                        while ($row=mysqli_fetch_assoc($resultado)) {  ?>
                            <tr >
                                <th class="je">
                                    <table class ="default">  <?php echo $row["id_carpeta"]; ?> </table>            
                                </th >
                                <th>
                                    <table class="default">  <?php echo $row["Usuario"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Nombre_carpeta"];?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Lotes"]; ?></table>    
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Estado"]; ?></table>
                                </th>
                            
                                <?php
                       
                                 }
                                ?> 
                               
                            </tr>    
                            </tbody>
            </table>
                                  
                            
        </ul>
                                                        
        
    </body>
    
</html>
