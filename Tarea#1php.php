<?php

// Estructuras de control condicionales (IF - IF ELSE):

// Calcular edad a partir de la fecha de nacimiento:
$fechaNacimiento = "1990-05-15";3
$fechaActual = date("Y-m-d");

$edad = date_diff(date_create($fechaNacimiento), date_create($fechaActual))->y;
echo "La edad de la persona es: $edad años<br>";

// Determinar el mayor de dos números:
$primerNumero = 10;
$segundoNumero = 20;

if ($primerNumero > $segundoNumero) {
    echo "El primer número es mayor: $primerNumero<br>";
} elseif ($segundoNumero > $primerNumero) {
    echo "El segundo número es mayor: $segundoNumero<br>";
} else {
    echo "Ambos números son iguales<br>";
}

// Determinar si un número es par o impar:
$numeroSeleccionado = 7;

if ($numeroSeleccionado % 2 == 0) {
    echo "$numeroSeleccionado es un número par<br>";
} else {
    echo "$numeroSeleccionado es un número impar<br>";
}

// Estructuras de control iterativas (FOR - WHILE):

// Calcular el factorial de un número utilizando un bucle while:
$numeroBase = 5;
$factorial = 1;
$i = 1;

while ($i <= $numeroBase) {
    $factorial *= $i;
    $i++;
}

echo "El factorial de $numeroBase es: $factorial<br>";

// Generar 20 números aleatorios y ordenarlos de mayor a menor utilizando ciclos for:
$numeros = [];

for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100);
}

rsort($numeros);

echo "Números ordenados de mayor a menor: " . implode(", ", $numeros) . "<br>";

// Array Asociativo y Foreach:

// Llenar un array asociativo con datos de 10 alumnos y mostrar sus datos:
$alumnos = array(
    array('alumno' => 'Juan', 'curso' => 'Matemáticas', 'nota' => 85),
    array('alumno' => 'María', 'curso' => 'Historia', 'nota' => 75),
    array('alumno' => 'Pedro', 'curso' => 'Ciencias', 'nota' => 90),
    array('alumno' => 'Ana', 'curso' => 'Literatura', 'nota' => 88),
    array('alumno' => 'Luis', 'curso' => 'Arte', 'nota' => 92),
    array('alumno' => 'Laura', 'curso' => 'Música', 'nota' => 80),
    array('alumno' => 'Carlos', 'curso' => 'Educación Física', 'nota' => 87),
    array('alumno' => 'Sofía', 'curso' => 'Inglés', 'nota' => 95),
    array('alumno' => 'Pablo', 'curso' => 'Geografía', 'nota' => 83),
    array('alumno' => 'Elena', 'curso' => 'Química', 'nota' => 78)
);

foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "<br>";
}
?>