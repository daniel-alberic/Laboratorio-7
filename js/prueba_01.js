// FASE DE ENTRADA
const precioProducto = {
    "rosalia" : 46.00,
    "cuarzo" : 44.00,
    "brillantes" : 47.00,
    "aretes estadar" : 47.00,
    "aretes brillantes" : 52.00
};


let productoSeleccionado = "cuarzo";
let gramo = 30;

// FASE DE PROCESO
let precioGramo = precioProducto[productoSeleccionado];
let totalSoles = gramo * precioGramo;
let totalDolares = totalSoles / 3.40;
let totalEuros = totalSoles / 4.20;



if (gramos < 20) {
    console.log("No procede la venta o cotización. El minimo permitido es de 20g");
} else {
    console.log("¡Cotización realizada con éxito!");
    console.log("¡------------------------------------------");
    console.log("Producto seleccionado: ", productoSeleccionado);
    console.log("Total en Soles: S/.", totalSoles.toFixed(2));
    console.log("Total en Dolares: $", totalDolares.toFixed(2));
    console.log("Total en Euros: €", totalEuros.toFixed(2));
    console.log("--------------------------------------------");
}