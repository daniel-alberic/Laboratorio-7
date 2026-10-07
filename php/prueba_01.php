<?php
// FASE DE ENTRADA
$precioProducto = [
    "rosalia" => 46.00,
    "cuarzo" => 44.00,
    "brillantes" => 47.00,
    "aretes estandar" => 47.00,
    "aretes brillantes" => 52.00
];

$productoSeleccionado = "cuarzo";
$gramos = 30;

// FASE DE PROCESO (Todos los cálculos matemáticos agrupados antes del IF)
$precioGramo = $precioProducto[$productoSeleccionado];
$totalSoles = $gramos * $precioGramo;
$totalDolares = $totalSoles / 3.40;
$totalEuros = $totalSoles / 4.20;

// FASE DE SALIDA (En PHP usamos el punto '.' para concatenar)
if ($gramos < 20) {
    echo "No procede la venta o cotización. El mínimo permitido es de 20 gramos." . "<br>";
} else {
    echo "¡Cotización realizada con éxito!" . "<br>";
    echo "---------------------------------------" . "<br>";
    echo "Producto seleccionado: " . $productoSeleccionado . "<br>";
    echo "Total en Soles: S/. " . number_format($totalSoles, 2) .  "<br>";
    echo "Total en Dólares: $ " . number_format($totalDolares, 2) . "<br>";
    echo "Total en Euros: € " . number_format($totalEuros, 2) . "<br>";
    echo "---------------------------------------" . "<br>";
}
