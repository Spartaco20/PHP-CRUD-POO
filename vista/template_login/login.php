
	<div class="row">
		
    <form class="col s12" method="POST" action="<?= getUrlControllerMethod('Login','ingresar') ?>" >
      
    <!--  <input type="hidden" name="controller" value="Usuario" />
      	<input type="hidden" name="method" value="registrar" />
	-->
      
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
          	<button class="waves-effect waves-light btn" type="submit">	<i class="material-icons right">send</i>
          		Ingresar
          	</button>
        </div>
      </div>
    </form>
  </div>
