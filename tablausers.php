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
  
    
</form>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="CSS/Status5.css">

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
    </head>
    <body>
        <ul class="menu">
            <li><a href="menugloba.php"><b>Regresar</b></a></li>
        </ul>

        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $date=$_GET['fecha']; 
            $busqueda="SELECT * FROM users ";
    
            error_reporting(E_ALL ^ E_NOTICE);
        ?>
        <ul class="table">
            <table class="default">
                <thead>
                    <tr class="jeje">
                        <th >id usuario</th>
                        <th >Nombre completo</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>RFC</th>
                        <th>Tipo de usuario</th>
                     
                    </tr>
                <tbody class="contenidobusqueda">
                <?php
                    $resultado=mysqli_query($con, $busqueda);
                        while ($row=mysqli_fetch_assoc($resultado)) {  ?>
                            <tr >
                                <th class="je">
                                    <table class ="default">  <?php echo $row["id_user"]; ?> </table>            
                                </th >
                                <th>
                                    <table class="default">  <?php echo $row["Nombre_Completo"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Correo"];?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Telefono"]; ?></table>    
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["RFC"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Tipo_usuario"]; ?></table>
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
