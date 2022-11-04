<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta</title>
    <link rel="stylesheet" href="CSS/pregunta2.css">
    <link rel="stylesheet" href="CSS/productor5.css">
   
</head>
<body>
        <?php
        $nombre2=$_GET['nombre2']; 
    ?>
    <form action="SI.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>" method="POST" class="formpre">
        <label for="" class="lb1">TIPO DE PERSONA A FACTURAR</label>

        <button type="submit" class="Boton1" >PERSONA FISICA</button>


        <a href="#openModal" type="button" class="AV3">PRODUCTOR</a>
        <a href="#openModal2" type="button" class="AV4">PERSONA FISICA</a>
        <a href="#openModal3" type="button" class="AV5">PERSONAMORAL</a>
        <p><b><img  class="moral" src="IMG/moral.png" alt=""  onclick="location.href='mora.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>'"></b>
     
    </form>
    <p><b><img  class="fisica" src="IMG/fisica.png" alt="" onclick="location.href='SI.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>'"></b>
    <p><b><img  class="productor" src="IMG/productor4.png" alt=""  onclick="location.href='NO.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>'"></b>
    <button type="submit" class="Boton2"  onclick="location.href='NO.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>'">PRODUCTOR</button>
    <button type="submit" class="Boton3"  onclick="location.href='mora.php?idcarpeta=<?php echo $_GET['nombre']?>&nombre2=<?php echo $nombre2;?>'">PERSONA MORAL</button>
    


<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="datos">
            <b>
                Persona registrada ante la junta local de sanidad vegetal de la huerta que se quiere cobrar.
            </b>    
        </h2>
	</div>
</div>
<div id="openModal2" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="datos">
            <b>
               Cualquier persona que no sea el productor. Considerado como una tercera persona.
            </b>    
        </h2>
        
	</div>
</div>

<div id="openModal3" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="datos">
            <b>
               Comercializadora, huerta, empresa u organización.
            </b>    
        </h2>
        
	</div>
</div>


    <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
</html>
