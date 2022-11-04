<?php
$con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  $id=$_GET["idcarpeta"];
 
  
  error_reporting(0);
  $busqueda="SELECT * FROM carpetas WHERE Nombre_carpeta='$id' ";
 
  $resultado=mysqli_query($con, $busqueda); 

  if ($row=mysqli_fetch_assoc($resultado)) {
    
    $directorio=$row['Nombre_carpeta'];
    ?>
    <label for="" class="elementos"> <?php echo "Elementos Enviados En La Carpeta: ".$directorio; ?> </label>
    <?php
    $ruta=$row['Nombre_carpeta'];

 
  }



  obtener_estructura_directorios("Documentos/"."$ruta");
  function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";
  
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;
  
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                    echo "<li>" . $archivo . "</li>";
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
  }

  <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $date=$_GET['fecha']; 
            $busqueda="SELECT * FROM status WHERE Nombre_carpeta='$ruta' ";
    
            error_reporting(E_ALL ^ E_NOTICE);
        ?>
        <ul class="table">
            <table class="default">
                <thead>
                    <tr class="jeje">
                        <th >Factura XML</th>
                        <th >Factura PDF</th>
                        <th>Constancia De Situación Fiscal</th>
                        <th>Opinion de Cumplimiento SAT Actual</th>
                        <th>Caractula de Estado de Cuenta</th>
                        <th>Copia INE</th>
                        <th>Carta de Renta de Huerta</th>
                        <th>Contrato de Compra-Venta</th>
                        
                     
                    </tr>
                  

                <tbody class="contenidobusqueda">
                <?php
                    $resultado=mysqli_query($con, $busqueda);
                        while ($row=mysqli_fetch_assoc($resultado)) {  ?>
                            <tr >
                                <th class="je">
                                    <table class ="default">  <?php echo $row["Factura_XML"]; ?> </table>            
                                </th >
                                <th>
                                    <table class="default">  <?php echo $row["Factura_PDF"]; ?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Constancia_Fiscal"];?></table>
                                </th>
                                <th>
                                    <table class="default">  <?php echo $row["Opnion_SAT"]; ?></table>    
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
                                <?php
                       
                                 }
                                ?> 
                               
                            </tr>    
                            </tbody>
            </table>
<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="CSS/Paneles.css">


</head>
<body>

<!--<label for="" class="enviado"><b>ENVIADO</label>-->
 

 <div class="paneles"  onClick="pausaplay()">
    <form class="p1" value="archivos" name="otra"     method="POST" id="removeme" action="upload2.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>" enctype="multipart/form-data"  >
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

        <form class="p2"   value="archivos" name="otra"     method="POST" id="removeme" action="upload3.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>"enctype="multipart/form-data">
        <label for="" class="lb2">Factura PDF</label >
        <img src="IMG/pdf.png" alt="" class="xml">
                <div class="form-group"  >
					<label class="col-sm-2 control-label" >Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					    <button type="submit">Cargar</button>
				</div>
        </form>

        <form class="p3" value="archivos" name="otra"     method="POST" id="removeme"  action="upload4.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>" enctype="multipart/form-data">
        <label for="" class="lb3">Constancia de situación <br> fiscal</label> 
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" >
                <label class="col-sm-2 control-label">Archivos</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="archivo[]"  name="subir_archivo" multiple="">
                  </div>
                <button type="submit" class="btn btn-primary" >Cargar</button>
            </div>

            
        </form>


  
        <form class="p4" value="archivos" name="otra"     method="POST" id="removeme"  action="upload5.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>" enctype="multipart/form-data"> 
          <label for="" class="lb4">Opinión de Cumplimiento <br>Reciente SAT</label>
          <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  >Cargar</button>
            </div>
        </form>
         
   
        
        <form class="p5" value="archivos" name="otra"     method="POST" id="removeme" action="upload6.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>" enctype="multipart/form-data">
          <label for="" class="lb5">Carátula de estado de <br> cuenta</label>   
          <img src="IMG/pdf.png" alt="" class="xml">
          <div class="form-group">
              <label class="col-sm-2 control-label">Archivos</label>
              <div class="col-sm-8">
                  <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
              </div>
              <button type="submit" class="btn btn-primary">Cargar</button>
          </div>
        </form>

          
        <form class="p6" value="archivos" name="otra"     method="POST" id="removeme" action="upload7.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>"enctype="multipart/form-data">
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

    
        <form  class="p7"value="archivos" name="otra"     method="POST" id="removeme" action="upload8.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>"enctype="multipart/form-data">
          <label for="" class="lb7">Carta de renta de huerta</label>    
          <img src="IMG/pdf.png" alt="" class="xml" class="xml">
          <div class="form-group" >
            <label class="col-sm-2 control-label">Archivos</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
            </div>
            <button type="submit" class="btn btn-primary" >Cargar</button>
          </div>
        </form>

          
        <form name="form1" value="archivos" name="otra"     method="POST" id="removeme" action="upload9.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>"  enctype="multipart/form-data" class="p8">
          <label for="" class="lb8">Contrato de compra-venta</label>    
          <img src="IMG/pdf.png" alt="" class="xml" class="xml">
            <div class="form-group">
					<label class="col-sm-2 control-label">Archivos</label>
					    <div class="col-sm-8">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo"multiple="">
						</div>
					    <button type="submit" class="btn btn-primary"  >Cargar</button>
				</div>
        </form>

        </div>

   
  
        <button onclick="location.href='index.html'" session_abort class="Blog1">FINZALIZAR</button>


</body>
<script>
    function pausaplay(){
      
       
            document.getElementById("removeme").div.style.backgroundColor="green";


    }
</script>


</html>
