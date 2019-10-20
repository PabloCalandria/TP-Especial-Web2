"use strict";

function cargarPagina() {

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

document.addEventListener("DOMContentLoaded", cargarPagina);