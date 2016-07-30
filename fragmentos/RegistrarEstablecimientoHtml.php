
<div >
    <div class="contact-form bottom">

    <form method="post"  action="includes/RegistrarEstablecimiento.php">
            <div class="form-group"><input type="text" name="nombre" placeholder="Nombre Establecimiento"  class="form-control"  required  /></div>
            <div class="form-group"><input type="text" name="descripcion" placeholder="Descripcion Establecimiento"  class="form-control"  required /></div>
            <div class="form-group"><input type="text" name="direccion" class="form-control"  placeholder="Direccion Establecimiento" /></div>
            <div class="form-group"><input readonly="readonly" name="longitud"  type="text" id="lng" placeholder="Longitud" class="form-control" /></div>
            <div class="form-group"><input readonly="readonly"  name="latitud" type="text" id="lat" placeholder="Latitud" class="form-control" /></div>
            <input type="submit" class="btn btn-submit" value="Registrame"/>
        </form>
    </div>
</div>