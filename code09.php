<?php
$peso = 75; 
$altura = 1.75;
$calculoIMC = $peso / ($altura * $altura);

if($calculoIMC < 18.5){
    echo "Abaixo do peso";
}elseif($calculoIMC >= 18.5 && $calculoIMC < 25){
    echo "Peso normal";
}elseif($calculoIMC >= 25 && $calculoIMC < 30){
    echo "Sobrepeso";
}else{
    echo "Obesidade";
}
?>