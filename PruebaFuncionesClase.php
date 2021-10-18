<!DOCTYPE html>
<html lang="en">
<head>
    <style>

Button {
  font-family: verdana;
  font-size: 20px;
  border-left-style: solid
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>


<form>
        <fieldset><br>
            <legend>Calculadora</legend>
        <label >Numero1</label>
        <input type="text" name="Nombre"><br>
        <label>Numero2</label>
      
        
         <input type="text" name="2ºApellido"><br><br><br>
        <label>operaciones</label><br><br><br> 
        <input type="Button" name="" value=" + " onclick="calcula('+')"> 
        <input type="Button" name="" value=" - " onclick="calcula('-')">  
        <input type="Button" name="" value=" X " onclick="calcula('*')">
        <input type="Button" name="" value=" / " onclick="calcula('/')"> 
        <input type="Button" name="" value=" % " onclick="calcula('/')">
        <input type="Button" name="" value=" √ " onclick="calcula('/')">
        <input type="Button" name="" value=" cuadrado² " onclick="calcula('/')">
        <input type="Button" name="" value=" cubo³ " onclick="calcula('/')">
        <input type="Button" name="" value="resolver"><br><br><br>
        <h3>Resultado</h3><br><br>


</form>

<?php

function suma($num1,$num2){

    $res= $num1 + $num2;

    print "El resultado es ".$res."<br>";
}


function resta($num1,$num2){

    $res= $num1 - $num2;

    print "El resultado es ".$res."<br>";
}

function multiplicacion($num1,$num2){

     $res= $num1 * $num2;

  print "El resultado es ".$res."<br>";
}

function division($num1,$num2){

    $res= $num1 / $num2;

    print "El resultado es ".$res."<br>";

}

$numero = 25;
$raiz_cuadrada = sqrt($numero);
echo "La raíz cuadrada de $numero es $raiz_cuadrada"."<br>"."<br>";
   
$numero = 5;
$numero_al_cuadrado = pow($numero, 2); 
echo "El número $numero elevado al cuadrado es $numero_al_cuadrado"."<br>"."<br>";


$numero = 4;
$numero_al_cubo = pow($numero, 3);
echo "El número $numero elevado al cubo es $numero_al_cubo"."<br>"."<br>";

$numero = 5;
$numero_a_la_9 = pow($numero, 9);
echo "El número $numero elevado a la 9 es $numero_a_la_9"."<br>"."<br>";

$num1=2; $num2=2;





?>


</body>
</html>