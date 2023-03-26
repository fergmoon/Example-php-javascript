
<?php

echo "<h1>Importante PHP: </h1><br>";
echo "<h2>Variables (varian con su valor) inician con el símbolo $ </h2><br>";
echo "<h2>Finalizar sentencias de ejecución con el símbolo ; </h2><br>";

echo "Hola Mundo php";

const miConstante = "Información";

echo "<br>";
echo miConstante;

$miVariable = 1000;

$miVariable = 300;

echo "<br>";
echo $miVariable;

$abc = true;   //true en lenguaje maquina es 1. Aparece 3001

if ($abc) {
    echo"<br>";
    echo "true =".$abc;
}

$abc = false; //No ingresa arriba al if sino al else
if ($abc) {
    echo"<br>";
    echo "true =".$abc;
}else{
    echo"<br>";
    echo "false =".$abc;

}

$abc = true;   

if ($abc == true) {
    echo"<br>";
    echo "== ".$abc;
}

$abc = false; 

if ($abc) {
    echo"<br>";
    echo "true =".$abc;
}else if ($abc == false){
    echo"<br>";
    echo "false =".$abc;

}

for ($i=0; $i < 10 ; $i++) { 
    echo"<br>";
    echo $i;
}

$a=100;

 while ($a <= 110) {
    echo"<br>";
    echo $a;
    $a++;
 }

 $b = 1000;

do {
    echo"<br>";
    echo $b;
    $b++;
} while ($b <= 1010);


$cajero = "Opción 1";
$cajero = "otra cosa";

switch ($cajero) {
    case 'Opción 1':
    echo"<br>";
    echo $cajero;
        break;
    
    default:
    echo"<br>";
    echo $cajero;
        break;
}

function mifuncion(){
    echo"<br>";
    echo "Ejecutando mi función() !!";
}
mifuncion();

//ejemplo2

function operacion() {

    $i = 10;
    $a = 10;
    $ia = $i+$a;
    echo"<br>";
    echo($ia);
}
operacion();











?>