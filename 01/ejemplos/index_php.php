<?php
$mi_variable = '0';
var_dump($mi_variable);
var_dump((int) $mi_variable);
var_dump(intval($mi_variable));

$miArray = ['uno', 'dos', 'tres'];
var_dump($miArray);

$miArray[0] = 'UNODOESTY';
echo $miArray[0] . '<br />';

for ($i = 0; $i < count($miArray); $i++) {
    echo $miArray[$i] . '<br />';
}

foreach ($miArray as $value) {
    var_dump($value);
}

$miArrayAsociativo = array(
    'Nombre' => 'Fulanito',
    'Apellido' => 'Apellido fulanito',
    'DNI' => '12345678A'
);

foreach ($miArrayAsociativo as $key => $value) {
    var_dump($key . ': ' . $value);
}
