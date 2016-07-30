<div >
    <div class="contact-form bottom">

    <form method="post"  action="includes/RegistrarUsuario.php">
            <div class="form-group"><input type="text" name="nombres" placeholder="Nombres" minlength="4"  class="form-control"  required  /></div>
            <div class="form-group"><input type="text" name="apellidos" placeholder="Apellidos" minlength="4"  class="form-control"  required /></div>
           <!-- <div class="form-group"><input type="text" name="idTipoDocumento" class="form-control"  placeholder="tipo documento" required /></div>-->
            <div class="form-group"><input type="text" pattern="^(0|[1-9][0-9]*)$" minlength="7" title="Digitar solo numeros" name="numeroDocumento" class="form-control"  placeholder="Numero de documento" required /></div>
            <div class="form-group"><input type="tel" name="celular" class="form-control" minlength="10" maxlength="10" placeholder="Celular" required /></div>
            <div class="form-group"><input type="email" name="correo" class="form-control"  placeholder="Correo (necesario para activar tu cuenta)" required /></div>
            <div class="form-group"><input type="text" name="programa" class="form-control" minlength="4" placeholder="Programa Universitarios" required /></div>
            <div class="form-group"><input style="" type="date" name="nacimiento" class="form-control"  placeholder="Fecha de Nacimiento" required />Fecha Nacimiento</div>

<!--input type="checkbox" name="terminos" value="Bike"> Aceptar <a href="fragmentos/terminos.php">terminos y condiciones</a><br--><br>
            <input type="submit" class="btn btn-submit" value="Registrame"/>
        </form>
    </div>
</div>
<br><br><br><br>