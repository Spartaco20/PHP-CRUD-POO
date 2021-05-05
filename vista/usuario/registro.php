
	<div class="row">
		
    <form class="col s12" method="POST" action="<?= getUrlControllerMethod('Usuario','registrar') ?>" >
      
    <!--  <input type="hidden" name="controller" value="Usuario" />
      	<input type="hidden" name="method" value="registrar" />
	-->
      <div class="row">
      	<div class="input-field col s6">
		    <select name="tipoDocumento">
		    	<option value="" disabled selected>Seleccione el tipo de documento</option>
		      <?php foreach($data["tiposDocumentos"] as $td) { ?>
		      <option value="<?= $td->getId() ?>"><?= $td->getDescripcion() ?></option>
		      <?php } ?>
		    </select>
		    <label>Tipo Documento</label>
		</div>
      
        <div class="input-field col s6">
          <input id="numeroDocumento" name="numeroDocumento" type="number" class="validate">
          <label for="numeroDocumento">Número Documento</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="nombres" name="nombres" type="text" class="validate">
          <label for="nombres">Nombres</label>
        </div>
      
        <div class="input-field col s6">
          <input id="apellidos" name="apellidos" type="text" class="validate">
          <label for="apellidos">Apellidos</label>
        </div>
      </div>

	  <div class="row">
        <div class="input-field col s6">
          <input id="nombreUsuario" name="nombreUsuario" type="text" class="validate">
          <label for="nombreUsuario">Correo electronico</label>
        </div>
      
        <div class="input-field col s6">
          <input id="clave" name="clave" type="password" class="validate">
          <label for="clave">Contraseña</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          	<button class="waves-effect waves-light btn" type="submit">	<i class="material-icons right">save</i>
          		Guardar
          	</button>
        </div>
      </div>
    </form>
  </div>
