<a href="<?php  echo base_url('welcome/listar');?>"><span class="glyphicon glyphicon-chevron-left">Volver</span></a>
<div id="container" style="width:95%; margin:auto;">
	<h3>Comentarios:</h3>
	<table class="table table-condensed">
		<tr>
			<th>Comentario</th>
			<th>Fecha</th>
		</tr>
			<?php foreach ($comentario as $comentarios): ?>
		<tr>
			<td class="active">
		 		<?php echo $comentarios->comentario; ?> 
			</td>
			<td>
				<?php echo $comentarios->fecha; ?>
			</td>
		</tr>
			<?php endforeach; ?>
		
	</table>
		
<hr/>
<h3>Datos:</h3>
<hr/>
	<?php 
		foreach ($data as $cliente) { ?>
	<div class="row">
		<div class="col-sm-4">
			<h4>Name:</h4><?php echo $cliente->nombre; ?>
			<h4>Income:</h4><span class="info"><?php echo $cliente->income; ?></span>
			<h4>Actividad:</h4><span class="info"><?php echo $cliente->actividad; ?></span>
			<h4>Loan Type:</h4><span class="info"><?php echo $cliente->prestamo; ?></span>
			<h4>Action:</h4><span class="info"><?php echo $cliente->action; ?></span>
		</div>
		<div class="col-sm-4">
			<h4>Email:</h4><span class="info"><?php echo $cliente->email; ?></span>
			<h4>Source:</h4><span class="info"><?php echo $cliente->fuente; ?></span>
			<h4>Area:</h4><span class="info"><?php echo $cliente->area; ?></span>
			<h4>Status:</h4><span class="info"><?php echo $cliente->status; ?></span>
			<h4>Marital:</h4><span class="info"><?php echo $cliente->marital; ?></span>
		</div>
		<div class="col-sm-4">

			<h4>Phone Number:</h4><span class="info"><?php echo $cliente->telefono; ?></span>
			<h4>Day to call:</h4><div id="datepicker"></div>
			<h4>2013:</h4><span class="info"><?php echo $cliente->ganado_2013; ?></span>
			<h4>2014:</h4><span class="info"><?php echo $cliente->ganado_2014; ?></span>
			<h4>Day call him:</h4><span class="info"><?php echo $cliente->dia_hable; ?></span>
			<!-- <span class="info"><?php echo $cliente->dia_llamar; ?></span> -->
		</div>
	</div>	
	<?php if($cliente->marital == 'Married'): ?>
		<hr/><h3>Esposa:</h3><hr/>
		<div class="row">
			<div class="col-sm-2">
				<h4>Status:</h4><span class="info"><?php echo $cliente->e_status; ?></span>
			</div>
			<div class="col-sm-2">
				<h4>Tax:</h4><span class="info"><?php echo $cliente->e_tax; ?></span>
			</div>
			<div class="col-sm-2">
				<h4>Pago:</h4><span class="info"><?php echo $cliente->e_pago; ?></span>
			</div>
			<div class="col-sm-2">	
				<h4>Credito:</h4><span class="info"><?php echo $cliente->e_credito; ?></span>
			</div>
			<div class="col-sm-2">
				<h4>2013:</h4><span class="info"><?php echo $cliente->e_2013; ?></span>
			</div>
			<div class="col-sm-2">
				<h4>2014:</h4><span class="info"><?php echo $cliente->e_2014; ?></span>
				
			</div>
		</div>	
	<?php 
	endif;
		}?>
</div>