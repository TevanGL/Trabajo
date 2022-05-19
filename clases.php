<?php
#$automovil1=(object)["marca"=>"toyota","modelo"=>"corolla"];
#$automovil2=(object)["marca"=>"hyunday","modelo"=>"accent vision"];
#function mostrar($automovil){
 #   echo "<p> hola! soy un $automovil->marca,modelo $automovil->modelo</p>";

#}
#mostrar ($automovil1); 
#mostrar ($automovil2);



#clase: 
#es un modelo que se usa para crear OBJETOS
#que comparten un mismo comportamiento, estado, identidad 

class automovil{
    #propiedades: 
    #caracteristicas de un objeto.
    public $marca;
    #private
    public $modelo;
    #metodo: 
    #es el algoritmo asociado a un objeto
    #la diferencia entre metodo y funcion 
    #metodo son las funciones de una clase
    #funcion algoritmo de programacion
    public function mostrar(){
        echo "<p>hola!soy un $marca->marca,modelo $modelo->modelo,marca</p>";
    }
}

#objeto 
#una entidad provista de metodos o mensajes a los valores
$a=new automovil();
$a->marca="toyota";
$a->modelo="corolla";
$a->mostrar();

$b=new automovil();
$b->marca="hyundai";
$b->modelo="accent";
$b->mostrar();

$c=new automovil();
$c->marca="mazda";
$c->modelo="z";
$c->mostrar();

#principios de la poo que se cumplen en este ejemplo: 
#abstracion: nuevos tipos de datos(el que tu quieras, lo que creas)
#encapsulacion: organizar el codigo en grupos logicos 
#ocultamiento: ocultar detalles de implementacion y exponer solo los detalles que sean necesarios para el resto del sistema

?>
