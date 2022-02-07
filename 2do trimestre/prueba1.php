<?php

//Crear un fichero
$manuel= fopen("prueba1.txt","a");
if ($manuel == false) {
    echo "Error no se ha creado";
} else {
    echo "Se ha creado correctamente";
}
fclose($manuel);
$manuel=fopen("prueba1.txt","w+");
if ($manuel == false) {
    echo "Error no se ha creado";
} else {

 //Escribimos el en fichero
 fwrite($manuel,"Manuel Jesús");
 fwrite($manuel,"Gómez Casablanca");
 fwrite($manuel,"23 años");
 fflush($manuel);

}

fclose($manuel);

//Leer fichero
echo "<br>";
echo readfile("prueba1.txt");
echo "<br>";





?>
