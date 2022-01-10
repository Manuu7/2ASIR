<?php


#CONSTANTES
$pi=pi();

echo "Numero Pi: " .$pi. "<br>";

define("GRAVEDAD",9.8);

echo "Constante de la gravedad: ".GRAVEDAD;


echo "<br>";

#ARRAYS Y TRATAMIENTO
$numeros= array(2,4,8,7,10,GRAVEDAD);
print_r($numeros);
$camtidad_numeros=count($numeros);
//shuffle($numeros);
echo "<br>";
//echo "Cuenta: " .$camtidad_numeros. "<br>";
//echo "desordena: " .$desordena. "<br>";
print_r($numeros);

echo "<br>";


for ($i=0; $i <$camtidad_numeros ; $i++) { 
    echo "Valor de:" .$i.": ".$numeros[$i]."<br>";
}

echo "<br> For Each <br>";
foreach ($numeros as $numerito) {
    echo $numerito. "<br>";
    
}


$provincias =array(
"Andalucia"=>"Sevilla",  
"Madrid"=>"Madrid",  
"Aragon"=>"Zaragoza",  
"Pais Vasco"=>"Bilbao"
);

print_r($provincias);

echo "<br>";

foreach ($provincias as $provincita => $capitalita) {
    echo"La Comunidad Autonoma de ".$provincita. ", su capital es ".$capitalita. "<br>";
}

//array_push($provincias,["Cataluña"=>"Barcelona"]);


#AÑADIR VALORES EN ARRAYS NORMALES (SE AÑADE AL FINAL)
$numeros[]=3;

#MODIFICAR UN VALOR DEL ARRAY
$numeros[5]=3;
echo "<br>";
foreach ($numeros as $numerito) {
    echo $numerito. "<br>";
    
}

#ELIMINAR UN VALOR DE UN ARRAY
unset($numeros[6]);
echo "<br>";
foreach ($numeros as $numerito) {
    echo $numerito. "<br>";
    
}

#ARRAY MULTIDIMENSIONALES 
$asir= array(
    array("Nombre"=>"Naaacho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere tela de grasioso"),
    array("Nombre"=>"Kerry","Frase"=>"au au au"),
    array("Nombre"=>"Migue","Frase"=>"ke ezoh, chi chi")
);

print_r($asir);
echo "<br>";
foreach ($asir as $alumno) {
    echo "Frase tipica de " .$alumno["Nombre"].": ".$alumno["Frase"]."<br>";
}


#FUNCIONES 
$numero1=10;
$numero2=4;

function suma($numero1,$numero2){
    $res=$numero1+$numero2;
    echo $res;
}
 suma($numero1,$numero2);
echo "<br>";

#FUNCION CON RETORNO
$numero1=10;
$numero2=4;

function sumar($numero1,$numero2){
    $res=$numero1+$numero2;
    return $res;
}
 $sumador=sumar($numero1,$numero2);
 echo $sumador;

 echo "<br>";
 echo GRAVEDAD;

 echo "<br>";
$redon=round(GRAVEDAD);
echo $redon;







/*
$manule="cafelaso de arvellana";
$migue=0;
$pako=true;


$dato1=$_POST["dato1"];
$dato2=$_GET["dato2"];


#CONDICIONALES
if (condition) {
    # code...
} else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}



#BUCLES
while ($a <= 10) {
    # code...
}

for ($i=0; $i < ; $i++) { 
    # code...
}
*/







?>