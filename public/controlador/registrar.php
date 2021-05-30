<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<?php 

include '../../config/conectarBD.php'; 

$codigoaut=$_POST["autorAJAX"];
echo($codigoaut);
$nombrelib = isset($_POST["nombrelib"]) ? mb_strtoupper(trim($_POST["nombrelib"]), 'UTF-8') : null;
$ISBN = isset($_POST["ISBN"]) ? trim($_POST["ISBN"]) : null;
$numpagina = isset($_POST["numpagina"]) ? trim($_POST["numpagina"]) : null;
$numcapitulo = isset($_POST["numcapitulo"]) ? trim($_POST["numcapitulo"]) : null;
$titulocap = isset($_POST["titulocap"]) ? mb_strtoupper(trim($_POST["titulocap"]), 'UTF-8') : null;


 $sql = "INSERT INTO libro VALUES (0,'$nombrelib', '$ISBN', '$numpagina','$codigoaut')"; 

 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha registrado el libro correctamemte!!!</p>"; 

 $consulta="SELECT * FROM libro ";
 $res=$conn->query($consulta);
 if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        $codigo = ($row["lib_codigo"]);
    }
 }

 $sql = "INSERT INTO capitulo VALUES (0, '$numcapitulo', '$titulocap','$codigo')"; 
 if ($conn->query($sql) === TRUE) {
    echo "<p>Se ha registrado los capitulos correctamemte!!!</p>"; 
  
    } else if($conn->error == 1062){
    echo "<p class='error'>El capitulo NO se registro en el sistema </p>"; 
    }else{
    echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
   } 

   header("location: ../vista/Index.html");

 } else if($conn->error == 1062){
 echo "<p class='error'>El libro $nombrelib ya esta registrada en el sistema </p>"; 
 }else{
 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
} 

$conn->close();

?>
</body>
</html>


