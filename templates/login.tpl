{include 'templates/header.tpl'}

<div class="container-fluid">
    <article class="row bg-secondary">
        <div class="bg-dark col-sm-8 offset-sm-1 col-lg-10 offset-lg-1 py-5">
            <form action="verificarLogin" method="POST" class="col-md-4 offset-md-4 mt-4">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username"  class="form-control" placeholder="Ingrese usuario">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña">
                </div>
                <div class = "">
                    <label>{$Message}</label>
                </div>
                <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <button type="submit" class="btn btn-primary col-12"> Login </button>
                </div>
            </form>
            <form action="formPregunta" method="POST" class="col-md-4 offset-md-4 mt-4">
                <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <button type="submit" class="btn btn-primary col-12"> Recuperar contraseña </button>
                </div>
            </form>
            <form action="registrarse" method="POST" class="col-md-4 offset-md-4 mt-4">
                <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <button type="submit" class="btn btn-primary col-12"> Registrarse </button>
                </div>
            </form>
        </div>
    </article>
</div>

{include 'templates/footer.tpl'}
