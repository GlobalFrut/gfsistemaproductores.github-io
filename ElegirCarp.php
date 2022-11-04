<?php
  $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  
    $nombre=$_GET['nombrecomp'];
    $pendiente="PENDIENTE";
    $proceso="PROCESO DE REVISION";
       
    $busqueda="SELECT * FROM Carpetas WHERE Usuario='$nombre'AND (Estado='PENDIENTE' OR Estado='PROCESO DE REVISION')";
   
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CARPETA EXISTENTE</title>
        <link rel="stylesheet" href="CSS/exist5.css">
    </head>
    <body>

    <img src="IMG\looooo.PNG" class="img" alt="">   

        <form  class="FormBienvenida">
            <label> <b>MODULO PARA SUBIR DOCUMENTOS A CARPETA EXISTENTE <br> GLOBAL FRUT</b>
            </label>
        </form>
        <?php
            $nombre2=$_GET['nombrecomp'];
        ?>
        <form action="Eligiendo.php?nombrecomp=<?php echo $nombre2; ?>" method="post">
            <input type="text" class="NumCar" placeholder="Ingrese el número de carpeta" name="idcarpeta" >
            <button type="submit" class="Boton22">Subir Documentos</button>
        </form>

   

<ul class="table">
            <table class="default">
                <thead>
                    <tr class="jeje">
                        <th >id_carpeta</th>
                        <th >Usuario</th>
                        <th>Nombre de carpeta</th>
                        <th>Lotes</th>
                        <th>Status</th>
                        <th>Observaciones</th>
                    </tr>
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
                                 <th>
                                    <table class="default">  <?php echo $row["Observaciones"]; ?></table>    
                                </th> 
                            </tr>    
                            <?php
                       
                                 }
                                ?>
            </table>
                                                   
        </ul>

        <button type="submit" class="Button1" onclick="location.href='Status.php?nombrecomp=<?php echo $_GET['nombrecomp']; ?>'">REGRESAR</button>
            <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
    </body>
</html>
  