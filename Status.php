<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menú</title>
        <link rel="stylesheet" href="CSS/Status11.css">
    </head>
    <body>

             <?php 
        $nombre2=$_GET['nombrecomp'];
       ?>

        <img src="IMG\looooo.PNG" class="img" alt="">
        <!-- <img src="IMG\Slogan.jpg" class="img2" alt="">-->
        <img src="IMG\status.jpg" class="img3" alt=""  onclick="location.href='ElegirCarp.php?nombrecomp=<?php echo $nombre2; ?>'">
        <img src="IMG\carp2.webp" class="img4" alt="" onclick="location.href='Comercializador.php?nombrecomp=<?php echo $nombre2; ?>'">
        <img src="IMG\salir.jpg" class="imge" alt="" onclick="location.href='index.html'">

        <form  class="FormBienvenida">
            <label> <b>Sistema de Recepción de Documentos <br> GLOBAL FRUT</b>
            </label>
        </form>
       
       <?php 
        $nombre2=$_GET['nombrecomp'];
       ?>
        <button type="submit" class="Boton1" onclick="location.href='ElegirCarp.php?nombrecomp=<?php echo $nombre2; ?>'">SUBIR DOCUMENTOS A CARPETA EXISTENTE</button>
        <button type="submit" class="Boton2" onclick="location.href='Comercializador.php?nombrecomp=<?php echo $nombre2; ?>'">CREAR NUEVA CARPETA</button>
       <button type="submit" class="B2" onclick="location.href='index.html'">SALIR</button>

 <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
    </body>
</html>
  