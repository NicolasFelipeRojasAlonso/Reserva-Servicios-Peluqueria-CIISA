<?php

$hombre = ['Corte de cabello', 'Corte al cero', 'Afeitado', 'Masaje capilar', 'Teñido', 'Peinado'];
$valoresHombre = [10000, 7000, 8000, 12000, 11000, 20000];

$mujer = ['Corte de cabello', 'Corte al cero', 'Masaje capilar', 'Teñido', 'Peinado'];
$valoresMujer = [15000, 7000, 15000, 18000, 20000];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rut = $_POST["rut"];
    $nombre = $_POST["name"];
    $sexo = $_POST["sexo"];
    $serviciosSeleccionados = $_POST["servicios"];

    if (empty($rut) || empty($nombre) || empty($sexo) || empty($serviciosSeleccionados)) {
        echo "<script>alert('Por favor, complete todos los campos y seleccione al menos un servicio.');window.history.back()</script>";
    } else {
        $costoTotal = 0;

        if (in_array("Corte al cero", $serviciosSeleccionados) && in_array("Peinado", $serviciosSeleccionados)) {
            echo "<script>alert('No es posible seleccionar ambos servicios: \"Corte al cero\" y \"Peinado\" al mismo tiempo.');window.history.back()</script>";
            die();
        }

        $serviciosYValores = ($sexo == "hombre") ? array_combine($hombre, $valoresHombre) : array_combine($mujer, $valoresMujer);

        foreach ($serviciosSeleccionados as $servicio) {
            if (isset($serviciosYValores[$servicio])) {
                $costoTotal += $serviciosYValores[$servicio];
            }
        }

        if ($sexo == "mujer" && in_array("Afeitado", $serviciosSeleccionados)) {
            echo "<script>alert('Las mujeres no pueden seleccionar el servicio de afeitado.');window.history.back()</script>";
            die();
        }

        echo "
        <div align='center'>
            ¡Resumen de la reserva! <br>
            Rut: $rut <br>
            Nombre: $nombre <br>
            Sexo: $sexo <br>
            Servicios seleccionados: <br>
            <ul>";

        foreach ($serviciosSeleccionados as $servicio) {
            echo "<li>$servicio</li>";
        }

        echo "</ul>
            Costo Total: $costoTotal <br>
            <a href='../vista/servicio.php'>Volver al inicio</a>
        </div>";
    }
}

