<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/Ventanas.css"> 
    <link rel="icon" type="image/png" href="../Estilos/Imagenes/Icono.png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>REGISTRAR LIBROS</title>
</head>
<header >
  <h1>REGISTRAR LIBROS</h1>
</header>

<body onload="tiempoReal()">

<form id="frmajax" method="POST" action="../controlador/registrar.php" >

 <label for="nombrelib">NOMBRE DEL LIBRO </label><br>
 <input type="text" id="nombrelib" name="nombrelib" value="" placeholder="Ingresar nombre del libro"  />
 <br>
 <label for="ISBN">ISBN </label><br>
 <input type="text" id="ISBN" name="ISBN" value="" placeholder="Ingresar ISBN ..."/>
 <br>
 <label for="numpagina">NUMERO DE PAGINAS</label><br>
 <input type="text" id="numpagina" name="numpagina" value="" placeholder="Ingresar numero de pagina..."/>
 <br>
 <label for="numcapitulo">NUMERO DE CAPITULOS</label><br>
 <input type="text" id="numcapitulo" name="numcapitulo" value="" placeholder="Ingresar numero de pagina..."/>
 <br>
 <label for="titulocap">TITULO DEL CAPITULO</label><br>
 <input type="text" id="titulocap" name="titulocap" value="" placeholder="Ingresar numero de pagina..."/>
 <br>

      <label for="autor">AUTOR</label><br>
      <select id="autorajax" name="autorAJAX"></select>    
     
 <div id="boton">
 <input type="submit" id="crear" name="crear" value="REGISTRAR" />
 <input type="reset" id="cancelar" name="cancelar" value="CANCELAR"  />
</div>

</form> 

<script>
	function tiempoReal(){

      $.ajax({
        url: 'ajax-autores.php',
        type: 'POST',
        success:function(response){
         $('#autorajax').html(response);
         console.log(response);
        }
      });
    }
</script> 
<div id="aux1">
<input type="button" id="btaux1" name="btaux1" value="INICIO" onclick="location.href='Index.html'"/>
</div> 
</body>
</html>