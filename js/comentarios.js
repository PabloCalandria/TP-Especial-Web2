"use strict"

function cargarPagina() {

    document.querySelector(".form-comentario").addEventListener('submit', addComentario);

    let app = new Vue({
        el: ".vue-comentarios",
        data: {
            subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
            tasks: [], 
            //auth: true
        }
    });
    
    function addComentario(e) {
        e.preventDefault();

        let data = {
            "id_cerveza" :  window.location.pathname.split('/')[4],
            "texto" :  document.querySelector('textarea[name=text-comentario]').value ,
            "puntaje" :  document.querySelector('select[name=puntaje-comentario]').value ,
        }
        

        fetch('api/comentarios', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data),
        })
        .then(response => {
            getComentario();
        })
        .catch(error => console.log(error));
    }

    function getComentario() {
        let $id = window.location.pathname.split('/')[4];
        fetch('api/comentarios' + '/' + $id) //comentarios/:ID
        .then(response => response.json())
        .then(tasks => {
            app.tasks = tasks; // similar a $this->smarty->assign("tasks", $tasks)
        })
        .catch(error => console.log(error));
    }

    getComentario();

}

document.addEventListener("DOMContentLoaded", cargarPagina);
