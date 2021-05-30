<?php
 
 include "../../config/conectarBD.php";
 $nombre = $_GET['nombre']; 

 $sql = "SELECT * FROM autor,libro,capitulo WHERE autor.aut_nombre='$nombre'
 and autor.aut_codigo=capitulo.aut_codigo and libro.lib_codigo=capitulo.lib_codigo";;
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th><font color=#FFFF>NOMBRE LIBRO</th>
 <th><font color=#FFFF>ISBN</th> 
 <th><font color=#FFFF>NUMERO DE PAGINAS</th>
 <th><font color=#FFFF>NUMERO DE CAPITULO</th>
 <th><font color=#FFFF>TITULO</th>
 <th><font color=#FFFF>AUTOR</th> 
 <th><font color=#FFFF>NACIONALIDAD</th> 
 
  </tr>";
 if ($result->num_rows > 0) { 
 while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo " <td><font color=#60E741>" . $row["lib_nombre"] . "</td>";
    echo " <td><font color=#60E741>" . $row['lib_ISBN'] ."</td>";
    echo " <td><font color=#60E741>" . $row['lib_num_paginas'] . "</td>";
    echo " <td><font color=#60E741>" . $row['cap_num_capitulo'] . "</td>";
    echo " <td><font color=#60E741>" . $row['cap_titulo'] . "</td>";
    echo " <td><font color=#60E741>" . $row['aut_nombre'] . "</td>"; 
    echo " <td><font color=#60E741>" . $row['aut_nacionalidad'] . "</td>"; 
    echo "</tr>";
    $codlib=($row['lib_codigo']); 
    $codaut=($row['aut_codigo']); 
    
} 
 echo('<a href="../../public/vista/agregar_capitulo.php?codigo='.$codlib.'&cod='.$codaut.'"> AGREGAR CAPITULO </a>');
 } else { 
 echo "<tr>";
 echo " <td colspan='7'><font color=#FFFFFF> No existen libros de $nombre registrados en el sistema </td>";
 echo "</tr>"; 
 }
 echo "</table>";
 $conn->close(); 
 
?>