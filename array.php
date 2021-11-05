<?php 

#Array Normales.
$numeros = array(8, 3, 7, 1);

$suspensos = array("Migue","Kerry");

$coches = array("Ferrari","Seat","BMW","Opel","Mercedes");


echo $suspensos[0];
echo $numeros[3];
echo $coches[1];

#Contar coches.
$cuentaCoches = count($coches);
echo "Número de coches".$cuentaCoches."<br>";

#Coches Aleatorios.
$aleatorio = rand(0,4);
echo "Coche aleatorio:".$coches[$aleatorio]."<br>";

#Mostrar coches aleatorios 5 veces.
$parada = 0;
while ($parada <= 5) {
    
    $aleatorio = rand(0,4);
    echo $coches[$aleatorio]."<br>";
#$parada++ es un incremento. Mientras parada sea 0 pone un coche aleatorio.
#el ++ va subiendo 1 al 0 hasta que llegue a 0.
    $parada++;
}

#Ordenar coches.
$cochesordenados = sort($coches);
echo $cochesordenados;


$parada = 0;
while ($parada < 5) {
    
    echo $coches[$aleatorio]."<br>";
    $parada++;

}


#Array Asociativos.

$alumno = array("Nombre" => "Migue",
                "Apellidos" => "Kerry",
                "Edad" => 23,
                "estaAprobado" => false);

echo "El alumno es: " .$alumno["Nombre"].$alumno["Apellidos"].$alumno["Edad"];












?>