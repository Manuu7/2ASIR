<?php

echo date("Y")."<br>";
echo date("d M Y")."<br>";
echo date("d/m/Y")."<br>";
echo date("d/m/y h:i:s")."<br>";

//Zonas horarias

echo "Estoy en la zona de: ". date_default_timezone_get()."<br>";
echo "Fecha: ". strftime("%A, %d, de %B del %Y - %H:%M:%S");

echo "<br>";

echo date_default_timezone_set("Asia/Brunei");
echo "Estoy en la zona de: ". date_default_timezone_get()."<br>";
echo "Fecha: ". strftime("%A, %d, de %B del %Y - %H:%M:%S");

echo "<br>";

//07/02/2022 09:00:00
//hora,minuto,segundo,mes,dia,año
$fechita=mktime("09","00","00","02","07","2022");
echo $fechita."<br>";
echo date("d/m/y h:i:s",$fechita)."<br>";


/*

1 minutos = 60 segundos
1 hora = 60*60 = 3600 segundos
1 dia = 24*3600 = 86400 segundos

*/

//Suma 1 dia y 2 horas

$fechita = $fechita + 86400+7200;
echo date("d/m/y h:i:s",$fechita)."<br>";

//Diferencia entre 2 fechas
$fecha1=mktime("09","00","00","02","07","2022");
$fecha2=mktime("12","00","00","02","09","2022");

$diff=$fecha2-$fecha1;
echo date("d/m/y h:i:s",$diff)."<br>";
$minutos=$diff/60;
$horas=$diff/3600;
$dias=$diff/86400;

echo "Fecha origen ".date("d/m/y h:i:s",$fecha1)."<br>";
echo "Fecha origen ".date("d/m/y h:i:s",$fecha2)."<br>";
echo "Faltan ".$minutos." minutos.<br>";
echo "Faltan ".$horas." horas.<br>";
echo "Faltan ".$dias." dias.<br>";




?>