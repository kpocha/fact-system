
<?php if(isset($data) && count($data)) : ?>
	<table id="tabla_personas" class="table table-hover">
		<tr>
			<th>Cuit</th>
			<th>Razón Social</th>
			<th>Domicilio</th>
			<th>Telefono</th>
			<th>E-Mail</th>
			<th>Localidad</th>
			<th>Condicion al IVA</th>
			<th colspan='3'></th>
		</tr> 
		
		<?php 
		foreach ($data as $persona) { 
			//son funciones, o metodos que van a diferentes metodos del controlador, segun lo que apretemos
			$modificar = 'personas/modificar?personas_id='.$persona->personas_id.'&persona_tipo='.$persona_tipo; 
			$eliminar = 'personas/eliminar?personas_id='.$persona->personas_id; 
			$mostrar = 'personas/listar?personas_id='.$persona->personas_id; 
			?>
			<tr id="<?php echo $persona->personas_id; ?>">
				<input type="hidden" value="<?php echo $persona->personas_id; ?>">
				<td><?php echo $persona->cuit; ?></td>
				<td><?php echo $persona->razon_social; ?></td>
				<td><?php echo $persona->domicilio; ?></td>
				<td><?php echo $persona->telefono; ?></td>
				<td><?php echo $persona->email; ?></td>
				<td><?php echo $persona->localidad; ?></td>
				<td><?php echo $persona->iva_tipo; ?></td>
				<!--base_url(va a las funciones de la misma vista)-->
				<td><a href="<?php echo base_url($mostrar); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
 				<!--<td><a id="<?php echo $persona->personas_id; ?>" class="create-user"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></td>	-->			
				<td><a href="<?php echo base_url($modificar); ?>"><span  id ="modificar" class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
			 	<td><a href="<?php echo base_url($eliminar); ?>" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td> 
			
			</tr>
		<?php  }?>
		</table>

	
	<?php else : ?>
<hr/>
<h3>No results found!</h3>
<hr/>
<?php endif; ?> 
