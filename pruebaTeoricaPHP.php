<?php

// INSTALACION GIT
/*
1). Nos dirijimos a la pagina oficial de git: https://git-scm.com/
2). Descargamos el ejecutable de git dependiendo del sistema operativo
3). Damos click al  ejecuctable para empezar a instalar git
4). Creamos nuestro repositorio con el comando git init
*/

//1. Cuál es la salida del siguiente programa, explique?

$z = 1;
$h = &$z;
$h = "2$h";

echo $h;
echo gettype($h);

/*
Respuesta: la salida que obtenemos de la variable $h es 21 de tipo de dato String, esto se debe primero que al momento 
de utilizar el operador de asignacion por refencia (&), significa que ambas variables tanto $z como $h terminan apuntando 
a los mismos datos y nada es copiado en ninguna parte. lo que indica que ambas variables apuntan al mismo contenido que es
el valor 1 y si se realizan cambios a la nueva variable ($h) afectan a la original, y viceversa. Por ultimo, como se declara 
otra variable con el mismo nombre de $h, entonces php modifica el valor de $h al nuevo valor asignado a la nueva variable
$h, y como almacena un valor de tipo string con el valor de la variables $h anterior, forza a la variables $h anterior a
convertirse en un tipo de dato string imprimiendo al final el 21
*/

//2).Cuál es la salida del siguiente programa, explique?

echo "<br>";
var_dump(0145 == 145);
/*
Respuesta: la salida que obtenemos es bool(false), lo que significa que 0145 y 145 no son iguales en valor 
*/
var_dump('0145' == 145);
/*
Respuesta: la salida que obtenemos es bool(true), lo que significa que "0145" y 145 son iguales en valor 
*/
var_dump('0145' === 145);
/*
Respuesta: la salida que obtenemos es bool(false), lo que significa que "0145" y 145 no son iguales en valor ni 
en tipo de dato
*/
var_dump('0145' === 146);
/*
Respuesta: la salida que obtenemos es bool(false), lo que significa que "0145" y 146 no son iguales en valor ni 
en tipo de dato
*/

//3).Cuál es la salida del siguiente programa, explique?

$text = "juan ";
$text[10] = "perez";

echo $text;

/*
Respuesta: la salida que obtenemos es juan p, lo que significa que a traves de Acceso a cadenas mediante caracteres 
podemos recorrer el valor de la variables como un array, para especificar hasta que cadena de caracter queremos 
imprimir. 
*/

//4).Cuál es la salida del siguiente programa, explique?

$a = "3j3mpl0";
$a = $a + 1;
echo $a;