"use strict"

document.querySelector(".form-comentario").addEventListener('submit', addComentario);

function addComentario(e) {
    e.preventDefault();
    
    let data = {
        comentario:  document.querySelector("input[name=text-comentario]").value,
        puntaje:  document.querySelector("input[name=puntaje-comentario]").value,
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentario();
     })
     .catch(error => console.log(error));
}

function getComentario() {
    fetch('api/comentarios')
    .then(response => response.json())
    .then(tasks => {
        app.tasks = tasks; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

getComentario();
