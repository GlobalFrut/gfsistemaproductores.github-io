<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesando el archivo enviado</title>
<style type="text/css">
*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
.main{ margin:auto; border:1px solid #7C7A7A; width:50%; text-align:left; padding:30px; background:#85c587}
input[type=submit]{ background:#6ca16e; width:100%;
    padding:5px 15px; 
    background:#ccc; 
    cursor:pointer;
	font-size:16px;
   
}
table td{ padding:5px;}
</style>
</head>

<body bgcolor="#bed7c0">
<div class="main">
<h1>Revisando archivo</h1>
<script>
  function pausaplay(){
      document.getElementById("removeme").outerHTML="";
    }
</script>
<?php


$path = 'Documentos/'.$_GET['idcarpeta'].'/Constancia_Situación_Fiscal.pdf';

if (file_exists($path)) {
    $id=$_GET['idcarpeta'];
    ?>  
    <script type="text/javascript">
        <?php
        $nombre2=$_GET['nombre2'];
    ?>
        alert("EL ARCHIVO YA FUE ENVIADO ANTERIORMENTE");
        window.location.href = "actualizar3.php?idcarpeta=<?php echo $id; ?>&nombre2=<?php echo $nombre2;?>";
        </script>
<?php
   }
 else {



$directorio = 'Documentos/'.$_GET['idcarpeta'].'/';
echo $directorio;
$subir_archivo = $directorio.basename($_FILES['name'].'Constancia_Situación_Fiscal.pdf');
echo "<div>";
if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente.<br><br>";
	   echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";

          $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
       $idcarpeta=$_GET['idcarpeta'];
        $sql="UPDATE Enviados SET Constancia_Fiscal='Enviado' WHERE Nombre_carpeta='$idcarpeta'";
       
         mysqli_query($con, $sql);
         
       
            echo"Error: ".$sql."<br>".mysqli_error($con);
    
       
        mysqli_close($con);


    } else {
       echo "La subida ha fallado";
    }
    echo "</div>";
    $nombre= $_GET['idcarpeta'];
    $nombre2=$_GET['nombre2'];
    header("Location: actualizar3.php?idcarpeta=$nombre&nombre2=$nombre2 ");
    
}
?>

</div>
	</body>
</html>