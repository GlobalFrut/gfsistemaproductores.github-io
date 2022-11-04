<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/registro.css"> 
</head>
<body>
    <form action="" class="cabeza">
        <img class="imagen" src="IMG/logo.jpg" alt="">
    </form>

    <h1 class="letras"><b>Crea tu cuenta</b></h1>
    <h1 class="letras2">Bienvenido al registro del portal para 
        la recepción de <br> documentos de productores.</h1>
  
    <form class="panel" action="insertuser.php" method="post">
    <p class="user1"><b><img class="correo" src="IMG/correo.PNG"> </b> <input  class="insert22" type="text" placeholder="Nombre Completo" name="Nombre"  required></p>
        <p class="user1"><b><img class="correo" src="IMG/correo.PNG"> </b> <input  class="insert" type="mail" placeholder="Correo eléctronico" name="Correo"  required></p>
        <p class="user1"><b><img class="telefono" src="IMG/cel.PNG"></b> <input  class="insert" type="number_format" placeholder="Télefono" name="Telefono" required ></p>
        <p class="user1"><b><img class="telefono" src="IMG/usuario.PNG" class="hola"></b> <input  class="insert" type="text" placeholder="RFC" name="RFC" required></p>
        <p><b><img src="IMG/usuarios.PNG" class="usuarios" alt="" ></b>
        <select  name="area"  class="insert2" required> 
            <option><b>TIPO DE USUARIO</b> </option>
            <option value="Productor">PRODUCTOR</option>
            <option value="Comercializador">COMERCIALIZADOR</option>
            <option value="Contador">CONTADOR</option>
        </select>
        </p>

        <p class="user1"><b><img src="IMG/pass.PNG" class="telefono"></b> <input  class="insert" type="password" placeholder="Contraseña" name="Contraseña" required></p>
        <p class="user1"><b><img src="IMG/pass.PNG" class="telefono"></b> <input  class="insert" type="password" placeholder="Confirmar contraseña" name="Contraseña2" required></p>  

        <input class="Blog" type="submit" value="Registrarse">

   </form> 
    <form action="index.html">
        <input class="Blog2" type="submit" value="Salir">
    </form>
    <script src="//code.tidio.co/2lyp22gj2zchbpol5wdnwbkink7y1luq.js" async></script>
</body>
</html>