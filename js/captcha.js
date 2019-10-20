"use strict";

function cargarPagina() {

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

document.addEventListener("DOMContentLoaded", cargarPagina);