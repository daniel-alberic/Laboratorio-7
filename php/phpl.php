<?php
//Registro del comprador
$nombreComprador = prompt("Ingrese su nombre:");
$SeleccionProducto = prompt("Escriba el producto que desea comprar");
$peso = parseFloat(prompt("Ingrese el peso del producto en kg:"));
$metodoPago = prompt("Ingrese su moneda local: "); 
$pesoMinimo = 5;
$pesoMaximo = 10;   

//valores fundamentales
$producto = [
    "Arroz" => 3.80,
    "Azucár" => 3.40,
    "Papas" => 3.20,
    "Menestras" => 4.50,
    "Fideos" => 3.20,
    "Camote" => 4.60,
    "Aceituna" => 5.80,
    "Mandarina" => 3.90,
    "Manzana" => 4.20,
    "Uva" => 5.40,
];

$Dolar = 0.29;
$soles = producto[SeleccionProducto] / Dolar;
$montoPago = producto[SeleccionProducto] * metodoPago * peso;

echo "compra de abarrotes". "<br>";
echo "Comprador: ". nombreComprador. "<br>";
echo "Producto seleccionado: ". SeleccionProducto. "<br>";
echo "Peso del producto: ". peso. "kg". "<br>";
echo "Metodo de pago: ". metodoPago. "<br>";
echo "Monto a pagar: ". montoPago. "<br>";
echo "gracias por su compra, vuelva pronto". "<br>";
?>