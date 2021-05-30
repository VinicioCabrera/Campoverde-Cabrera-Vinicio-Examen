<?php
 //incluir conexión a la base de datos
 include "../../config/conectarBD.php";
 $nombre = $_GET['nombre']; 
echo('llego');
 
 $sql = "SELECT * FROM libro,capitulos,autor WHERE autor.aut_nombre='$nombre'  ";

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
 echo " <td colspan='7'><font color=#FFFFFF> No existen libros registrados en el sistema </td>";
 echo "</tr>"; 
 }
 echo "</table>";
 $conn->close(); 
 
?>