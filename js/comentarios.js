"use strict";

function cargarPagina() {

    document.querySelector(".form-comentario").addEventListener('submit', addComentario);

    let app = new Vue({
        el: ".vue-comentarios",
        data: {
            subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
            comments: [], 
            auth: true
        },

    methods: {
        del: function (id_comentario) {
          fetch('api/comentarios/' + id_comentario, {
              method: 'DELETE',
           })
           .then(response => {
                getComentarios();
           })
           .catch(error => console.log(error));
         }
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
            getComentarios();
        })
        .catch(error => console.log(error));
    }

    function getComentarios() {
        let $id = window.location.pathname.split('/')[4];                
        fetch('api/comentarios/' + $id) //comentarios/:ID
        .then(response => response.json())
        .then(comments => {
            app.comments = comments; // similar a $this->smarty->assign("tasks", $tasks)
        })
        .catch(error => console.log(error));
    }

    getComentarios();

}

document.addEventListener("DOMContentLoaded", cargarPagina);
