	
<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre:</label>

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				
			</div>

				<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="registroNombre">
		</div>

		<div class="form-group">

			<label for="email">Correo electrónico:</label>

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" placeholder="Correo electrónico" id="email" name="registroEmail">

		</div>
		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>

				</div>
					
				<input type="pwd" class="form-control" placeholder="Contraseña" id="pwd" name="registroPassword">
			
		</div>

		<?php

		/*----------------------------------------------------------------
		Instancia la clase de un metodo no estatico		----------------------------------------------------------------*/


		//$registro= new ControladorFormularios();
		//$registro -> ctrRegistro();

		/*----------------------------------------------------------------
		Instancia la clase de un metodo estatico		----------------------------------------------------------------*/
 		
 		$registro = ControladorFormularios:: ctrRegistro();

 		if($registro == "ok"){

 			echo '<script>

 				if (window.history.replaceState){

 					window.history.replaceState(null,null,window.location.href);
 					
 				}

 			</script>';

 			echo '<div class= "alert alert-success">Usuario registrado</div>';

 		}


		?>

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>

</div>
