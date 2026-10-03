<?php
//valores fundamentales
$producto = [ 
    "Arroz" => 3.80,
    "Azucar" => 3.40,
    "Papas" => 3.20,
    "Menestras" => 4.50,
    "Fideos" => 3.20,
    "Camote" => 4.60,
    "Aceituna" => 5.80,
    "Mandarina" => 3.90,
    "Manzana" => 4.20,
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
?>