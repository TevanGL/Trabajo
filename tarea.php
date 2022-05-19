<?php
#funciones sin parametro

function diomedes (){
    echo "aguila o miedo?.<br>";
}
diomedes();
#2
function futbol (){
    echo "el futbol de vez en cuando es bueno.<br>";
}
futbol();
#funciones con parametros

function casa ($sillas){
    echo $sillas."<br>";
}
casa ("sentarse");

function celular ($google){
    echo $google."<br>";
}
celular ("incognito");
#funciones con retorno
#1
function conocer ($hablar){
    return $hablar;
}
echo conocer ("hola:3");
#2
function choco ($capital){
    return $capital;
}
echo choco ("medellin");
#condiciones
#1
$z= 12;
$y= 50;
if ($p>$c){
    echo "si es mayor";
}
else if ($p==$c){
    echo "como van a ser iguales";
}
else{
    echo "si es menor";
}
#2
$clubcolombia= 2000;
$aguila= 1500;
if ($clubcolombia>$aguila){
    echo "esta mas cara la culb colombia mk ";
}
else if ($clubcolombia==$aguila){
    echo "son al mismo precio?";
}
else{
    echo "esta mas cara la aguila mk";
}
#while
#1
$n=1;
while ($n<=20){
    echo $n;
    $n++;
}
#2
$t=3;
while ($t<=5){
    echo $t;
    $t++;
}
#do while
#1
$s=1;
do{
    echo $s;
    $s++;
}
while ($s<=12);
#2
$l=23;
do{
    echo $l;
    $l++;
}
while ($l<=120);
#for
#1
for ($d=1;$d<=10;$d++){
    echo $d;
}
#2
for ($h=5;$h<=15;$h++){
    echo $h;
}
#switch
#1
$dia="jueves";
switch ($mes){
    case "lunes":
        echo "dormir porque estoy mamado";
        break;
    case "miercoles":
        echo "ir a caminar porque si";
        break;
    case "jueves":
        echo "dormir otra vez";
        break;
    case "viernes":
        echo "farrear yo solito";
        break;
    default: echo "tirar paja porque que mas";
}
#2
$polas ="costeña";
switch ($polas){
    case "aguila light":
        echo "1500 pesos la botella";
        break;
    case "pokeron":
        echo "3000 pesos la botella";
        break;
    case "costeñita ":
        echo "2000 pesos la botella";
        break;
    case "smirnoff ice":
        echo "4000 pesos la botella princesa";
        break;
    case "costeña":
        echo "1800 pesos la costeña ()";
        break;

    default: echo "no tengo eso en la tienda de don jorge "
}






?>