<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="CSS/Paneles2.css">


</head>
<body>


    <form action="" class="form">
        <label class="modulo" for=""> <b> MODULO PARA EL ENVIO DE DOCUMENTOS</b></label>
    </form>
    <script>
    function pausaplay(){
      document.getElementById("removeme").outerHTML="";
    }

    function pausaplay2(){
      document.getElementById("removeme1").outerHTML="";
    }
</script>
 <div class="paneles">
        <form  class="p1" name="form1" method="post" id="removeme" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data"  >
        <label for="" class="lb1">Factura XML</label>
            <img src="IMG/xml.png"  alt="" class="xml2"  >
            <div class="form-group" id="removeme" class="files">
					  <label class="col-sm-2 control-label">Archivos</label>
					  <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
						</div>
					  <button class="b11" type="submit"  onClick="pausaplay()">Cargar</button>
				</div>
        </form>


 
        <form class="p2"   name="form1" method="post" id="removeme" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data">
        <label for="" class="lb2">Factura PDF</label >
        <img src="IMG/pdf.png" alt="" class="xml">
                <div class="form-group"  >
					<label class="col-sm-2 control-label" >Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary"  onClick="pausaplay()">Cargar</button>
				</div>
        </form>

        <form class="p3" name="form1" id="removeme" method="post" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data">
        <label for="" class="lb3">Constancia de situación <br> fiscal</label> 
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" >
                <label class="col-sm-2 control-label">Archivos</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
                  </div>
                <button type="submit" class="btn btn-primary" onClick="pausaplay()">Cargar</button>
            </div>

            
        </form>


  
        <form class="p4" name="form1"  id="removeme" method="post" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data"> 
          <label for="" class="lb4">Opinión de cumplimiento <br>SAT</label>
          <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" id="removeme">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  onClick="pausaplay()" >Cargar</button>
            </div>
        </form>
         
   
        
        <form class="p5" name="form1" id="removeme" method="post" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data">
          <label for="" class="lb5">Carátula de estado de <br> cuenta</label>   
          <img src="IMG/pdf.png" alt="" class="xml">
          <div class="form-group" id="removeme">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                  <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  onClick="pausaplay()">Cargar</button>
          </div>
        </form>

          
        <form class="p6" name="form1" id="removeme" method="post" action="guarda.php?nombre=<?php echo $_GET['nombre']?>" enctype="multipart/form-data">
        <label for="" class="lb6">Copia INE</label>    
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" id="removeme">
					<label class="col-sm-2 control-label">Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary" onClick="pausaplay()">Cargar</button>
				</div>
        </form>

    


        </div>

       <!--      
    <br>
        <button onclick="location.href='pregunta.php'" class="Blog1">REGRESAR</button>
  -->

</body>
</html>
