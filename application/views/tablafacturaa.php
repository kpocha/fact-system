
<?php if(isset($data) && count($data)) : ?>
	<table id="tabla_facturas" class="table table-hover">
		<tr>
			<th>N° Factura</th>
			<th>Fecha</th>
			<th>Razón Social</th>
			<th>Tipo de Factura</th>
			<th>Localidad</th>

			
		</tr> 
		
		<?php 
		foreach ($data as $factura) { 
			//son funciones, o metodos que van a diferentes metodos del controlador, segun lo que apretemos
			$modificar = 'facturacion/modificar?Cuit='.$factura->id_factura; 
			$eliminar = 'facturacion/eliminar?Cuit='.$factura->id_factura; 
			$mostrar = 'facturacion/listar?Cuit='.$factura->id_factura; 
			?>
			<tr id="<?php echo $factura->id_factura; ?>">
				<input type="hidden" value="<?php echo $factura->id_factura; ?>">
				<td><?php echo $factura->id_factura; ?></td>
				<td><?php echo $factura->fecha; ?></td>
				<td><?php echo $factura->razon_social; ?></td>
				<td><?php echo $factura->cbte_tipo; ?></td>
				<td><?php echo $factura->localidad; ?></td>

				
				<!--base_url(va a las funciones de la misma vista)-->
				<td><a href="<?php echo base_url($mostrar); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
				<td><a href="<?php echo base_url($modificar); ?>"><span  id ="modificar" class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
			 	<td><a href="<?php echo base_url($eliminar); ?>" ><span class="fa fa-print" aria-hidden="true"></span></a></td> 
			
			</tr>
		<?php  }?>
		</table>

	
	<?php else : ?>
<hr/>
<h3>No results found!</h3>
<hr/>
<?php endif; ?> 
