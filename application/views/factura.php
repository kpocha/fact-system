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
<<<<<<< HEAD
					Fecha: <?php echo date('d-m-Y') ?> <a href="">o</a><br/> 
					detalles<br/>
					más detalles<br/>
=======
						Fecha: <input id="datepicker" value="<?php echo date('d/m/Y') ?>"></input><br/> 
						detalles<br/>
						más detalles<br/>
>>>>>>> origin/facturacion
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
<<<<<<< HEAD
						Servicio
=======
						Codigo
>>>>>>> origin/facturacion
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
					
<<<<<<< HEAD
						<td><input id="buscar"value="Artículo" type="text"></td>
						
						<td><div class="col-xs-2 autocomplete"><input value="" type="text" data-source="<?php echo base_url('factura/stock'); ?>?search="></div></td>
						

						<td class=" text-center "><input value="-" type="text" size="5"></td>
						<td class=" text-right ">$ <input value="200" type="text" size="8"></td>
						<td class=" text-right ">$ 200</td>
									</tr>
				<tr>
					<td>Mas</td>
=======
						<td class="text-center"><input id="codigo" type="text"></td>
						
						<td class="text-center"><input id="productos" value="" type="text" ></td>

						<td class="text-center"><input id="cantidad" value="-" type="text" size="5"></td>
						<td class="text-center">$ <input type="text" id="precio_producto" disabled="disabled" size="5"></input></td>
						<td class="text-right ">$ <span id="importe"></span></td>
				</tr>
				<tr>
					<td><button>Mas</button></td>
>>>>>>> origin/facturacion
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
<<<<<<< HEAD
					$1,200.00
					<?php 
							//desarrollar la logica del sub total, el iva (el iva puede cambiar) y total
						?>    <br/>
					$ 252.00  	<br/>
					<hr>
					$ 1,452.00 	<br/>
=======
					$<span id="subtotal" ></span>   <br/>
					$ <span id="iva" ></span>  	<br/>
					<hr>
					$ <span id="total" > </span>	<br/>
>>>>>>> origin/facturacion
				</strong>
			</div>
		</div>
		<pre>
<<<<<<< HEAD
<!-- 			CAE: 6516516516665165165<img sytle="width:30%; " src="<?php echo base_url('images/codigo-barras.jpg');?>">
 -->		</pre>
=======
			CAE: 6516516516665165165		
		</pre>
>>>>>>> origin/facturacion
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
<<<<<<< HEAD
<script type="text/javascript" src="<?php echo base_url('scripts/autocompletar.js'); ?>"></script>
<script>
            $(document).ready(function(){
                /* Una vez que se cargo la pagina , llamo a todos los autocompletes y
                 * los inicializo */
                $('.autocomplete').autocomplete();
            });
=======
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
            $(document).ready(function(){
                /* Autocompletar */
                var url = <?php echo "'".base_url('factura/stock')."'"; ?>;
                var precio_producto = document.getElementById('precio_producto');
			    var importe = document.getElementById('importe');
			    var descripcion = document.getElementById('productos');
			    var codigo = document.getElementById('codigo');
			    var subtotal = document.getElementById('subtotal');
			    var iva = document.getElementById('iva');
			    var total = document.getElementById('total');
                $('#productos').autocomplete({
                	source: function (request, response){
                		$.ajax({
			                    url: url,
			                    type: 'GET',
			                    dataType: 'json',
			                    data: {
			                        search: request.term
			                    },
			                    success: function(data) {
			                                    
			                                    var descrip = [data[0].descripcion];
			                                    precio_producto.value = data[0].precio_unit;
	                                   			codigo.value = data[0].cod_articulo;
			                                    console.log(descrip);
			                                    response(descrip);
			                                }
			                });                 
			            }
                });
                /* Cargar datos del producto */
		        $('#codigo').focusout(function() {
		        		var url = <?php echo "'".base_url('factura/stock_datos')."'"; ?>;
					    
					   	var cod = $(this).val();

			    	    $.ajax({
		                    url: url,
		                    type: 'GET',
		                    dataType: 'json',
		                    data: {
		                    	cod: cod
		                    },
		                    success: function(data) {				             
	                                    precio_producto.value = data[0].precio_unit;
	                                    descripcion.value = data[0].descripcion;

		                                }
		                
		                });    
                });
		        $('#cantidad').focusout(function() {
		        	importe.innerHTML = $(this).val() * $(precio_producto).val();
		        	subtotal.innerHTML = $(this).val() * $(precio_producto).val();
		        });
		        /* Calendario */
		        $(function() {
					    $( "#datepicker" ).datepicker({
					    	regional: 'es',
					    	dateFormat: 'dd/mm/yy',
					    	autoSize: true,
					    	duration: "fast"
					    });
					    $( "#anim" ).change(function() {
					      $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
					    });
		 		 });
	      	});			
>>>>>>> origin/facturacion
        </script>
