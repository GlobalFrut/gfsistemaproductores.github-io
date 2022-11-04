<?php
  $con=mysqli_connect('localhost', 'sistemap_Product','zsHzOBuClJV','sistemap_Product') or die('Error en la conexion servidor');
  $RFC=$_POST["RFC"];
  $pass=$_POST["Pass"];

    


  $consulta="SELECT * FROM users WHERE RFC='$RFC' AND Pass='$pass' ";

  $resultado=mysqli_query($con,$consulta);

  $filas=mysqli_fetch_array($resultado);


  $nombrecompleto=$filas['Nombre_Completo'];
  echo $nombrecompleto;

  error_reporting(0);
if ($filas['Tipo_usuario']=="Productor") {
  
  $nombrecompleto=$filas['Nombre_Completo'];
  error_reporting(0);
  echo'<script type="text/javascript">
    alert("Usted a ingresado como Productor");
    </script>';
    header("Location: Status.php?nombrecomp=$nombrecompleto");
   
}
if($filas['Tipo_usuario']=="Comercializador")
{
  $nombrecompleto=$filas['Nombre_Completo'];
  echo'<script type="text/javascript">
    alert("Usted a ingresado como Usuario Comercializador");

    </script>';
    header("Location: Status.php?nombrecomp=$nombrecompleto");
}

if($filas['Tipo_usuario']=="Contador")
{
  error_reporting(0);
$nombrecompleto=$filas['Nombre_Completo'];
  echo'<script type="text/javascript">
    alert("Usted a ingresado como Usuario Contador");
    </script>';
    header("Location: Status.php?nombrecomp=$nombrecompleto");
}

if($filas['Tipo_usuario']=="Global")
{
  error_reporting(0);

  echo'<script type="text/javascript">
    alert("Usted a ingresado como Usuario de Global");
    window.location.href="menugloba.php";
    </script>';
}

if($filas['Tipo_usuario']!="Productor"&&"Comercializador"&&"Contador"&&"Global")
{
  error_reporting(0);

    echo'<script type="text/javascript">
    alert("El usuario y/o la contraseña son incorrectos");
    window.location.href="index.html";
    </script>';
 
}



mysqli_free_result($resultado);
mysqli_close($conexion);
                            
                                                                                                                                                                                                      

?>