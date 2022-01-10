<?php 

if(isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){
    $selector=$_POST["herramienta"];

 $infov1=$_POST["infovuelo1"];
        $codigov1=$infov1["codigo1"];
        $ciudadorigenv1=$infov1["ciudadorigen1"];
        $ciudaddestinov1=$infov1["ciudaddestino1"];
        $preciov1=$infov1["precio1"];
        $fechav1=$infov1["fecha1"];

$infov2=$_POST["infovuelo2"];
    $codigov2=$infov2["codigo2"];
    $ciudadorigenv2=$infov2["ciudadorigen2"];
    $ciudaddestinov2=$infov2["ciudaddestino2"];
    $preciov2=$infov2["precio2"];
    $fechav2=$infov2["fecha2"];








//Une Vuelos
function unirvuelos($infov1,$infov2){
    $unir_vuelos=array_merge($infov1,$infov2);
    echo "<b>Vuelos unidos</b><br>";
    print_r($unir_vuelos);
}

//Diferencia entre vuelos


//Ordena Vuelos


//Informacion Comun


#Realizacion de variables
switch ($selector) {
    case 'unir': 
        uniravion($infov1,$infov2);
    break;

    }

}
?>