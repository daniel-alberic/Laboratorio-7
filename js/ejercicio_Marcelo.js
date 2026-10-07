//======================================//
//APLICACION DE ENTRADAS DE CINE//
//======================================//
let DiaSemanal = prompt("Que dia irá al cine").toLowerCase(); //Lunes
let EntradasCompradas = +prompt("Cuantas entradas general compra"); //4
let EntradasCompradasNinos = +prompt("Cuantas entradas de ninos compra?"); //2

let PrecioGeneral = 9;
let PrecioGeneral1 = 7;
let PrecioGeneral2 = 10;
let PrecioGeneral3 = 12;

let PrecioNinos = 7;
let PrecioNinos1 = 7;
let PrecioNinos2 = 8;
let PrecioNinos3 = 9;

let Dia = "Lunes";
let Dia1 = "Martes";
let Dia2 = "Miercoles a Viernes";
let Dia3 = "Sábado y Domingo";

if (Dia === "Lunes"){
    PrecioGeneral = 9;
    PrecioNinos = 7;
}if (Dia === "Martes"){
    PrecioGeneral = 7;
    PrecioNinos = 7;
}if (Dia === "Miercoles" || Dia === "Jueves" || Dia === "Viernes"){
    PrecioGeneral = 10;
    PrecioNinos = 8;
}if (Dia === "Sabado" && Dia === "Sabado"){
    PrecioGeneral = 12;
    PrecioNinos = 9;
}
                   //36//                                 //14//
let SubTotal = (EntradasCompradas*PrecioGeneral) + (EntradasCompradasNinos*PrecioNinos) //50//
let igv = SubTotal * 0.18; //9//
let Total = SubTotal * igv; //450//

console.log("Dia que ira al cine: " ,DiaSemanal);
console.log("Entradas compradas en general: " ,EntradasCompradas);
console.log("Entradas compradas en ninos: " ,EntradasCompradasNinos);
console.log("El SubTotal: " ,SubTotal);
console.log("El igv total: " ,igv);
console.log("El Total: " ,Total);



