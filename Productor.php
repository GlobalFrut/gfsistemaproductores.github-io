<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/productor.css">
</head>

<body>
    <form  class="FormBienvenida">
      <label class="FormBienvenida2">BIENVENIDO PRODUCTOR 
        <br > 
      </label>
    </form>

    <form class="FormIzquierda" action="carpeta.php" method="POST" enctype=“multipart/form-data”>
        <label for="" class="Productor">Productor</label>
        <br>
        <br>
        <a href="#openModal" type="button">Datos fiscales de Global Frut</a>
        <br>
        <br>
        <a href="#openModal2" type="button">
            Claves a utilizar para facturas nueva versión 3.3 SAT:
        </a>
        <br>
        <br>
         <!--<img src="IMG/Aviso.PNG" alt="" class="aviso">-->
        <br>
        <br>
        <input type="text" value="" name="carpeta" class="lotex" placeholder="Ingresar el nombre de a quien se va a facturar">
        <input class="Blog2"   type="submit"  value="Add Name">
   
    </form>
    <form action="index.html">
        <input class="Blog3"   type="submit"  value="Salir"  >
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
           CGF10121043A
        </p>
		<p>
            LIBRAMIENTO ORIENTE #5847 INT. 1 COL. QUIRINDAVARA   C.P. 60190
        </p>
        <p>
             URUAPAN, MICHOACAN.
        </p>
        <p>
              REGIMEN GENERAL DE LEY ISR PERSONAS MORALES
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
             G01 Adquisición de mercancías
        </p>
        <p>
            <b>
                CLAVE DEL PRODUCTO/SERVICIO: 
            </b>
            50401736 Aguacate Haas 
          </p> 
        <p>
            <b>
                CLAVE UNIDAD:
            </b>
            KGM Una unidad de masa igual a mil gramos
        </p>   
		<p>
            <b>
                UNIDAD: 
            </b>
            kilogramos
        </p>
        <p>
            <b>
                DESCRIPCIÓN:
            </b>
             AGUACATE HASS
        </p>
        <p>
            <b>
                FORMA DE PAGO: 
            </b>
            99 Por definir
        </p>  
        <p>
            <b>
                MÉTODO DE PAGO: 
            </b>
            PPD Pago en parcialidades o diferido
        </p>
        <p>
            <b>
                 CONDICIONES DE PAGO: 
            </b>
           Crédito
        </p> 
	</div>
</div>

 
</body>
</html>
