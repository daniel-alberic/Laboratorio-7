//Registro del comprador
let nombreComprador = prompt("Ingrese su nombre:");
let SeleccionProducto = prompt("Escriba el producto que desea comprar");
let pesoMinimo = parseFloat(prompt("Ingrese el peso del producto en kg:"));
let metodoPago = prompt("Ingrese su moneda local: "); 
let pesoMaximo = 10;   

//valores fundamentales
let producto = {
    "Arroz" : 3.80,
    "Azucár" : 3.40,
    "Papas" : 3.20,
    "Menestras" : 4.50,
    "Fideos" : 3.20,
    "Camote" : 4.60,
    "Aceituna" : 5.80,
    "Mandarina" : 3.90,
    "Manzana" : 4.20,
    "Uva" : 5.40,
};
let Dolar = 0.29;
let kilosPermitidos = 5;
let soles = producto[SeleccionProducto] / Dolar;

if (metodoPago == "Soles"){
    console.log("El precio del producto en soles es: ", producto[SeleccionProducto]);
}


//Calcular el monto de descuento 
$montoDescuento = $montoVenta * $porcentajeDescuento;

//Calculamos el monto neto a pagar 
$montoNeto = $montoVenta - $montoDescuento;

//Calculamos el IGV
$tasaIGV =0.18;
$montoIGV = $montoVenta * $tasaIGV;
//fase de salida :Imprimimos

if (peso <= kilosPermitidos){
    console.log("Las compras solo pueden ser mayores a 5 kg.");
}
else if (peso > pesoMaximo){
    console.log("El peso del producto está fuera del rango permitido.");
}
else  (jk);
