
<?php if(isset($data) && count($data)) : ?>
	<table id="tabla_usuarios" class="table table-hover">
		<tr>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Activity</th>
			<th>Loan</th>
			<th>Action</th>
			<th>Email</th>
			<th>Source</th>
			<th></th>
			<th></th>
			<th></th>
		</tr> 
		
		<?php 
		foreach ($data as $cliente) { 
			$modificar = 'welcome/modificar?uid='.$cliente->uid;
			$eliminar = 'welcome/eliminar?uid='.$cliente->uid;
			$mostrar = 'welcome/mostrar?uid='.$cliente->uid;
			$comentario = '?uid='.$cliente->uid;
            ?>
			<tr id="<?php echo $cliente->uid; ?>">
				<input type="hidden" value="<?php echo $cliente->uid; ?>">
				<td><?php echo $cliente->nombre; ?></td>
				<td><?php echo $cliente->telefono; ?></td>
				<td><?php echo $cliente->actividad; ?></td>
				<td><?php echo $cliente->prestamo; ?></td>
				<td><?php echo $cliente->action; ?></td>
				<td><?php echo $cliente->email; ?></td>
				<td><?php echo $cliente->fuente; ?></td>
				<td><a href="<?php echo base_url($mostrar); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
 				<td><a id="<?php echo $cliente->uid; ?>" class="create-user"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></td>				
				<td><a href="<?php echo base_url($modificar); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
				<td><a href="<?php echo base_url($eliminar); ?>" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			</tr>
		<?php  }?>
		</table>

	
	<?php else : ?>
<hr/>
<h3>No results found!</h3>
<hr/>
<?php endif; ?> 
