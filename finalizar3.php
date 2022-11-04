<?php
    $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
    error_reporting(0);
    $id=$_GET['idcarpeta'];
    $busqueda="SELECT * FROM Enviados WHERE Nombre_carpeta='$id' ";
 
    $resultado=mysqli_query($con, $busqueda); 

    if ($row=mysqli_fetch_assoc($resultado)) {
    
        $facturaXML = $row['Factura_XML'];
        $facturaPDF = $row['Factura_PDF'];
        $Constancia_fiscal= $row['Constancia_Fiscal'];

        $Opinion_SAT = $row['Opinion_SAT'];
        $Caratula = $row['Caratula'];
        $Copia_INE = $row['Copia_INE'];
        $Cont_renta = $row['Carta_renta'];
        $Cont_com_venta = $row['Cont_comp_vent'];
         $Acta_consti=$row['Acta_consti'];
}
?>
<?php
$enviado="Enviado";
$pendiente="Pendiente";    
$na="N/A";
$idcarp=$_GET['idcarpeta'];

   if($Constancia_fiscal=="$enviado" && $facturaXML=="$enviado" && $facturaPDF=="$enviado" && $Opinion_SAT="$enviado" && $Caratula=="$enviado" && $Copia_INE=="$enviado" &&
        $Cont_renta=="$na" && $Cont_com_venta=="$na" && $Acta_consti=="$na"){
 
            ?>  
            
            <?php 
            $nombre2=$_GET['nombre2']; ?>
            <script type="text/javascript">
                alert("ARCHIVOS ENVIADOS COMPLETOS ¡GRACIAS!");
                window.location.href = "Status.php?nombrecomp=<?php echo $nombre2; ?>";
                </script>
        <?php
        $rev="PROCESO DE REVISION";
      $sql="UPDATE Carpetas SET Estado='$rev' WHERE Nombre_carpeta='$idcarp'";
       
          mysqli_query($con, $sql);
   }

   else{
    $id=$_GET['idcarpeta'];
    ?>  
    <script type="text/javascript">
    <?php
    $nombre2=$_GET['nombre2'];
    ?>
        alert("FALTAN ARCHIVOS POR ENVIAR");
        window.location.href = "actualizar3.php?idcarpeta=<?php echo $id; ?>&nombre2=<?php echo $nombre2; ?>";
        </script>
<?php
   }


?>
