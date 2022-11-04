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
        <title>Status de Archivos</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS/archivos5.css">
        
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
            $busqueda="SELECT * FROM Enviados ";
            $busqueda2="SELECT * FROM Carpetas";
            error_reporting(E_ALL ^ E_NOTICE);
        ?>
        <ul class="table">
            <table class="default">
                <thead>
                    <tr class="jeje">
                        <th >Nombre Carpeta</th>
                        <th >Estatus General</th>
                        <th >Tipo de Persona</th>
                        <th>Factura XML</th>
                        <th>Factura_PDF</th>
                        <th>Constancia_Fiscal</th>
                        <th>Opinión de Cumplimiento</th>
                        <th>Caractula de cuenta</th>
                        <th>Copia INE</th>
                        <th>Carta Huerta</th>
                        <th>Contrato C-V</th>
                        <th>Acta Constitutiva</th>
                    </tr>
                <tbody class="contenidobusqueda">
                <?php
                    $resultado=mysqli_query($con, $busqueda);
                    $resultado2=mysqli_query($con, $busqueda2);
                        while (($row=mysqli_fetch_assoc($resultado)) AND ($row2=mysqli_fetch_assoc($resultado2))) {  ?>
                            <tr >
                                <th class="je">
                                    <table class ="default">  <?php echo $row["Nombre_carpeta"]; ?> </table>            
                                </th >

                                <th class="je">
                                    <table class ="default">  <?php echo $row2["Estado"]; ?> </table>            
                                </th >

                                <th>
                                    <table class="default">  <?php echo $row["Tercero"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Factura_XML"];?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Factura_PDF"]; ?></table>    
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Constancia_Fiscal"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Opinion_SAT"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Caratula"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Copia_INE"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Carta_renta"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Cont_comp_vent"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Acta_consti"]; ?></table>
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
