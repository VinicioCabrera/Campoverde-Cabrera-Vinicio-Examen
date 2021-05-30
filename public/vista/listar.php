<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/Ventanas.css">
    <link rel="icon" type="image/png" href="../Estilos/Imagenes/Icono.png" sizes="16x16">
    <title>LISTAR LIBROS</title>
</head>
<header>
    <h1>LISTAR LIBROS</h1>
</header>
<body>

<div id="boton1">  
<input type="text" id="nombre" name="nombre" >
<input type="button" id="buscar" name="buscar" value="BUSCAR" onclick="buscarPorNombre()"/>
</div>
<div id="informacion"> </div>

<table id="tabla1"style="width:100% " >
        <tr>
        <th><font color=#AFFF>Nombre del Libro</th>
        <th><font color=#AFFF>ISBN</th>
        <th><font color=#AFFF>Numero de paginas</th>
        <th><font color=#AFFF>Numero de capitulo</th>
        <th><font color=#AFFF>Titulo del libro</th>
        <th><font color=#AFFF>Autor</th>
        <th><font color=#AFFF>Nacionalidad</th>
        </tr>
 <?php
 include '../../config/conectarBD.php'; 
 $consulta="SELECT * FROM libro,capitulo,autor 
 where libro.lib_codigo=capitulo.lib_codigo  ";
 
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