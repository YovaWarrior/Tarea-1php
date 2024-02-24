<?php

// Estructuras de control condicionales (IF - IF ELSE):

// Calcular edad a partir de la fecha de nacimiento:
$fechaNacimiento = "1990-05-15";
$fechaActual = date("Y-m-d");
$edad = date_diff(date_create($fechaNacimiento), date_create($fechaActual))->y;
echo "La edad de la persona es: $edad años\n\n";

// Determinar el mayor de dos números:
$primerNumero = 10;
$segundoNumero = 20;

if ($primerNumero > $segundoNumero) {
    echo "El primer número es mayor: $primerNumero\n\n";
} elseif ($segundoNumero > $primerNumero) {
    echo "El segundo número es mayor: $segundoNumero\n\n";
} else {
    echo "Ambos números son iguales\n\n";
}

// Determinar si un número es par o impar:
$numeroSeleccionado = 7;

if ($numeroSeleccionado % 2 == 0) {
    echo "$numeroSeleccionado es un número par\n\n";
} else {
    echo "$numeroSeleccionado es un número impar\n\n";
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

echo "El factorial de $numeroBase es: $factorial\n\n";

// Generar 20 números aleatorios y ordenarlos de mayor a menor utilizando ciclos for:
$numeros = [];

for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100);
}

rsort($numeros);

echo "Números ordenados de mayor a menor: " . implode(", ", $numeros) . "\n\n";

// Array Asociativo y Foreach:

// Llenar un array asociativo con datos de 10 alumnos y mostrar sus datos:
$alumnos = array(
    array('alumno' => 'Luis', 'curso' => 'Administracion', 'nota' => 95),
    array('alumno' => 'Raul', 'curso' => 'Programacion', 'nota' => 45),
    array('alumno' => 'Pablo', 'curso' => 'Robotica', 'nota' => 88),
    array('alumno' => 'Aracelly', 'curso' => 'Biologia', 'nota' => 78),
    array('alumno' => 'Pedro', 'curso' => 'Arte', 'nota' => 67),
    array('alumno' => 'Sofia', 'curso' => 'Música', 'nota' => 80),
    array('alumno' => 'Erick', 'curso' => 'Educación Física', 'nota' => 84),
    array('alumno' => 'Andy', 'curso' => 'Inglés', 'nota' => 78),
    array('alumno' => 'Ioni', 'curso' => 'Geografía', 'nota' => 90),
    array('alumno' => 'Gabriel', 'curso' => 'Filosofia', 'nota' => 78)
);

foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "\n";
}

?>