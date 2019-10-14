"use strict";
function cargaPartialRender() {

    //MODIFICA TABLAS
    function cargaTablas() {

        async function levantaInformacionTabla() { // trae todo el arreglo del servidor y lo retorna en json.tpespecial
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial";
            try {
                let r = await fetch(url, {
                    "method": "GET",
                    "mode": "cors",
                });
                let json = await r.json();
                return json.tpespecial;
            }
            catch (e) {
                console.log("Fallo en levantar informacion");
            }
        }

        async function actulizaFila(id) {
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial/" + id;
            let nuevoProducto = { // define el nuevo porducto
                "thing": {
                    "estilos": nodoEstilo.value,
                    "contAlc": nodoCont.value,
                    "ibu": nodoIbu.value,
                    "og": nodoOG.value,
                }
            };
            try {
                let r = await fetch(url, {
                    "method": "PUT",
                    "headers": { "Content-Type": "application/json" },
                    "body": JSON.stringify(nuevoProducto),
                });
                levantaTabla(); // reestablece la tabla del html con el producto modificado
            }
            catch (e) {
                console.log("Fallo la actulizacion de informacion");
            }
        }

        async function borraFila(id) { //borra todos los productos de la lista
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial/" + id;
            try {
                let r = await fetch(url, {
                    "method": "DELETE",
                });
                levantaTabla(); // reestablece la tabla del html con el producto modificado
            }
            catch (e) {
                console.log("Fallo el borrado de informacion");
            }
        }

        function insertarFila(producto) { // inserta el producto en la tabla
            let cantidad = 15;
            if (cantidad >= parseFloat(producto.ibu)) {
                document.querySelector("tbody").innerHTML = document.querySelector("tbody").innerHTML + "<tr class='estiloTabla'><td>" + producto.estilos + "</td>" + "<td>" + producto.contAlc + "</td>" + "<td>" + producto.ibu + "</td>" + "<td>" + producto.og + "<td class=btnEdita></td>" + "<td class=btnBorra></td></tr>"; //agrega el bojeto a la lista del DOM
            } else {
                document.querySelector("tbody").innerHTML = document.querySelector("tbody").innerHTML + "<tr class='bg-danger estiloTabla'><td>" + producto.estilos + "</td>" + "<td>" + producto.contAlc + "</td>" + "<td>" + producto.ibu + "</td>" + "<td>" + producto.og + "<td class=btnEdita></td>" + "<td class=btnBorra></td></tr>"; //agrega el bojeto a la lista del DOM    
            }
        }

        async function cargarBotones() { // carga los botones en la tabla 
            let btnEditar = document.querySelectorAll(".btnEdita");
            let btnBorrar = document.querySelectorAll(".btnBorra");
            let jsonInfo = await levantaInformacionTabla(); // se trae todo el arreglo del servidor
            for (let i = 0; i < jsonInfo.length; i++) {
                let id = jsonInfo[i]._id; // se posiciona en el id a modificar
                let botonBorrar = document.createElement("button");
                botonBorrar.innerText = "Borrar ";
                let botonEditar = document.createElement("button"); // crea un elemento de tipo boton
                botonEditar.innerText = "Editar ";
                btnBorrar[i].appendChild(botonBorrar); // agrega el boton en la tabla
                btnEditar[i].appendChild(botonEditar);
                btnBorrar[i].addEventListener("click", function () { borraFila(id) });
                btnEditar[i].addEventListener("click", function () { actulizaFila(id) });
            }
        }

        async function levantaTabla() { // levanta toda la tabla en el html
            if (document.querySelector(".estiloTabla"))
                document.querySelectorAll(".estiloTabla").forEach(e => e.parentNode.removeChild(e));
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial";
            try {
                let r = await fetch(url, {
                    "method": "GET",
                    "mode": "cors",
                });
                let json = await r.json();
                for (let dato of json.tpespecial) {
                    insertarFila(dato.thing);
                }
                cargarBotones();
            }
            catch (e) {
                console.log("Fallo en levantar la tabla");
            }
        }

        async function agregaUnoBis() {
            await agregaUno();
            levantaTabla(); // reestablece la tabla del html con el producto modificado
        }

        async function agregaUno() {
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial";
            let producto = {
                "thing": {
                    "estilos": nodoEstilo.value,
                    "contAlc": nodoCont.value,
                    "ibu": nodoIbu.value,
                    "og": nodoOG.value,
                }
            };
            try {
                let r = await fetch(url, {
                    "method": "POST",
                    "headers": { "Content-Type": "application/json" },
                    "body": JSON.stringify(producto),
                });
                let cantidad = 15;
                if (cantidad >= parseFloat(producto.thing.ibu))
                    document.querySelector("tbody").innerHTML = document.querySelector("tbody").innerHTML + "<tr class='estiloTabla'><td>" + nodoEstilo.value + "</td>" + "<td>" + nodoCont.value + "</td>" + "<td>" + nodoIbu.value + "</td>" + "<td>" + nodoOG.value + "<td class=btnEdita></td>" + "<td class=btnBorra></td></tr>"; //agrega el bojeto a la lista del DOM
                else
                    document.querySelector("tbody").innerHTML = document.querySelector("tbody").innerHTML + "<tr class='bg-danger estiloTabla'><td>" + nodoEstilo.value + "</td>" + "<td>" + nodoCont.value + "</td>" + "<td>" + nodoIbu.value + "</td>" + "<td>" + nodoOG.value + "<td class=btnEdita></td>" + "<td class=btnBorra></td></tr>"; //agrega el bojeto a la lista del DOM
            }
            catch (e) {
                console.log("Fallo en cargar datos");
            }
        }

        async function agregaTres() {
            for (let i = 0; i < 3; i++) {
                await agregaUno();
            }
            levantaTabla(); // reestablece la tabla del html con el producto modificado
        }

        async function eliminaServidor(id) { //borra todos los productos del servidor
            let url = "http://web-unicen.herokuapp.com/api/groups/14/tpespecial/" + id;
            try {
                let r = await fetch(url, {
                    "method": "DELETE",
                });
            }
            catch (e) {
                console.log("Fallo el borrado de informacion");
            }
        }

        async function borraTodo() {
            let jsonInfo = await levantaInformacionTabla(); // se trae todo el arreglo del servidor
            let nodoLista = document.querySelectorAll(".estiloTabla");
            let id;
            try {
                for (let i = 0; i < jsonInfo.length; i++) {
                    id = jsonInfo[i]._id;
                    eliminaServidor(id);
                    nodoLista[i].remove();
                }
            }
            catch (e) {
                console.log("Error");
            }
        }

        function mantieneActualizado() {
            actualizando = !actualizando;
            if (!actualizando) {
                document.querySelector("#btnSincroniza").classList.remove("bg-dark");
                document.querySelector("#btnSincroniza").classList.remove("btn-secondary");
                document.querySelector("#btnSincroniza").classList.add("bg-white");
            }
            else {
                document.querySelector("#btnSincroniza").classList.add("bg-dark");
                document.querySelector("#btnSincroniza").classList.add("btn-secondary");
                document.querySelector("#btnSincroniza").classList.remove("bg-white");
            }
            let actualizar = setInterval(function () {
                if (!actualizando) {
                    levantaTabla();
                }
                else {
                    clearInterval(actualizar);
                }
            }, 10000);
        }


        levantaTabla();

        let actualizando = true;
        document.querySelector("#btnSincroniza").addEventListener("click", mantieneActualizado);
        let nodoAgregaUno = document.querySelector("#btnAgregaUno"); //boton agregar de a uno
        nodoAgregaUno.addEventListener("click", agregaUnoBis);

        let nodoAgregaTres = document.querySelector("#btnAgregaTres"); //boton agregar de a tres
        nodoAgregaTres.addEventListener("click", agregaTres);

        let nodoBorrarTodo = document.querySelector("#btnBorraTodo");
        nodoBorrarTodo.addEventListener("click", borraTodo);

        let nodoEstilo = document.querySelector("#inputEstilo"); // trae valor Estilo escrito
        let nodoCont = document.querySelector("#inputCont"); // trae valor Contenido alcoholico escrito
        let nodoIbu = document.querySelector("#inputIbu"); // trae valor Ibu escrito
        let nodoOG = document.querySelector("#inputOG"); // trae el valor OG
    }

    //FILTRAR TABLA

    function cargaFiltrarTabla() {
        function filtraTabla() {
            restableceTabla();
            let nodoTabla = document.querySelectorAll(".estiloTabla");
            let cantidad = nodoTabla.length;
            for (let i = 0; i < cantidad; i++) {
                let valor = nodoTabla[i].getElementsByTagName("td")[0];
                let textoIngresado = inputTabla.value;
                textoIngresado = new RegExp("^(" + textoIngresado + ")*");
                let valorEnTabla = valor.innerHTML;
                let encontro = valorEnTabla.match(textoIngresado);
                if (encontro[0] == "") {
                    let tr = nodoTabla[i];
                    tr.classList.add("filaOculta");
                }
            }
            if (inputTabla.value == "")
                restableceTabla();
        }

        function restableceTabla() {
            let nodoTabla = document.querySelectorAll(".estiloTabla");
            let cantidad = nodoTabla.length;
            for (let i = 0; i < cantidad; i++) {
                let tr = nodoTabla[i];
                tr.classList.remove("filaOculta");
            }
        }

        let nodoFiltrar = document.querySelector("#inputTabla");
        nodoFiltrar.addEventListener("input", filtraTabla);
    }

    // VALIDACIONES
    function cargaValidaciones() {

        function verificarFormularioNombre(nombre) {
            if (!nombreValido(nombre.value)) {
                alert('El nombre ingresado no es válido');
                nombre.focus();
                return;
            }
        }

        function nombreValido(nombre) {
            let re = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
            return re.test(nombre);
        }

        function verificarFormularioTelefono(telefono) {
            if (!telefonoValido(telefono.value)) {
                alert('El telefono ingresado no es válido');
                telefono.focus();
                return;
            }
        }

        function telefonoValido(telefono) {
            let re = /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/;
            return re.test(telefono);
        }


        function verificarFormularioMail(mail) {
            if (!emailValido(mail.value)) {
                alert('Debe ingresar un email válido');
                mail.focus();
                return;
            }
        }

        function emailValido(mail) {
            let re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return re.test(mail);
        }

        let nodoInputNombre = document.getElementById("exampleInputNombre");
        nodoInputNombre.addEventListener("change", function (e) { verificarFormularioNombre(nodoInputNombre) });

        let nodoInputTelefono = document.getElementById("exampleInputTelefono");
        nodoInputTelefono.addEventListener("change", function (e) { verificarFormularioTelefono(nodoInputTelefono) });

        let nodoInputMail = document.getElementById("exampleInputEmail");
        nodoInputMail.addEventListener("change", function (e) { verificarFormularioMail(nodoInputMail) });

    }


    //CAPTCHA
    function cargaCaptcha() {
        function randomValores() {
            valor1 = Math.floor((Math.random() * 9) + 1);
            valor2 = Math.floor((Math.random() * 9) + 1);
            operacion = Math.floor((Math.random() * 2) + 1);
            document.querySelector("#imagenCaptcha1").src = "images/captcha/captcha" + valor1 + ".jpg";
            document.querySelector("#imagenCaptcha2").src = "images/captcha/operacion" + operacion + ".jpg";
            document.querySelector("#imagenCaptcha3").src = "images/captcha/captcha" + valor2 + ".jpg";
            if (operacion == 1) {
                resultado = valor1 + valor2;
            }
            else {
                resultado = valor1 - valor2;
            }
        }

        function comparaResultadoCaptcha() {
            if (resultado != nodoInputCaptcha.value) {
                alert('El captcha ingresado es incorrecto');
                nodoBotonEnviarFormulario.classList.add("deshabilitado");
                return;
            }
            else
                nodoBotonEnviarFormulario.classList.remove("deshabilitado");
        }

        let valor1, valor2, operacion, resultado;
        let nodoBotonEnviarCaptcha = document.querySelector("#btnActualizarCaptcha");
        nodoBotonEnviarCaptcha.addEventListener("click", randomValores);
        let nodoInputCaptcha = document.querySelector("#resultadoCaptcha");
        let nodoBotonEnviarFormulario = document.querySelector("#btnContacto");
        nodoInputCaptcha.addEventListener("change", function (e) { comparaResultadoCaptcha() });
        randomValores();
    }


    //PARTIAL RENDER
    async function loadIndex() {
        let container = document.querySelector("#use-ajax");
        container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Loading...</h1></div>";
        try {
            let response = await fetch("pages/home.html");
            if (response.ok) {
                let t = await response.text()
                container.innerHTML = t;
            }
            else
                container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Error - Failed URL!</h1></div>";
        }
        catch (response) {
            container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Connection error</h1></div>";
        };
    }

    async function loadContactUs(event) {
        event.preventDefault();
        let url = event.target.href;
        let container = document.querySelector("#use-ajax");
        container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Loading...</h1></div>";
        try {
            let response = await fetch(url);
            if (response.ok) {
                let t = await response.text()
                container.innerHTML = t;
                cargaValidaciones();
                cargaCaptcha();
            }
            else
                container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Error - Failed URL!</h1></div>";
        }
        catch (response) {
            container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Connection error</h1></div>";
        };
    }

    async function loadProducts(event) {
        event.preventDefault();
        let url = event.target.href;
        let container = document.querySelector("#use-ajax");
        container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Loading...</h1></div>";
        try {
            let response = await fetch(url);
            if (response.ok) {
                let t = await response.text()
                container.innerHTML = t;
                cargaFiltrarTabla();
                cargaTablas();
            }
            else
                container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Error - Failed URL!</h1></div>";
        }
        catch (response) {
            container.innerHTML = "<div class='container-fluid bg-secondary loading'><h1>Connection error</h1></div>";
        };
    }

    document.querySelector("#indexPartial").addEventListener("click", loadIndex);
    document.querySelector("#contactPartial").addEventListener("click", loadContactUs);
    document.querySelector("#productsPartial").addEventListener("click", loadProducts);

    loadIndex();

}
document.addEventListener("DOMContentLoaded", cargaPartialRender);