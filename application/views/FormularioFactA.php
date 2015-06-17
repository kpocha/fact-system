
<section class="section" style="margin:20px;" >
  		<?php

	  		if (isset($data)) {	  			
	  			echo form_open('facturacion/modif');
	  			//recorremos el array que nos manda el controlador
			 	foreach ($data as $factura) {
			 		
			 		$RazonSocial = $factura->RazonSocial;
			 		$Domicilio= $factura->Domicilio;
			 		$Telefono = $factura->Telefono;
			 		$Cuit = $factura->Cuit;
			 				
			 		}
			 	echo form_open('facturacion/modif'); 
			 	echo '<input type="hidden" class="form-control" name="Cuit" value="'.$Cuit.'" >';
			}else{
				//iniciamos las variables	
				$RazonSocial = NULL;
			 	$Domicilio= NULL; 	
			 	$Telefono = 0;	
			 	$Cuit = 0;
			 	//enviamos las variables al método del controlador
			 	$atributos = array('class' => 'form-horizontal');
				echo form_open('facturacion/nuevo'); 
			}
	 	?>
	 	<div class="form-group"  id="FacturaTableContainerA" >
			<div align="center" class="tipoFactura"> <h3>Tipo de factura A</h3></div>
			<div class="form-group">		
				<span class="col-sm-2 control-label">Razón Social:</span> <input name="RazonSocial" id="RazonSocial" type="text">
			</div>
			<div class="form-group">  		
				<span class="col-sm-2 control-label">Domicilio:</span> <input id="Domicilio" name="Domicilio" type="text" >
			</div>
			<div class="form-group">
	  			<span class="col-sm-2 control-label">Teléfono:</span> <input id= "Telefono" name="Telefono" type="text" >
			</div>
			<div class="form-group">
				<span class="col-sm-2 control-label">CUIT:</span> <input id="Cuit" name="Cuit" type="text">
			</div>
	  		
		</div>
		<div align="center">
		  <button type="submit" class="btn btn-default">Guardar</button>
		  <!-- </form> -->
		  <a type="button" class="btn btn-default" href="index">Cancelar</a>
		</div>
	</form>
</section>
