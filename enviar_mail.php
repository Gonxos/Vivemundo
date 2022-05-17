<?php 

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$destinatario="gonjibra@vivemundo.es";
$asunto="Contacto desde ViveMundo";

$carta="De: $nombre $apellidos \n";
$carta.="Correo: $correo \n";
$carta.="Teléfono: $telefono \n";
$carta.="Mensaje: $mensaje";


if(!empty($nombre)){
mail($destinatario, $asunto, $carta);
echo "<script>
   		setTimeout(function() {
        	window.location.replace('home.php');
    	}, 500);
</script>";
}




?>