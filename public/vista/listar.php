<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/listar.css">
    <script type="text/javascript" src="buscar_nombre.js"></script>
    <link rel="icon" type="image/png" href="../Estilos/Imagenes/Icono.png" sizes="16x16">
    <title>LISTAR LIBROS</title>
</head>
<header>
    <h1>LISTAR LIBROS</h1>
</header>
<body>
<div id="aux">
<input type="button" id="btaux" name="btaux" value="INICIO" onclick="location.href='Index.html'"/>
</div> 
<form  onsubmit="return buscarPorNombre()">

    <div id="boton1">  

    <input type="text" id="nombre" name="nombre" placeholder="Ingresar nombre de autor"/>
    <input type="button" id="buscar" name="buscar" value="BUSCAR" onclick="buscarPorNombre()">

    </div>
    <br>
</from>
<div id="informacion"> </div>
<br>
 <table id="tabla1"style="width:100% " >
        <tr>
        <th><font color=#600D0D>Nombre del Libro</th>
        <th><font color=#600D0D>ISBN</th>
        <th><font color=#600D0D>Numero de paginas</th>
        <th><font color=#600D0D>Numero de capitulo</th>
        <th><font color=#600D0D>Titulo del libro</th>
        <th><font color=#600D0D>Autor</th>
        <th><font color=#600D0D>Nacionalidad</th>
        </tr>
 <?php
 include '../../config/conectarBD.php'; 
 $consulta="SELECT * FROM libro as l INNER JOIN capitulo as c on l.lib_codigo=c.lib_codigo INNER JOIN autor as a on a.aut_codigo=c.aut_codigo";
 
 $result = $conn->query($consulta);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td><font color=#FFFF>" . $row["lib_nombre"] . "</td>";
 echo " <td><font color=#FFFF>" . $row['lib_ISBN'] ."</td>";
 echo " <td><font color=#FFFF>" . $row['lib_num_paginas'] . "</td>";
 echo " <td><font color=#FFFF>" . $row['cap_num_capitulo'] . "</td>";
 echo " <td><font color=#FFFF>" . $row['cap_titulo'] . "</td>";
 echo " <td><font color=#FFFF>" . $row['aut_nombre'] . "</td>"; 
 echo " <td><font color=#FFFF>" . $row['aut_nacionalidad'] . "</td>"; 
 echo "</tr>";
 }
 
 } else {
 echo "<tr>";
 echo " <td colspan='7'>No existen el libro registrado en el sistema</td>";
 echo "</tr>";
 }
 
 $conn->close(); 
 ?>
</table> 
</body>
</html>