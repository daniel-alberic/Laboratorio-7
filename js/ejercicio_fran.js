let clave = "1234";
let dineroSoles = 1000;
let dineroDolares = 500;

let claveCajero = prompt("Ingrese su clave");

if (claveCajero != clave){
    console.log("Clave incorrecto :(.");   
}else{

console.log(":::::::::SALDOS:::::::::");
console.log("Soles: " + dineroSoles);
console.log("Dolares: " + dineroDolares);  

let deposito = +prompt("Monto a depositar en soles:");
dineroSoles = dineroSoles + deposito;
console.log("Nuevo saldo Soles: " + dineroSoles);

let depositoDolares = +prompt("Monto a depositar en dolares:");
dineroDolares = dineroDolares + depositoDolares;
console.log("Nuevo saldo Dolares:" +dineroDolares);
}