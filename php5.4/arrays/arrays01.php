<?php
echo "referencia oficial: http://www.php.net/manual/es/language.types.intro.php";

echo "Ejemplos de uso:";

echo "Declarar array e inicializarlo";

$frutas = array('pera', 'manzana', 'frutilla', 'durazno', 'sandia');

echo "Acceder al primer elemento del array";
echo $frutas[0];


echo "Acceder al último elemento del array";
echo $frutas[count($frutas)-1];
