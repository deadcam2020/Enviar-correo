<?php 
 $destino = "camilocontreras2019@gmail.com";
 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];
 $telefono = $_POST['telefono'];
 $mensaje = $_POST['mensaje'];

$contenido = "Nombre: ".$nombre . "Correo: ". $correo. "Telefono: ".$telefono. "Mensaje: ". $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gracias.html");

 ?>