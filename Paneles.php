<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIO DE DOCUMENTOS</title>

    <link rel="stylesheet" href="Paneles.css">
    <link rel="stylesheet" href="CSS\pan.css">

</head>
<body>


  

  <form action="" class="form">
    <label class="modulo" for=""> <b> MODULO PARA EL ENVIO DE DOCUMENTOS</b></label>
  </form>


 <div class="paneles">
    <form class="p1" value="archivos" name="otra"     method="POST" id="removeme" action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data"  >
      <label for="" class="lb1">Factura XML</label>
        <img src="IMG/xml.png"  alt="" class="xml2"  >
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
          </div >
          <button class="b11" type="submit">Cargar</button>
			  </div>
    </form>

        <form class="p2" value="archivos" name="otra"   method="post" id="removeme" action="upload2.php?nombre=<?php echo $_GET['nombre'];?>" enctype="multipart/form-data">
        <label for="" class="lb2">Factura PDF</label >
        <img src="IMG/pdf.png" alt="" class="xml">
                <div class="form-group"  >
					<label class="col-sm-2 control-label" >Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary">Cargar</button>
				</div>
        </form>

        <form class="p3" value="archivos" name="otra" id="removeme" method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data">
        <label for="" class="lb3">Constancia de situación <br> fiscal</label> 
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" >
                <label class="col-sm-2 control-label">Archivos</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="archivo[]"name="subir_archivo" multiple="">
                  </div>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </div>

            
        </form>


  
        <form class="p4" value="archivos" name="otra"  id="removeme" method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data"> 
          <label for="" class="lb4">Opinión de cumplimiento <br>SAT</label>
          <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                <input type="file" class="form-control" id="archivo[]"name="subir_archivo"multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  >Cargar</button>
            </div>
        </form>
         
   
        
        <form class="p5" value="archivos" name="otra" id="removeme" method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data">
          <label for="" class="lb5">Carátula de estado de <br> cuenta</label>   
          <img src="IMG/pdf.png" alt="" class="xml">
          <div class="form-group">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                  <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  >Cargar</button>
          </div>
        </form>

          
        <form class="p6" value="archivos" name="otra"  id="removeme" method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data">
        <label for="" class="lb6">Copia INE</label>    
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group">
					<label class="col-sm-2 control-label">Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary" >Cargar</button>
				</div>
        </form>

    
        <form  class="p7"value="archivos" name="otra"   id="removeme"  method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data">
          <label for="" class="lb7">Carta de renta de huerta</label>    
          <img src="IMG/pdf.png" alt="" class="xml" class="xml">
          <div class="form-group" >
            <label class="col-sm-2 control-label">Archivos</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
            </div>
            <button type="submit" class="btn btn-primary"  >Cargar</button>
          </div>
        </form>

          
        <form value="archivos" name="otra"  id="removeme"  method="post"  action="upload2.php?nombre=<?php echo $_GET['nombre'];?>&otra=true" enctype="multipart/form-data" class="p8">
          <label for="" class="lb8">Contrato de compra-venta</label>    
          <img src="IMG/pdf.png" alt="" class="xml" class="xml">
            <div class="form-group">
					<label class="col-sm-2 control-label">Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary" >Cargar</button>
				</div>
        </form>

        </div>

   
  
        <button onclick="location.href='index.html'" session_abort class="Blog1">FINZALIZAR</button>


</body>
<script>
  console.log('holaaaaa');
   console.log(otra);
   const urlParams = new URLSearchParams(queryString);
    const otra = urlParams.get('otra');
    
    if (otra==true) { 
      console.log(otra);
      document.getElementById("removeme").style.display = 'none';
        
    }
    const queryString = window.location.search; 

</script>