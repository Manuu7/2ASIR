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


#ARRAYS ASOCIATIVOS

print "<br><h3>ARRAY ASOCIATIVOS</h3>"."<br>";

$potencias2=[ 1=>2 , 2=>4 , 3=>8];
print_r ($potencias2);
echo "<br>";
$capitales= array("Andalucia"=> "Sevilla",
 "Madrid" => "Madrid",
 "Aragon"=> "Zaragoza",
 "Baleares"=> "Palma de Mallorca");

 print_r ($potencias);
 echo "<br>";
 print_r ($capitales);
echo "<br>";

#Añadir elementos a un array
$capitales["Andalucia"]="Almeria ";

print_r ($capitales);
echo "<br>";


$cuentaLetras=strlen($capitales["Andalucia"]);
echo $cuentaLetras;


$notasAsignaturas=["LMI"=>0,
 "FOL"=>10,
 "PAR"=>9,
 "ISO"=>0,
 "FH"=>0,
 "BD"=>4];
 
 print_r($notasAsignaturasMigue);

#Unión de Arrays

echo "<br>";

$coches1= array("Seat","Renault","Dacia");
$coches2= ["BMW","Audi"];


print_r($coches1);
echo "<br>";
print_r($coches2);
echo "<br> Unión de arrays <br>";


$union1con2=$coches1+$coches2;
print_r($union1con2);
echo ">br>";


$union1con2=$coches1+$coches2;
print_r($union1con2);
echo ">br>";

#Borra elemento

$coches1= array("Seat","Renault","Dacia","BMW","Audi");
print_r();
echo "<br>";
unset ($coches3[1]);

print_r ($coches3);
echo "<br>";
$cuentaCoches=count($coches3);
echo $cuentaCoches;

print $coches3[]="Ferrari";
print_r($coches3);
echo "<br>";



#Copiar matrices

$copiacapitales = $capitales;
$copiacapitales["Andalucia"]="Cordoba";
print_r($copiacapitales);
echo "<br>";

$colores1=["Verde","Azul","Amarillo","Rojo"];
$colores2=["Verde","Azul","Amarillo","Rojo","Blanco"];
echo "<br>";

$resultadoDiferencia= array_diff($colores2,$colores1);
print_r($resultadoDiferencia);







?>