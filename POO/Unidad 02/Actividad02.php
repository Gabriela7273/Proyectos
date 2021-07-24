<?php
//Declao un arreglo con los  datos de una persona
$Persona = [
    "nombre" => "Gabriela",
    "apellido" => "Santillan",
    "edad" => 48,
    "hobbie" => "Programar",
    "editorcod" => "Notepad++, entorno visual",
    "sistop" => "Windows 10"
];
//Muestra los valores del arreglo con foreach
foreach($Persona as $clave => $pers){
    echo $clave . ": " . $pers . "<br>";
}
?>