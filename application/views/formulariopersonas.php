<section class="section" style="margin:20px;" >
  		<?php
  			extract($_GET);
	  		if (isset($data)) {
	  		  	  /*"Cerramos" php, y es como que se crear un nuevo html, asique se ejecuta el script como 
	  		  	  cuando arranca cualquier html*/
	  		  	  ?> 
						<script languaje="javacript"> 
						<?php 
						//Dentro del script abrimos php y recorremos el array que nos mando el controlador
							foreach ($data as $cliente) {
								$personas_id = $cliente->personas_id;
								$cuit = $cliente->cuit;
							 	$razon_social = $cliente->razon_social;
							 	$domicilio= $cliente->domicilio;
							 	$telefono = $cliente->telefono;
							 	$email = $cliente->email;	
							 	$localidad = $cliente->localidad;
							 	$iva_tipo = $cliente->iva_tipo;	}
						?>
						//usamos las funciones de js para tomar los html y mandarle los valores que trajimos del controlaod
						window.onload=function(){document.getElementById('personas_id').value = ' <?php echo $personas_id ?> ';
												 document.getElementById('razon_social').value = ' <?php echo $razon_social ?> ';
						                         document.getElementById('domicilio').value = ' <?php echo $domicilio ?> ';
						                         document.getElementById('telefono').value = ' <?php echo $telefono ?> ';
						                         document.getElementById('cuit').value = ' <?php echo $cuit ?> ';
						                         document.getElementById('email').value = ' <?php echo $email ?> ';
						                         document.getElementById('localidad').value = ' <?php echo $localidad ?> ';
						                         };

						</script> 
					<?php  
	  			//abrimos el metodo modif del controlador
	  			if ($persona_tipo=='Cliente') {
			 		$linkcancel = 'personas/listar_clientes';
			 	} else {
			 		if ($persona_tipo=='Proveedor') {
			 			$linkcancel = 'personas/listar_proveedores';
			 		}
			 	}
	  			$link = 'personas/modif?persona_tipo='.$persona_tipo;
			 	echo form_open($link); 
			 	echo '<input type="hidden" class="form-control" id="personas_id" name="personas_id" >';
			}else{
				//iniciamos las variables	
				$RazonSocial = NULL;
			 	$Domicilio= NULL; 	
			 	$Telefono = 0;	
			 	$Cuit = NULL;
			 	$email = NULL;
			 	$localidad = NULL;
			 	$iva_tipo = NULL;
			 	//enviamos las variables al método del controlador
			 	$atributos = array('class' => 'form-horizontal');
			 	//echo $persona_tipo;
			 	if ($persona_tipo=='Cliente') {
			 		$linkcancel = 'personas/listar_clientes';
			 		echo form_open('personas/nuevo_cliente');
			 	} else {
			 		if ($persona_tipo=='Proveedor') {
			 			$linkcancel = 'personas/listar_proveedores';
			 			echo form_open('personas/nuevo_proveedor');
			 		}
			 	}
			}
	 	?>
	 	<div class="form-group"  id="formulariocliente" >
			<div class="form-group">
				<span class="col-sm-2 control-label">CUIT:</span> <input id="cuit" name="cuit" type="text">
			</div>
			<div class="form-group">		
				<span class="col-sm-2 control-label">Razón Social:</span> <input name="razon_social" id="razon_social" type="text">
			</div>
			<div class="form-group">  		
				<span class="col-sm-2 control-label">Domicilio:</span> <input id="domicilio" name="domicilio" type="text" >
			</div>
			<div class="form-group">
	  			<span class="col-sm-2 control-label">Teléfono:</span> <input id= "telefono" name="telefono" type="text" >
			</div>
	  		<div class="form-group">
	  			<span class="col-sm-2 control-label">E-Mail:</span> <input id= "email" name="email" type="text" >
			</div>
			<div class="form-group">
	  			<span class="col-sm-2 control-label">Localidad:</span> <input id= "localidad" name="localidad" type="text" >
			</div>
			<div class="form-group">
	  			<span class="col-sm-2 control-label">Condición al IVA:</span> 
	  			<select id="iva_tipo" name="iva_tipo">
	  			  <option value=""></option>
				  <option value="Responsable Inscripto">Responsable Inscripto</option>
				  <option value="Exento">Exento</option>
				  <option value="Monotributo Social">Monotributo Social</option>
				  <option value="Monotributo Eventual">Monotributo Eventual</option>
				  <option value="Responsable Monotributo">Responsable Monotributo</option>
				  <option value="Consumidor Final">Consumidor Final</option>
				</select>
			</div>
		</div>
		<div align="center">
		  <button type="submit" class="btn btn-default">Guardar</button>
		  <!-- </form> -->
		  <a type="button" class="btn btn-default" href="<?php echo base_url($linkcancel); ?>">Cancelar</a>
		</div>
	</form>
</section>
