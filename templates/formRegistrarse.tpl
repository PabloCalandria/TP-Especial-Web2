
{include file="templates/header.tpl"}

<form action="agregarUser" method="POST" class="table-bordered table-dark">
  <h1 class="text-center tituloTabla"> Complete el formulario para registrarse: </h1>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="mail" class="form-control" name="newUser" placeholder="usuario">
  </div>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="password" class="form-control" name="newPass" placeholder="password">
  </div>
  <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <button type="submit" class="btn btn-primary">Aceptar</button>
  </div>
</form>

{include file="templates/footer.tpl"}