
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
				echo form_open('facturacion/nuevo'); 
			}
	 	?>
 	<div id="FacturaTableContainerA" align="center" class="facturas">
		<div align="center" class="tipoFactura">A</div>
	  	<tr>
		    <td align="left">Razón Social: <input name="RazonSocial" id="RazonSocial" size="30px" type="text"></td>
	    </tr>
	  	<tr>
	  		<td align="left">Domicilio: <input id="Domicilio" name="Domicilio" size="30px"  type="text" ></td>
	  		<td align="right">Teléfono: <input id= "Telefono" name="Telefono" type="text" size="20"></td>
	  	</tr>
	   	<tr>
	        <td align="right">CUIT: <input id="Cuit" name="Cuit" type="text"></td>
	</div>
	<div align="center" style="width: 820px; margin-top: 5px;">
	  <button type="submit" class="btn btn-default">Guardar</button>
	  <!-- </form> -->
	  <a type="button" class="btn btn-default" href="index">Cancelar</a>
	</div>
</section>
