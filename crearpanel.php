<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lote</title>
    <link rel="stylesheet" href="CSS/produ12.css">
</head>
<body>
    <form  class="FormBienvenida">
      <label class="FormBienvenida2">BIENVENIDO  
          <br > 
      </label>
      <label class="bien2">
        
      </label>
    </form>
 
    <form class="FormIzquierda" action="lote.php?nombre=<?php echo $_GET['nombre'];?>&nombre2=<?php echo $_GET['nombre2']; ?>" method="POST" enctype=“multipart/form-data”>
        
        <?php 
            $nombre=$_GET['nombre'];
           $nombrecompleto=$_GET['nombre2'];
        ?>
        <label for="" class="Productor"></label>
        <br>
        <br>
        <a href="#openModal" type="button" class="AV1">Datos fiscales de Global Frut</a>
        <br>
        <br>
        <a href="#openModal2" type="button" class="AV2">
            Claves a utilizar para facturas nueva versión 3.3 SAT:
        </a>
        <br>
        <br>
        <!-- <img src="IMG/Aviso.PNG" alt="" class="aviso"> -->
        <br>
        <br>
        <input type="text" value="" name="lote" class="lotex2" placeholder="Ingresa el/los lotes">
        <input class="Blog2"   type="submit"  value="Agregar Lote" >
        <label for="" class="escribir2"><b>Nota: si son más de un lote, escribirlos separados por comas.</b></label>
    </form>
    <div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="datos">
            <b>
                DATOS FISCALES
            </b>    
        </h2>
        <p>
            COMERCIALIZADORA GLOBAL FRUT S DE RL DE CV
        </p>
        <p>
            <b>
                 RFC: 
            </b>
           CGF10121043A.
        </p>
		<p>
            LIBRAMIENTO ORIENTE #5847 INT. 1 COL. QUIRINDAVARA   C.P. 60190.
        </p>
        <p>
             URUAPAN, MICHOACAN.
        </p>
        <p>
              REGIMEN GENERAL DE LEY ISR PERSONAS MORALES.
        </p>   
	</div>
</div>

<div id="openModal2" class="modalDialog2">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="datos">
            <b>
            CLAVES A UTILIZAR PARA FACTURAS NUEVA VERSION 3.3 SAT:
            </b>    
        </h2>
        <p>
            <b>
                USO CFDI:
            </b>
             G01 Adquisición de mercancías.
        </p>
        <p>
            <b>
                CLAVE DEL PRODUCTO/SERVICIO: 
            </b>
            50401736 Aguacate Haas.
          </p> 
        <p>
            <b>
                CLAVE UNIDAD:
            </b>
            KGM Una unidad de masa igual a mil gramos.
        </p>   
		<p>
            <b>
                UNIDAD: 
            </b>
            Kilogramos.
        </p>
        <p>
            <b>
                DESCRIPCIÓN:
            </b>
             AGUACATE HASS.
        </p>
        <p>
            <b>
                FORMA DE PAGO: 
            </b>
            99 Por definir.
        </p>  
        <p>
            <b>
                MÉTODO DE PAGO: 
            </b>
            PPD Pago en parcialidades o diferido.
        </p>
        <p>
            <b>
                 CONDICIONES DE PAGO: 
            </b>
           Crédito.
        </p> 
	</div>
</div>    
    <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
</body>
</html>
 