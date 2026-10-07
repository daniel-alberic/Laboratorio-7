<?php
<<<<<<< HEAD
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
=======
//valores fundamentales
$producto = [ 
    "Arroz" => 3.80,
    "Azucar" => 3.40,
>>>>>>> ec866b097aee99185cb3c9964960ee51b2a48b21
    "Papas" => 3.20,
    "Menestras" => 4.50,
    "Fideos" => 3.20,
    "Camote" => 4.60,
    "Aceituna" => 5.80,
    "Mandarina" => 3.90,
    "Manzana" => 4.20,
<<<<<<< HEAD
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
=======
    "Uva" => 5.40
];

//Registro del comprador
$nombreComprador = "mario";
$articulo = "Uva";
$pesoCompra = 7;
$productoS = $producto[$articulo];

//moneda
$Dolar = 0.29;
$sol = $productoS / $Dolar;

//Moneda de compra
$Dolar = 0.29;
$soles = $productoS / $Dolar;
$metodoPago = "soles"; 

//Pesos permitidos
$pesoMinimo = 5;
$pesoMaximo = 10;   

//Calculamos el IGV
$tasaIGV =0.18;

//precio por puducto
$precioNoigv = $productoS * $pesoCompra * $sol; 
$montoIGV = $precioNoigv * $tasaIGV;

//Condiciones
if ($pesoCompra < $pesoMinimo && $pesoCompra > $pesoMaximo) {
    echo "Lo sentimos, su compra no se puede realizar";
    echo "Ingrese un peso mayor a 5 y menor que 10";
}else{
    echo "Se evaluara su compra en un segundo...";
}

//fase de salida Imprimimos
echo "Gracias por preferirnos :)". "<br>";
echo "Registro del comprador...". "<br>";
echo "nombre :". $nombreComprador. "<br>";
echo "Productoseleccionado :". $articulo. "<br>";
echo "Cantidad en kilos :". $pesoCompra. "<br>";
echo "Metodo de pago :". $metodoPago. "<br>";
echo "IGV :". $montoIGV. "<br>";
echo "Monto a pagar :". $precioNoigv. "<br>";
echo "Gracias por comprar aqui, vuelva pronto". "<br>";
>>>>>>> ec866b097aee99185cb3c9964960ee51b2a48b21
?>