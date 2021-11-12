<?php

for ($inicio=0; $inicio < 5; $inicio++) {

    for ($inicio2=0; $inicio2 < 5; $inicio2++) {

        print "Vamos por la interacción inicio: ".$inicio."<br>";

        print "Vamos por la interacción inicio2: ".$inicio2."<br>";

    }
}

print "<br><b>BUCLE DEPENDIENTE"."</b>"."</br>";


#ARRAYS 

print "<br><h2>ARRAY 'ESTÁNDAR'</h2>"."</br>";

#Forma 1:

$numerosP = array (2,4,6,8,10);

print_r ($numerosP);
echo "<br>";
print "Muestra lo que hay en la posición 3: ".$numerosP [3]."<br>";

$cuentaNumerosP=count($numerosP);
print "Valor de cuenta Array: ".$cuentaNumerosP. "<br>";

for ($i=0; $i < $cuentaNumerosP ; $i++) { 
    print "Muestro lo que hay en la posición".$i." : ".$numerosP[$i]."<br>";
}
echo "<br>";
#Forma 2: 

$numerosI = [1,3,5,7,9];

print_r ($numerosI);
echo "<br>";


#ARRAYS ASOCIATIVOS

print "<br><h3>ARRAY ASOCIATIVOS</h3>"."<br>";

$potencias2=[ 1=>2 , 2=>4 , 3=>8];
print_r ($potencias2);
echo "<br>";
$capitales= array("Andalucia"=> "Sevilla",
 "Madrid" => "Madrid",
 "Aragon"=> "Zaragoza",
 "Baleares"=> "Palma de Mallorca");

 print_r ($potencias2);
 echo "<br>";
 print_r ($capitales);
echo "<br>";

//Añadir elementos a un array
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
 
 print_r($notasAsignaturas);

//Unión de Arrays

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





//Copiar matrices

$copiacapitales = $capitales;
$copiacapitales["Andalucia"]="Cordoba";
print_r($copiacapitales);
echo "<br>";

$colores1=["Verde","Azul","Amarillo","Rojo"];
$colores2=["Verde","Azul","Amarillo","Rojo","Blanco"];
echo "<br>";

$resultadoDiferencia= array_diff($colores2,$colores1);
$resultadoUnion= array_merge($colores2,$colores1);
$resultadoInterseccion= array_intersect($colores2,$colores1);
$acumulador=array("Purpura","Marron","Celeste");

array_push($colores2,"Purpura","Marron","Celeste");

//$ordenarArray= sort($colores2,SORT_NATURAL);
print_r($resultadoDiferencia);
echo "<br>";
print_r($resultadoUnion);
echo "<br>";
print_r($resultadoInterseccion);
echo "<br>";
//print_r($ordenarArray);
echo "<br>";
//print_r($colores2);







?>