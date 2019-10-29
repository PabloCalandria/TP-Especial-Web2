<form action="agregarProduct" method="post" class="table-bordered table-dark">
  <div class="form-group">
    <input type="text" class="form-control" name="nombre_cerveza" id="exampleInputEmail1" placeholder="cerveza">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="cont_alc" id="exampleInputEmail1" placeholder="contenido alcoholico">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="ibu" id="exampleInputEmail1" placeholder="ibu">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="o_g" id="exampleInputEmail1" placeholder="O.G.">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="cerveza_estilo" id="exampleInputEmail1" placeholder="estilo">
  </div>
  <select>
      {foreach $Producto as $info}
          <opcion>{$info->nombre_cerveza}</opcion>
      {/foreach}
  </select>
  <button type="submit" class="btn btn-primary">Agregar Cerveza</button>
</form>

