
<?php
  $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  $id=$_GET["idcarpeta"];
 
  error_reporting(0);
  $busqueda="SELECT * FROM Carpetas WHERE Nombre_carpeta='$id' ";
 
  $resultado=mysqli_query($con, $busqueda); 

  if ($row=mysqli_fetch_assoc($resultado)) {
    
    $directorio=$row['Nombre_carpeta'];
    ?>
    <label for="" class="elementos"> <?php echo "Elementos Enviados En La Carpeta: ".$directorio; ?> </label>
    <?php
    $ruta=$row['Nombre_carpeta'];
  }


  $busqueda2="SELECT * FROM Enviados WHERE Nombre_carpeta='$id'";
  $resultado2=mysqli_query($con, $busqueda2);
  if ($row2=mysqli_fetch_assoc($resultado2)) {
    
    $directorio2=$row2['id_status'];
    ?>
    
    <?php
    $ruta3=$row2['id_status'];
     
 
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
  
?>

<?php
            error_reporting(E_ALL ^ E_NOTICE);
            $date=$_GET['fecha']; 
            $busqueda="SELECT * FROM Enviados WHERE id_status='$ruta3' ";
    
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
                        <th>Carta Huerta</th>
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
    <title>Subir Archivos</title>

  <link rel="stylesheet" href="CSS/dont8.css">

</head>
<body>


 
<?php
  $nombre2=$_GET['nombre2'];
?>
<div class="paneles">
        <form  class="p1" name="form1" method="post" id="removeme" action="upload10.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data"  >
        <label for="" class="lb1">Factura XML</label>
            <img src="IMG/xml.png"  alt="" class="xml2"  >
            <div class="form-group" id="removeme" class="files">
					  <label class="selec">Archivos</label>
					  <div class="selec">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					  <button class="b11" type="submit"  >Cargar</button>
				</div>
        </form>

        <form class="p2"   name="form1" method="post" id="removeme" action="upload11.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data">
        <label for="" class="lb2">Factura PDF</label >
        <img src="IMG/pdf.png" alt="" class="xml">
                <div class="form-group"  >
					<label class="selec" >Archivos</label>
					    <div class="selec">
							<input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary" >Cargar</button>
				</div>
        </form>

        <form class="p3" name="form1" id="removeme" method="post"action="upload12.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data">
        <label for="" class="lb3">Constancia de situación <br> fiscal</label> 
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" >
                <label class="selec">Archivos</label>
                  <div class="selec">
                    <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
                  </div>
                <button type="submit" class="btn btn-primary" >Cargar</button>
            </div>

            
        </form>


  
        <form class="p4" name="form1"  id="removeme" method="post" action="upload13.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data"> 
          <label for="" class="lb4">Opinión de cumplimiento <br>SAT</label>
          <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" id="removeme">
              <label class="selec">Archivos</label>
              <div class="selec">
                <input type="file" class="form-control" id="archivo[]" name="subir_archivo" multiple="">
              </div>
              <button type="submit" class="btn btn-primary"  >Cargar</button>
            </div>
        </form>
         
   
        
        <form class="p5" name="form1" id="removeme" method="post" action="upload14.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data">
          <label for="" class="lb5">Carátula de estado de <br> cuenta</label>   
          <img src="IMG/pdf.png" alt="" class="xml">
          <div class="form-group" id="removeme">
              <label class="selec">Archivos</label>
              <div class="selec">
                  <input type="file" class="form-control" id="archivo[]"name="subir_archivo" multiple="">
              </div>
              <button type="submit" class="btn btn-primary" >Cargar</button>
          </div>
        </form>

          
        <form class="p6" name="form1" id="removeme" method="post"action="upload15.php?idcarpeta=<?php echo $_GET['nombre']; ?>&idcarpeta=<?php echo $_GET["idcarpeta"];?>&nombre2=<?php echo $nombre2; ?>" enctype="multipart/form-data">
        <label for="" class="lb6">Copia INE</label>    
        <img src="IMG/pdf.png" alt="" class="xml">
            <div class="form-group" id="removeme">
					<label class="selec">Archivos</label>
					    <div class="selec">
							<input type="file" class="form-control" id="archivo[]"name="subir_archivo" multiple="">
						</div>
					    <button type="submit" class="btn btn-primary" >Cargar</button>
				</div>
        </form>

    
</div>

     <?php
  $nombre2=$_GET['nombre2'];
?>
  
        <button onclick="location.href='finalizar3.php?idcarpeta=<?php echo $_GET['idcarpeta']; ?>&nombre2=<?php echo $nombre2; ?>'" class="Blog1">FINALIZAR</button>
        <button onclick="location.href='index.html'" session_abort class="regreso">REGRESO MÁS TARDE</button>

</body>
<script>
    function pausaplay(){
    
        document.getElementById("removeme").div.style.backgroundColor="green";


    }
</script>

    <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
</html>
