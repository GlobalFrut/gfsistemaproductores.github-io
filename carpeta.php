<?php 

      $DateAndTime = date('m-d-Y h:i:s a', time());  
    $fecha= date('Y-m-j').'-'.date('h:i:s');;
     $nombre =$_POST['carpeta'].'--'.$fecha;
    $nombrecompleto=$_GET['nombrecomp'];
    echo $nombrecompleto;

    
    if(!is_dir($_POST['carpeta'])){ 
        @mkdir('Documentos/'.$nombre, 0700); 
    }else{ 
        echo "Ya existe ese directorio\n"; 
    }  
    header("Location: crearpanel.php?nombre=$nombre&nombre2=$nombrecompleto ");


?>


