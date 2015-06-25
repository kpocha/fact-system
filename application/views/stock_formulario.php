<section class="section" style="margin:20px;" >
  		<?php

	  		if (isset($data)) {
	  		  	  /*"Cerramos" php, y es como que se crear un nuevo html, asique se ejecuta el script como 
	  		  	  cuando arranca cualquier html*/
	  		  	  ?> 
						<script languaje="javacript"> 
						<?php 
						//Dentro del script abrimos php y recorremos el array que nos mando el controlador
							foreach ($data as $factura) {
								    $codigo=$factura->codigo;
							 		$descripcion = $factura->descripcion;
							 		$u_medida= $factura->u_medida;
							 		$p_unitario = $factura->p_unitario;
							 		$porc_bonif = $factura->porc_bonif;
							 		$alicuota = $factura->alicuota;
							 			}
						?>
						//usamos las funciones de js para tomar los html y mandarle los valores que trajimos del controlaod
						window.onload=function(){
												 document.getElementById('descripcion').value = ' <?php echo $descripcion ?> ';
						                         document.getElementById('u_medida').value = ' <?php echo $u_medida ?> ';
						                         document.getElementById('p_unitario').value = ' <?php echo $p_unitario ?> ';
						                         document.getElementById('porc_bonif').value = ' <?php echo $porc_bonif ?> ';
												 document.getElementById('alicuota').value = ' <?php echo $alicuota ?> ';

				};

						</script> 
					<?php  
	  			//abrimos el metodo modif del controlador
			 	echo form_open('facturacion/modif'); 
			 	echo '<input type="hidden" class="form-control" name="codigo" value="'.$codigo.'" >';
			}else{
				//iniciamos las variables	
				$descripcion = NULL;
			 	$u_medida= NULL; 	
			 	$p_unitario = 0;	
			 	$porc_bonif = 0;
			 	$alicuota= 0;
			 	//enviamos las variables al método del controlador
			 	$atributos = array('class' => 'form-horizontal');
				//echo form_open('facturacion/nuevo'); 
			}
	 	?>
	 	<div class="form-group"  id="stock-tablacontainer" >
			<div align="center" class="control_stock"> <h3>Control de Stock</h3></div>
			<div class="form-group">		
				<span class="col-sm-2 control-label">Producto/Servicio</span> <input name="descripcion" id="descripcion" type="text">
			</div>
			<div class="form-group">  		
				<span class="col-sm-2 control-label">Unidad Medida:</span> <input id="u_medida" name="u_medida" type="text" >
			</div>
			<div class="form-group">
	  			<span class="col-sm-2 control-label">Precio Unitario:</span> <input id= "p_unitario" name="p_unitario" type="text" >
			</div>
			<div class="form-group">
				<span class="col-sm-2 control-label">Porcentaje bonificación:</span> <input id="porc_bonif" name="porc_bonif" type="text">
			</div>
	  		<div class="form-group">
				<span class="col-sm-2 control-label">Alicuota:</span> <input id="alicuota" name="alicuota" type="text">
			</div>
		</div>
		<div align="center">
		  <button type="submit" class="btn btn-default">Guardar</button>
		  <!-- </form> -->
		  <a type="button" class="btn btn-default" href="facturacion/listar">Cancelar</a>
		</div>
	</form>
</section>
