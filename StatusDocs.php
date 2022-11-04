<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/pregunta.css">
   
</head>
<body>
  
    <form action="Paneles.php?nombre=<?php echo $_GET['nombre']?>" method="POST" class="formpre">
        <label for="" class="lb1"> ¿LA PERSONA A QUIEN SE VA A FACTURAR ES UN TERCERO?</label>
        <button type="submit" class="Boton1" >SI</button>
    </form>
 
    <button type="submit" class="Boton2" onclick="location.href='Paneles2.php'">NO</button>


</body>
</html>
