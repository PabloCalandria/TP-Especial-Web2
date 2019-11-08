<form action="agregarProduct" method="post" class="table-bordered table-dark">
  <h1 class="text-center tituloTabla"> Agregar una cerveza </h1>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="text" class="form-control" name="nombre_cerveza" placeholder="Cerveza">
  </div>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="number" class="form-control" name="cont_alc" placeholder="Contenido alcoholico">
  </div>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="number" class="form-control" name="ibu" placeholder="Ibu">
  </div>
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <input type="number" class="form-control" name="o_g" placeholder="O.G.">
  </div>
  {*input type = file para cargar la imagen y agregar en el form*}
  <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <select  name="cerveza_estilo" class="form-control">
      <option selected disabled hidden>Elija un estilo</option>
        {foreach $Estilos as $info}
            <option value="{$info->id_estilo}">{$info->nombre}</option>
        {/foreach}
    </select>
  </div>
  <div class="text-center col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
    <button type="submit" class=" text-center btn btn-primary">Agregar Cerveza</button>
  </div>
</form>

