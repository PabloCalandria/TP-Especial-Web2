{include 'templates/header.tpl'}

<div class="container-fluid">
    <article class="row bg-secondary">
        <div class="bg-dark col-sm-8 offset-sm-1 col-lg-10 offset-lg-1 py-5">
            <form action="verificarLogin" method="POST" class="col-md-4 offset-md-4 mt-4">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Ingrese usuario">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese contraseña">
                </div>
                <div class = "">
                    <h1>{$Message}</h1>
                </div>
                <button type="submit" class="btn btn-primary"> Login </button>
            </form>
            <form action="registrarse" method="POST" class="col-md-4 offset-md-4 mt-4">
                <button type="submit" class="btn btn-primary"> Registrarse </button>
            </form>
        </div>
    </article>
</div>

{include 'templates/footer.tpl'}
