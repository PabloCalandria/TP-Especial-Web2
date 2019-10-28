
{include file="templates/header.tpl"}

<form action="agregarUser" method="POST" class="table-bordered table-dark">
  <div class="form-group">
    <input type="mail" class="form-control" name="newUser" placeholder="usuario">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="newPass" placeholder="password">
  </div>
  <button type="submit" class="btn btn-primary">Aceptar</button>
</form>

{include file="templates/footer.tpl"}