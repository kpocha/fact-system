
<?php if(isset($data) && count($data)) : ?>
	<table id="tabla_facturas" class="table table-hover">
		<tr>
			<th>Razón Social</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th>Cuit</th>
			
		</tr> 
		
		<?php 
		foreach ($data as $factura) { 
			$modificar = 'facturacion/modificar?Cuit='.$factura->Cuit; 
			//$eliminar = 'facturacion/eliminar?Cuit='.$factura->Cuit; 
			$mostrar = 'facturacion/listar?Cuit='.$factura->Cuit; 
			?>
			<tr id="<?php echo $factura->Cuit; ?>">
				<input type="hidden" value="<?php echo $factura->Cuit; ?>">
				<td><?php echo $factura->RazonSocial; ?></td>
				<td><?php echo $factura->Domicilio; ?></td>
				<td><?php echo $factura->Telefono; ?></td>
				<td><?php echo $factura->Cuit; ?></td>
				<!--base_url(va a las variables de la misma vista)-->
				<td><a href="<?php echo base_url($mostrar); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
 				<td><a id="<?php echo $factura->Cuit; ?>" class="create-user"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></td>				
				<td><a href="<?php echo base_url($modificar); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
			 	<!--<td><a href="<?php echo base_url($eliminar); ?>" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td> 
			-->
			</tr>
		<?php  }?>
		</table>

	
	<?php else : ?>
<hr/>
<h3>No results found!</h3>
<hr/>
<?php endif; ?> 
