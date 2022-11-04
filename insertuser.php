<?php
 $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
    if($_POST["Contraseña"]==$_POST["Contraseña2"]){
             $sql="INSERT INTO users VALUES(null,'".$_POST["Nombre"]."','".$_POST["Correo"]."','".$_POST["Telefono"]."', 
    '".$_POST["RFC"]."','".$_POST["area"]."','".$_POST["Contraseña"]."')";
    }
    else{
        echo '<script language="javascript">alert("La contraseña no coincide");window.location.href="registro.php"</script>';
    }
 
    if (mysqli_query($con, $sql)) {
       
        echo '<script language="javascript">alert("Usuario Registrado Correctamente");window.location.href="index.html"</script>';

        
        
    }else{
        echo"Error: ".$sql."<br>".mysqli_error($con);
    }
   
    mysqli_close($con);

?>