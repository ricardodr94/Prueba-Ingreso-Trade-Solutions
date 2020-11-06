<?php

/* 
1). Dado un numero n encontrar todos los múltiplos de 3 y 5 menores al número dado,
el método debe retornar la suma de los múltiplos encontrados. Ejemplo: si el numero
ingresado es 10, los múltiplos de 3 y 5 menores a 10 son: 3, 5, 6, 9, el resultado de
la función debe ser 23, debido a que es la suma de 3, 5, 6, 9.
*/

function sumMultiples($number){
    $total = 0;
    for ($i=0; $i < $number ; $i++) { 
        if ($i%3 == 0 || $i%5 == 0) {
            $total += $i;
            
        }
        
    }

   return $total;
 
}

echo sumMultiples(10);

//-------------------------------------------------------------------------------------------

/*
2). Dado un string separado por espacios, guiones y guiones bajos. Se debe
implementar una función camel case que transforme la oración. Ejemplos
*/

//a). Dado “Bienvenido a_Treda-solutions” retornar “BienvenidoATredaSolutions”

function camelCase($sentence){
    
    $result = preg_replace('([^A-Za-z$])', '',  ucwords(str_replace('-', ' ', $sentence)));
    return "<br>".$result;
}

echo camelCase('Bienvenido a_Treda-solutions');

//b). Dado “bienvenido-a_Treda solutions” retornar “bienvenidoATredaSolutions”

function camelCase2($word, $lowercaseFirstCharacter = false){

    $result2 = preg_replace('([^A-Za-z$])', '', ucwords(str_replace('-', ' ', $word)));

    if (!$lowercaseFirstCharacter) {
        $result2 = lcfirst($result2);
    }
   
    return "<br>".$result2;
}

echo camelCase2('bienvenido-a_Treda solutions');

//------------------------------------------------------------------------------------------------------


//3). Dada una frase, devolver la frase donde las palabras con mayor a 5 letras esten al revés. Ejemplos

//a. Dado “Bienvenido a Treda Solutions” retornar “odinevneiB a Treda snoituloS”

function invertedWord(){
    $str = 'Bienvenido a Treda Solution';
    $arra=(explode(' ',$str,5));
    $cadenaFinal="";
    
    for($i=0;$i<count($arra);$i++){
	    $palabra = $arra[$i];
        $result = "";
    
        if (strlen($palabra)>5) {
            $result = strrev($palabra);
        }else{
        	$result=$palabra;
        }
            
       $cadenaFinal= $cadenaFinal ." ". $result;
     }

     echo "<br>";
     return $cadenaFinal;
}

echo invertedWord();






