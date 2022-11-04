<?php
    $rfc11=$_POST['RFC1'];
  
    $con=mysqli_connect('localhost', 'root','','productores_global') or die('Error en la conexion servidor');
    $busqueda="SELECT * FROM users WHERE RFC='$rfc11'";
    $resultado=mysqli_query($con, $busqueda); ?>

    <table class="default">
    <thead>
        <tr class="je">
            <th >id_user</th>
            <th >Correo</th>
            <th>Teléfono</th>
            <th>RFC</th>
            <th>Tipo_usuario</th>
            <th>Pass</th>
            <br>
        </tr>
       
<link rel="stylesheet" href="CSS/tablestule.css">
<br>
<?php
    while ($row=mysqli_fetch_assoc($resultado)) {  ?>
    <br><br>
         <tr  class="msj" >
             
                    <th >
                        <br>
                        <table class ="default">  <?php echo $row["id_user"]; ?> </table> 
                        <br>      
                    </th >
                    <th>
                        <table class="default">  <?php echo $row["Correo"]; ?></table>
                    </th>
                    <th>
                        <table class="default">  <?php echo $row["Telefono"]; ?></table>
                    </th>
                    <th>
                        <table class="default">  <?php echo $row["RFC"]; ?></table>
                    </th>
                    <th>
                        <table class="default">  <?php echo $row["Tipo_usuario"]; ?></table>
                    </th>
                    <th>
                        <table class="default">  <?php echo $row["Pass"]; ?></table>
                    </th>
                  
        </tr>
        
     
     
        <label class="msj2">
        <?php
        
           echo "La contraseña vinculada al RFC: ".$row["RFC"]."  es  ".$row["Pass"];
        }
?> 
</label>
<form action="index.html" >
    <input class="Blog2" type="submit" value="Volver al incio">
</form>