//  ==VARIABLES GLOBALES==

//Accedemos a al contenido de la tabla
const carrito = document.querySelector('#carrito');
//Accedemos al listado de la tabla del carrito
const contenedorCarrito = document.querySelector('#lista_Carrito tbody');
//Accedemos al boton para limpiar el carrito
const vaciarCarritoBtn = document.querySelector('#vacias_Carrito');
// Accedemos a los productos
const listaProductos = document.querySelector('#listado_Productos');
//Carrito de compras
let articulosCarrito = [];
var deleteItem = document.querySelectorAll(".deleteItem");

var vacias_Carrito = document.querySelector("#limpiar_Carrito");

cargarEventListeners();

function cargarEventListeners() {
    //Agregas un producto cuando presionas "Agregar al carrito"
    if (listaProductos) {
        listaProductos.addEventListener('click', agregarProducto);
    }

    // Comprobacion para eliminar productos del carrito
    if (deleteItem) {

        for (let i = 0; i < deleteItem.length; i++) {
            deleteItem[i].addEventListener('click', deleteProducto);
        }
    }

    if (vacias_Carrito) {
        vacias_Carrito.addEventListener("click", vaciarCarro);
    }

}

// Funcion para vaciar el carro
function vaciarCarro() {
    contenedorCarrito.innerHTML = "";
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            location.reload();
        }
    }
    xmlhttp.open("POST", "/cartVoid.php");
    xmlhttp.send();
}

// Funcion para obtener el precio total
function precioTotal() {
    let precioItem = document.querySelectorAll(".precioItem");
    let totalPago = document.querySelector("#totalPago");

    let total = 0;
    for (let i = 0; i < precioItem.length; i++) {
        let precio = precioItem[i].innerHTML.replace("$", "").trim();
        total += parseFloat(precio);
        console.log(total);
    }

    totalPago.innerHTML = "Total a pagar $" + total;
}

precioTotal();

function deleteProducto() {
    let identificador = this.getAttribute("data");
    let xmlhttp = new XMLHttpRequest();
    let data = new FormData();
    data.append("identificador", identificador);

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log("Item", "Eliminado", identificador);
            location.reload();
        }
    }
    xmlhttp.open("POST", "/cartDelete.php");
    xmlhttp.send(data);
}

// ==FUNCIONES==

function agregarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('btn-cart')) {
        //Accedemos a los contenedores por herencia
        const productoSeleccionado = e.target.parentElement.parentElement.parentElement;
        leerDatosProducto(productoSeleccionado);
        console.log(productoSeleccionado);
    }
}

//Accedemos al contenido del producto y extrae la información
function leerDatosProducto(producto) {
    //Esta variable accede al select para obtener el contenido de los option
    const selectAuxH = producto.querySelectorAll('select')[0];
    const selectAuxM = producto.querySelectorAll('select')[1];
    const selectAuxN = producto.querySelectorAll('select')[2];

    //Objeto con el contenido del producto
    const infoProducto = {
        imagen: producto.querySelector('img').getAttribute("src"),
        titulo: producto.querySelector('h4').textContent,
        precio: producto.querySelector('p').textContent,
        tallaH: selectAuxH.options[selectAuxH.selectedIndex].value,
        tallaM: selectAuxM.options[selectAuxM.selectedIndex].value,
        tallaN: selectAuxN.options[selectAuxN.selectedIndex].value,
        id: producto.querySelector('button').getAttribute('data-id'),
        cantidad: 1
    }

    carritoHTML(infoProducto);
}

// Funcion para aumentar el contenedor del carrito
function numItems() {
    let cart = document.querySelector(".cart span");
    let itemsActual = parseInt(cart.innerHTML);
    cart.innerHTML = (itemsActual + 1);
}

//Muestra el carrito de compras en el HTML
function carritoHTML(infoProducto) {

    if (infoProducto.tallaH == "" && infoProducto.tallaM == "" && infoProducto.tallaN == "") {
        alert("Selecciona una talla");
    } else {

        // Comprobar las tallas para incrementar contenedor de carrito
        if (infoProducto.tallaH != "") { numItems(); }
        if (infoProducto.tallaM != "") { numItems(); }
        if (infoProducto.tallaN != "") { numItems(); }

        let xmlhttp = new XMLHttpRequest();
        let data = new FormData();

        data.append("imagen", infoProducto.imagen);
        data.append("titulo", infoProducto.titulo);
        data.append("precio", infoProducto.precio);
        data.append("tallaH", infoProducto.tallaH + ",Hombre");
        data.append("tallaM", infoProducto.tallaM + ",Mujer");
        data.append("tallaN", infoProducto.tallaN + ",Niño/a");
        data.append("id", infoProducto.id);
        data.append("cantidad", infoProducto.cantidad);
        data.append("numItem", true);

        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                console.log("Envio", xmlhttp.responseText);
            }
        }

        xmlhttp.open("POST", "/cartEnvio.php", true);
        xmlhttp.send(data);

    }
}