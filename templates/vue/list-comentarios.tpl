{literal}
    
    <div class ="vue-comentarios">
        <h3> {{ subtitle }} </h3>
        <ul>
            <li v-for="comment in comments">
                <span> {{ comment.texto }} - {{comment.puntaje}} </span>
                <span><button v-on:click="del(comment.id_comentario)"  :data-id="comment.id_comentario" class="btn-eliminar">eliminar</button></span>
            </li>
        </ul>
    </div>

{/literal}