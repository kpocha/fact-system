<div class="content" style="border:solid; margin: 5%;">
	<div class="row"></div>
	<form id="factura">
		<div class="row">
			<div class="col-xs-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>De: <a href="#">Logo de la empresa</a></h4>
					</div>
					<div class="panel-body">
						CUIT:<?php //aca llamar el $cuit; de la empresa?><br/>
						Capital Federal<br/>
						IVA Responsable Inscripto<br/>
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<h3 style="font-size:2em;"><center>A<?php //tipo de comprobante $cbtetipo ?></center></h3>				
			</div>
			<div class="col-xs-5 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span style="position: relative; float: left; font-size:1.6em;">Factura:</span><br><h4>N° 000000-00001</h4>
					<?php //$ ?>
					</div>
					<div class="panel-body">
					Fecha: <input id="datepicker" value="<?php //echo date('d/m/Y') ?>"></input><br/> 
					detalles<br/>
					más detalles<br/>
					</div>
				</div>
			</div>
		</div>
		<!-- / fin de sección de datos de la Empresa -->

		<div class="row">
			<div class="col-xs-8">
				<?php 
					//buscar datos del cliente
				 ?>
				Señores: <input type="text"> 
				Domicilio: <input type="text" >
			</div>
			<div class="col-xs-8">
				C.U.I.T: <input type="text" >
				I.V.A: <input type="text" >
			</div>
		</div>

		<table class="table table-bordered th">
			<thead> 
				<tr>
					<th>
						Servicio
					</th>
					<th>
						Descripción
					</th>
					<th>
						Hrs / Cantidad
					</th>
					<th>
						Tarifa / Precio
					</th>
					<th>
						Importe
					</th>
				</tr>
			</thead>
			<?php 
				//while ($stock) ... hacer controller y model --- Hay que llenar la factura.
			 ?>
			 
			<tbody>
				<tr>
					
						<td><input id="buscar"value="Artículo" type="text"></td>
						
						<td><div class="col-xs-2 autocomplete"><input value="" type="text" data-source="<?php echo base_url('factura/stock'); ?>?search="></div></td>
						

						<td class=" text-center "><input value="-" type="text" size="5"></td>
						<td class=" text-right ">$ <input value="200" type="text" size="8"></td>
						<td class=" text-right ">$ 200</td>
									</tr>
				<tr>
					<td><button>Mas</button></td>
				</tr>
			</tbody>
			
		</table>
		<pre></pre>
		<div class="row text-right">
			<div class="col-xs-3 col-xs-offset-7">
				<strong>
					Sub Total:<br/>
					Impuestos (IVA 21%):<br/>
					<br/><br/>
					Total:<br/>
				</strong>
			</div>
			<div class="col-xs-2">
				<strong>
					$1,200.00
					<?php 
							//desarrollar la logica del sub total, el iva (el iva puede cambiar) y total
						?>    <br/>
					$ 252.00  	<br/>
					<hr>
					$ 1,452.00 	<br/>
				</strong>
			</div>
		</div>
		<pre>
<!-- 			CAE: 6516516516665165165<img sytle="width:30%; " src="<?php echo base_url('images/codigo-barras.jpg');?>">
 -->		</pre>
		<div class="row">
			<div class = "col-xs-5">
				datos bancarios
			</div>
			<div class="col-xs-7">
				datos de contacto
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="<?php echo base_url('scripts/autocompletar.js'); ?>"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
            $(document).ready(function(){
                /* Una vez que se cargo la pagina , llamo a todos los autocompletes y
                 * los inicializo */
                $('.autocomplete').autocomplete();
            });
          $(function() {
			    $( "#datepicker" ).datepicker({
			    	defaultDate: "",
			    	regional: 'es',
			    	dateFormat: 'dd/mm/yy'
			    });
			    $( "#anim" ).change(function() {
			      $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
			    });
		  });
        </script>
