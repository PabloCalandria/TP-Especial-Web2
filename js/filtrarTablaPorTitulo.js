"use strict";

function cargarPagina() {
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

document.addEventListener("DOMContentLoaded", cargarPagina);