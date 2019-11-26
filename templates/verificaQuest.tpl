
{include file="templates/header.tpl"}

<div class="container-fluid">
    <article class="row bg-secondary">
        <div class="bg-dark col-sm-8 offset-sm-1 col-lg-10 offset-lg-1 py-5">
            <form action="verificarPregunta" method="POST" class="col-md-4 offset-md-4 mt-4">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="NewUsuario" class="form-control" placeholder="Ingrese usuario">
                </div>
                <div class="form-group">
                    <label>Nueva contraseña</label>
                    <input type="password" name="NewContraseña"  class="form-control" placeholder="Ingrese contraseña">
                </div>
                <div class="form-group">
                    <label>Nombre de primer mascota</label>
                    <input type="password" name="preguntaSecreta" class="form-control" placeholder="Ingrese respuesta">
                </div>
                <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <button type="submit" class="btn btn-primary col-12"> Aceptar </button>
                </div>
            </form>
        </div>
    </article>
</div>    

{include file="templates/footer.tpl"}