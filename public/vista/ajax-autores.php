<?php
include '../../config/conectarBD.php'; 
$sql = "SELECT * FROM autor";
$res=$conn->query($sql);
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
	 echo '<option id="autorAJAX" name="autorAJAX" value='.$row['aut_codigo'].'>'.$row['aut_nombre'].'</option>';
	}
}
    $conn->close();

?> 

