<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio fechas</title>
</head>
<body>
    <h2>Ejercicio de fechas</h2>

    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    
    <?php
    echo "vamos a trabajar con fechas"."<br>";
    echo " Hoy es: ".date("l")."<br>";
    echo " Dime la fecha actual ".date("d/n/Y")."<br>";
    echo " Dime la fecha actual ".date("j/M/Y")."<br>"."<br>"."<br>";

    $hora = date("H");

    echo "Ejercicio ejemplo if"."<br>";

    $hora = date("H");
    if($hora<15){
        echo "Lo siento, sigo en clases."."<br>";
        echo "hora: ".$hora."<br>"."<br>";
    }else{
        echo "Estoy en mi fucking casa."."<br>"."<br>"."<br>";
    }


    echo "Ejercicio ejemplo if-else"."<br>";

    $segundos = date("s");
    if($segundos<10){
        echo "Primeros 10 segundos."."<br>";
        echo "Segundos: ".$segundos."<br>"."<br>"."<br>";
    }elseif($segundos>"50"){
        echo "Ultimos 10 segundos"."<br>";
        echo "Segundps: ".$segundos."<br>"."<br>"."<br>";
    }else{
        echo "Segundos intermedios"."<br>";
        echo "Segundos: ".$segundos."<br>"."<br>"."<br>"."<br>";
    }


    echo "Ejercicio ejemplo switch"."<br>";
        $colores ="Verde";
        switch ($colores) {
            case 'Rojo':
                # code...
                echo "La sangre es de color: ".$colores."<br>";
                break;

            case 'Amarillo':
                # code...
                echo "El sol es de color: ".$colores."<br>";
                break;

            case 'Verde':
                    # code...
                    echo "La yerba es de color: ".$colores."<br>";
                    break;
                
            case 'Azul':
                    # code...
                    echo "El mar es de color: ".$colores."<br>";
                    break;


            default:
                echo "El color: ".$colores. " no está registrado en la base de datos.";
                break;
        }

    ?>

    <a href ="Prueba1.html"> Volver a la página principal</a>
</body>
</html>