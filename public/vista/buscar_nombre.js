function buscarPorNombre() {
    var nombre = document.getElementById("nombre").value;
    if (nombre == "") {
        document.getElementById("informacion").innerHTML = ""; 
        } else { 
        if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        //alert("llegue");
        document.getElementById("informacion").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET","../../admin/controladores/buscar_nombre.php?nombre="+nombre,true);
        xmlhttp.send();
        }
        return false;
}