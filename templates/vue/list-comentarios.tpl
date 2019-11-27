{literal}
    
    <div class ="vue-comentarios">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-3 col-lg-9">
                    <ul>
                        <li class="li-comment" v-for="comment in comments">
                            <span class="span-texto"> {{ comment.texto }} - </span>
                            <span class="span-puntaje"> {{comment.puntaje}} </span>
                            <span><a v-on:click="del(comment.id_comentario)"  :data-id="comment.id_comentario" class="btn-eliminar"><i class="fas fa-trash-alt"></i></a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{/literal}