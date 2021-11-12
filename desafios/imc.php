<?php

$peso = 890;

$altura = 1.78;

$IMC = ($peso)/($altura**2);

if($IMC<=18.5){
    echo "Abaixo do peso";
}elseif($IMC<18.5 && $IMC<=24.9){
    echo "Peso Norma";
}elseif($IMC>=25 && $IMC<29.9){
    echo "Sobrepeso";
}elseif($IMC>=30 && $IMC<34.9){
    echo "Obesidade Grau 1";
}elseif($IMC>=35 && $IMC<39.9){
    echo "Obesidade Grau 2";
}elseif($IMC>=40){
    echo "Obesidade Grau 3 ou Mórbida";
}