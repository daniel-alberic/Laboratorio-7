<?php
// DECLARAMOS EL ARREGLO DE PRECIOS CON LOS 14 PRODUCTOS
$precios = [
    "Mouse" => 30.00,
    "Teclado" => 55.00,
    "Monitor" => 650.00,
    "Micrófono" => 300.00,
    "Disco Sólido 1TB" => 1000.00,
    "Memoria RAM 32GB" => 1200.00,
    "Luz LED" => 85.00,
    "PAD" => 8.50,
    "Tarjeta de Video NVIDIA Geforce RTX" => 1250.00,
    "Cámara Web Logitech C920" => 550.00,
    "Laptop Asus i7 11va G" => 6850.00,
    "Laptop HP i7 11va G" => 7200.00,
    "Audífono" => 65.00,
    "Parlantes" => 120.00
];

// DATOS DE ENTRADA
$cliente = "Sebastian";
$producto = "Mouse"; 
$cantidad = 3;

// OBTENEMOS EL PRECIO UNITARIO DESDE EL ARREGLO
$precioUnitario = $precios[$producto];

// REALIZAMOS EL CÁLCULO DEL MONTO DE VENTA (SUBTOTAL)
$montoVenta = $precioUnitario * $cantidad;

// DETERMINAMOS EL PORCENTAJE DE DESCUENTO
if ($montoVenta < 400) {
    $porcentajeDescuento = 0.04;
} elseif ($montoVenta <= 700) {
    $porcentajeDescuento = 0.07;
} elseif ($montoVenta <= 1000) {
    $porcentajeDescuento = 0.10;
} elseif ($montoVenta <= 1400) {
    $porcentajeDescuento = 0.14;
} else {
    $porcentajeDescuento = 0.18;
}

// CALCULAMOS EL MONTO DE DESCUENTO Y SUBTOTAL CON DESCUENTO
$montoDescuento = $montoVenta * $porcentajeDescuento;
$subtotalConDescuento = $montoVenta - $montoDescuento;

// CALCULAMOS EL IGV (18%)
$tasaIGV = 0.18;
$montoIGV = $subtotalConDescuento * $tasaIGV;

// CALCULAMOS EL MONTO NETO A PAGAR
$montoNeto = $subtotalConDescuento + $montoIGV;

// FASE DE SALIDA: IMPRIMIMOS TODO
echo ":::::::: DETALLE DE VENTA: TIENDA DE TECNOLOGÍA ::::::::" . "<br>";
echo "--------------------------------------------------------" . "<br>";
echo "Nombre del cliente: " . $cliente . "<br>";
echo "Producto seleccionado: " . $producto . "<br>";
echo "Cantidad: " . $cantidad . "<br>";
echo "Precio unitario: S/ " . number_format($precioUnitario, 2) . "<br>";
echo "--------------------------------------------------------" . "<br>";
echo "Subtotal a pagar: S/ " . number_format($montoVenta, 2) . "<br>";
echo "Descuento aplicado: S/ " . number_format($montoDescuento, 2) . "<br>";
echo "Subtotal con descuento: S/ " . number_format($subtotalConDescuento, 2) . "<br>";
echo "IGV (18%): S/ " . number_format($montoIGV, 2) . "<br>";
echo "Monto neto a pagar: S/ " . number_format($montoNeto, 2) . "<br>";
echo "--------------------------------------------------------" . "<br>";

?> 