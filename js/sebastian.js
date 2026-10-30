const precios = [
  { nombre: "Mouse", precio: 30.00 },
  { nombre: "Teclado", precio: 55.00 },
  { nombre: "Monitor", precio: 650.00 },
  { nombre: "Micrófono", precio: 300.00 },
  { nombre: "Disco Sólido 1TB", precio: 1000.00 },
  { nombre: "Memoria RAM 32GB", precio: 1200.00 },
  { nombre: "Luz LED", precio: 85.00 },
  { nombre: "PAD", precio: 8.50 },
  { nombre: "Tarjeta de Video NVIDIA", precio: 1250.00 },
  { nombre: "Cámara Web Logitech C920", precio: 550.00 },
  { nombre: "Laptop Asus i7 11va G", precio: 6850.00 },
  { nombre: "Laptop HP i7 11va G", precio: 7200.00 },
  { nombre: "Audífono", precio: 65.00 },
  { nombre: "Parlantes", precio: 120.00 }
];

// 2. Datos de entrada
let nombreCliente = "Sebastian";
let opcionProducto = 1; 
let cantidad = 3; 

// 3. Obtener el producto elegido y calcular el subtotal
let productoSeleccionado = precios[opcionProducto - 1];
let subtotal = productoSeleccionado.precio * cantidad;

// 4. Determinar el porcentaje de descuento según el subtotal
let porcentajeDescuento = 0;

if (subtotal < 400) {
    porcentajeDescuento = 0.04;
} else if (subtotal >= 400 && subtotal <= 700) {
    porcentajeDescuento = 0.07;
} else if (subtotal >= 701 && subtotal <= 1000) {
    porcentajeDescuento = 0.10;
} else if (subtotal >= 1001 && subtotal <= 1400) {
    porcentajeDescuento = 0.14;
} else if (subtotal > 1400) {
    porcentajeDescuento = 0.18;
}

// 5. Cálculos de montos
let montoDescuento = subtotal * porcentajeDescuento;
let subtotalConDescuento = subtotal - montoDescuento;
let igv = subtotalConDescuento * 0.18;
let totalNeto = subtotalConDescuento + igv;

// 6. Impresión por consola
console.log(":::::: BOLETA DE VENTA ::::::");
console.log("Cliente:", nombreCliente);
console.log("Producto seleccionado:", productoSeleccionado.nombre);
console.log("Cantidad vendida:", cantidad);
console.log("Precio del producto: S/", productoSeleccionado.precio);
console.log("Subtotal a pagar: S/", subtotal);
console.log("Descuento aplicado: S/", montoDescuento);
console.log("Subtotal con descuento: S/", subtotalConDescuento);
console.log("IGV (18%): S/", igv);
console.log("Total Neto a Pagar: S/", totalNeto);
