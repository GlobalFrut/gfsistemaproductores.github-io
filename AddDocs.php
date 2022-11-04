<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddDocs</title>
    <link rel="stylesheet" href="CSS/product.css">
   
    
</head>
    <body>
     <form action="" method="post" enctype=“multipart/form-data”>
        <?php
        echo "El lote agregado es: ";
            echo $_POST['lote'];
            ?>
            <?php
            $nombre = ($_POST['lote']);
            if(!is_dir($_POST['lote'])){ 
                @mkdir($_POST['lote'], 0700); 
            }else{ 
                echo "Ya existe ese directorio\n"; 
            }  

            
        ?>
   

    </form>
    <div class="main">
<h1>Subir archivo con PHP:</h1>
<?php


$directorio = $nombre;
$subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);
echo "<div>";
if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente.<br><br>";
	   echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
    } else {
       echo "La subida ha fallado";
    }
    echo "</div>";
?>
<br>
<div style="border:1px solid #000000; text-transform:uppercase">  
<h3 align="center"><div align="center"><a href="Contador.php">Volver </a></div></h3></div>

 
</div>
 
    </body>
</html>
