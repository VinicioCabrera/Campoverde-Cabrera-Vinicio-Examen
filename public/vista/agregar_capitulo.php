<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/Ventanas.css">
    <script type="text/javascript" src="buscar_nombre.js"></script>
    <link rel="icon" type="image/png" href="../Estilos/Imagenes/Icono.png" sizes="16x16">
    <title>AGREGAR CAPITULO</title>
</head>
<header>
    <h1>AGREGAR CAPITULO</h1>
</header>
<body>

<form id="capitulos" method="POST" action="../../admin/controladores/agregar_capitulo.php" >

<input type="hidden" id="codaut" name="codaut" value="<?php echo $_GET["cod"]?>">
<input type="hidden" id="codlib" name="codlib" value="<?php echo $_GET["codigo"]?>">

<label for="numcapitulo">NUMERO DE CAPITULO</label><br>
<input type="text" id="numcapitulo" name="numcapitulo" value="" placeholder="Ingresar numero de pagina..."/>
<br>
<label for="titulocap">TITULO DEL CAPITULO</label><br>
<input type="text" id="titulocap" name="titulocap" value="" placeholder="Ingresar numero de pagina..."/>
<br>
    
<div id="boton">
<input type="submit" id="crear" name="crear" value="AGREGAR" />
<input type="reset" id="cancelar" name="cancelar" value="CANCELAR"  />
</div>

</form> 
</body>
</html>