<?php 
include '../../config/conectarBD.php'; 
$codigolib= $_POST["codlib"];
$codigoaut= $_POST["codaut"];
 $titulocap = isset($_POST["titulocap"]) ? mb_strtoupper(trim($_POST["titulocap"]), 'UTF-8') : null;
 $numerocap = isset($_POST["numcapitulo"]) ? mb_strtoupper(trim($_POST["numcapitulo"]), 'UTF-8') : null;

  $sql = "INSERT INTO capitulo VALUES (0, '$numerocap', '$titulocap',$codigoaut,$codigolib)"; 
  if ($conn->query($sql) === TRUE) {
     echo "<p>Se ha creado los capitulos correctamemte!!!</p>"; 
    //  echo('<a href="../../public/vista/listar.php">Regresar</a>')
    header("location: ../../public/vista/agregar_capitulo.php");
   }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
  } 

  $conn->close();

?>