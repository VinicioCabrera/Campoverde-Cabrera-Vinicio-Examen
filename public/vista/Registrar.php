<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Estilos/Ventanas.css">
    <link rel="icon" type="image/png" href="../Estilos/Imagenes/Icono.png" sizes="16x16">
    <script type="text/javascript">
        function tiempoReal(){
            var aut=$.ajax({
                url:'../controlador/registrar.php',
                dataType:'text',
                async:false

            }).responseText;
            document.getElementById("autor").innerHTML=aut;
        }
        setInterval(tiempoReal,1000); 

    </script>

    <title>REGISTRAR LIBROS</title>
</head>
<body>

<form id="Registrar" method="POST" action="../controlador/registrar.php" >
 
 <label for="nombrelib">NOMBRE DEL LIBRO : </label>
 <input type="text" id="nombrelib" name="nombrelib" value="" placeholder="Ingresar nombre del libro"  />
 <br>
 
 <label for="ISBN"> ISBN: </label>
 <input type="text" id="ISBN" name="ISBN" value="" placeholder="Ingresar ISBN ..."/>
 <br>
 <label for="numpagina">NUMERO DE PAGINAS:</label>
 <input type="text" id="numpagina" name="numpagina" value="" placeholder="Ingresar numero de pagina..."/>
 <br>
 <label for="numcapitulo">NUMERO DE CAPITULOS:</label>
 <input type="text" id="numcapitulo" name="numcapitulo" value="" placeholder="Ingresar numero de pagina..."/>
 <br>
 <label for="titulocap">TITULO DEL CAPITULO:</label>
 <input type="text" id="titulocap" name="titulocap" value="" placeholder="Ingresar numero de pagina..."/>
 <br>
 <label for="autor">AUTOR: </label>
 <select  name="autor" id="autor">
     <option> </option>
     <option></option>
     
</select>

<div id="boton">
 <input type="submit" id="crear" name="crear" value="REGISTRAR" />
 <input type="reset" id="cancelar" name="cancelar" value="CANCELAR" onclick="limpiar()" />
</div>
</form>
</body>
</html>