//Registro del comprador
let nombreComprador = prompt("Ingrese su nombre:");
let SeleccionProducto = prompt("Escriba el producto que desea comprar");
let peso = parseFloat(prompt("Ingrese el peso del producto en kg:"));
let metodoPago = prompt("Ingrese su moneda local: "); 
let pesoMinimo = 5;
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
let soles = producto[SeleccionProducto] / Dolar;
let montoPago = producto[SeleccionProducto] * metodoPago * peso;

console.log("compra de abarrotes");
console.log("Comprador: ", nombreComprador);
console.log("Producto seleccionado: ", SeleccionProducto);
console.log("Peso del producto: ", peso, "kg");
console.log("Metodo de pago: ", metodoPago);
console.log("Monto a pagar: ", montoPago);
console.log("gracias por su compra, vuelva pronto");
