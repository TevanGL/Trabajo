<?php
#condiciones
$a=5;
$b=10;
if($a>$b){
    echo "a es mayor que b";
}
else if($a==$b){
    echo"a es igual que b";
}
else{
    echo "a es menor que b";
}
echo"<br>";

$dia = "sabado";
switch($dia){

    case 'sabado':
    echo"voy a estudiar php.<br>";
    break;

    case 'viernes':
        echo"voy de farra.<br>";
    break;

    case 'domingo':
        echo 'voy a descansar.<br>';
    break;
    default: echo "voy a corpuandes.<br>";

}
var_dump($dia);
echo"<br><br>";
$n = 0;
while($n <=5){
    echo $n;
    $n++;
}
echo "<br><br>";
$p=1;
do{
    echo $p;
    $p++;
}
 while($p <=5);
for($i=1;$i<=5;$i++){
    echo $i;
}

?>