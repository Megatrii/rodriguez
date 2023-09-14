<?php

if(!empty($_POST["btnregistrar"])) {
   if(!empty($_POST["nombre"])and !empty($_POST["apellido"]) and !empty($_POST["email"]) and !empty($_POST["telefono"]) and !empty($_POST["documento"]) ) {
    
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $documento=$_POST["documento"];

    $sql=$conexion->query("insert into pacientes(nombre,apellido,email,telefono,documento)values('$nombre','$apellido','$email','$telefono','$documento')");
     if ($sql==1) {
        echo '<div class="alert alert-success">Paciente registrado correctamente </div>';
     }  else {
        echo '<div class=alert alert-succes">Error al registrar el paciente</div>';
     }
      

       
} else {
    echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
}
   

}
?>