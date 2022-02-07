<?php

if ( ! empty($_POST)) {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])) 
        
    {
        echo "Por favor, introduzca información. Formulario vacio.";
    } else {
        echo "Nombre: ".$_POST["txtNombre"]."<br>";
        echo "Apellidos: ".$_POST["txtApellido"]."<br>";
    }
} else {
    echo "Por favor, introduzca información. Formulario vacio.";
}


?>