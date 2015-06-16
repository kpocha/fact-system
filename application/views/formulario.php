<section class="section" style="margin:20px;">
	<!-- 
	<table id="tabla_usuarios" class="table table-hover">

		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
	</table> 
 	<button type="button" class="btn btn-primary" id="mostrar_form" onclick="mostrar()">Nuevo Usuario</button>
 	-->
 	<!-- <form method="POST"> -->	
 	<?php 
 	if (isset($data)) {
	 	foreach ($data as $clie ) {
	 		$uid = $clie->uid;
	 		$nombre= $clie->nombre;
	 		$telefono = $clie->telefono;
	 		$actividad = $clie->id_actividad;
	 		$action = $clie->id_action;
	 		$prestamo = $clie->id_prestamo;
	 		$email = $clie->email;
	 		$fuente = $clie->fuente;
	 		$area  = $clie->area;
	 		$status  = $clie->status;
	 		$marital  = $clie->marital;
	 		$trabajo  = $clie->trabajo;
	 		$anos_trabajo  = $clie->anos_trabajo;
	 		$metodo_pago  = $clie->metodo_pago;
	 		$income  = $clie->income;
	 		$credit  = $clie->credit;
	 		$payment = $clie->payment;
	 		$rent = $clie->rent;
	 		$ganado_2014 = $clie->ganado_2014;
	 		$ganado_2013 = $clie->ganado_2013;
	 		$dia_llamar= $clie->dia_llamar;
			$dia_hable = $clie->dia_hable;
	 		$vencimiento = $clie->vencimiento;
	 		$pisos = $clie->pisos;
			$tax= $clie->tax;
			$alternativa_credito = $clie->alternativa_credito;
			$habitaciones= $clie->habitaciones;
	 			
			
			//ESPOSA - Verificar si es casado
			if ($marital == 'Married') {
				$e_status= $clie->e_status;
				$e_tax= $clie->e_tax;
				$e_2013= $clie->e_2013;
				$e_2014= $clie->e_2014;
				$e_credito= $clie->e_credito;
				$e_pago= $clie->e_pago;
			}else{
				$e_status= NULL;
				$e_tax= NULL;
				$e_2013= NULL;
				$e_2014= NULL;
				$e_credito= NULL;
				$e_pago= NULL;
			}
			
	 		}
	 	echo form_open('welcome/modif'); 
	 	echo '<input type="hidden" class="form-control" name="uid" value="'.$uid.'" >';
	}else{
		/*$actividad = NULL;
		$nombre = NULL;
		$email = NULL;
		$area = NULL;
		$ganado_2013 = NULL;
		$ganado_2014 = NULL;
		$vencimiento = NULL;
		$telefono = NULL;
		$dia_llamar= NULL;
		$dia_hable = NULL;
		$payment = NULL;
		$pisos = NULL;
		$alternativa_credito = NULL;
		$prestamo = NULL;
		*/
 		$nombre= NULL;
 		$telefono =  NULL;
 		$actividad =  NULL;
 		$action =  NULL;
 		$prestamo =  NULL;
 		$email =  NULL;
 		$fuente = NULL;
 		$area  =  NULL;
 		$status  =  NULL;
 		$marital  =  NULL;
 		$trabajo  =  NULL;
 		$anos_trabajo  = NULL;
 		$metodo_pago  =  NULL;
 		$income  = NULL;
 		$credit  = NULL;
 		$payment = NULL;
 		$rent =  NULL;
 		$ganado_2014 = NULL;
 		$ganado_2013 = NULL;
 		$dia_llamar= NULL;
		$dia_hable = NULL;
 		$vencimiento = NULL;
 		$pisos = NULL;
		$tax=  NULL;
		$alternativa_credito = NULL;
		$habitaciones = NULL;
		//ESPOSA
		$e_status= NULL;
		$e_tax= NULL;
		$e_2013= NULL;
		$e_2014= NULL;
		$e_credito= NULL;
		$e_pago= NULL;
		echo form_open('welcome/nuevo'); 
	}
 	?>

 		<div style=" margin: auto; float:center; width:90%;">
			<div class="form-group">
			    <label >Nombre</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?> ">
		 	</div>	
		 	<div class="row">
				<div class="col-sm-6">
					<label style="margin:5px;">Activity:</label><br/>
					  <label class="radio-inline">
					    <input type="radio" name="actividad" id="optionsRadios1" value="1" <?php if($actividad == 1) echo "checked";  ?>>
					    Comprar
					  </label> 
					  <label class="radio-inline">
					    <input type="radio" name="actividad" id="optionsRadios2" value="2"<?php if($actividad == 2) echo "checked";  ?>>
					    Vender
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="actividad" id="optionsRadios1" value="3" <?php if($actividad == 3) echo "checked";  ?>>
					    Rentar
					  </label>

					  <label class="radio-inline">
					    <input type="radio" name="actividad" id="optionsRadios2" value="4" <?php if($actividad == 4) echo "checked";  ?>>
					    Refinanciar
					  </label>
				</div>
				<div class="form-group col-sm-4">
				    <label>Area</label>
			    	<input type="text" class="form-control" name="area" id="area" placeholder="Area" value="<?php echo $area; ?> ">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<label for="recamaras">Recamaras</label>
				    <select class="form-control" name="habitaciones" >
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>	
				</div>
				<div class="col-sm-4">
			  		<label>Pisos</label><br/>
					  <label class="radio-inline">
					    <input type="radio" name="pisos" id="pisos_1" value="1" <?php if($pisos == 1) echo "checked";  ?>>
					    1
					  </label>

					  <label class="radio-inline">
					    <input type="radio" name="pisos" id="pisos_2" value="2" <?php if($pisos == 2) echo "checked";  ?>>
					    2
					  </label>

					  <label class="radio-inline">
					    <input type="radio" name="pisos" id="pisos_3" value="3" <?php if($pisos == 3) echo "checked";  ?>>
					    No importa.
					  </label>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
					    <label >Payment</label>
					    <input type="text" class="form-control" name="payment" placeholder="Payment" value="<?php echo $payment; ?> ">
				 	</div>	
				</div>
			</div>



			<div class="row" >
				<div class="col-sm-4">
				    <label >Marital</label>
					<select class="form-control" name="marital" onchange="esposa(this)">
					  <option <?php if($marital == 'Unmarried') echo "selected";  ?>>Unmarried</option>
					  <option <?php if($marital == 'Married') echo "selected";  ?>>Married</option>
					  <option <?php if($marital == 'Separated') echo "selected";  ?>>Separated</option>
					</select>
				</div>
				<div class="col-sm-4">
				    <label >Status</label>
					<select class="form-control" name="status">
					  <option <?php if($status == 'Citizen') echo "selected";  ?>>Citizen</option>
					  <option <?php if($status == 'Resident') echo "selected";  ?>>Resident</option>
					  <option <?php if($status == 'None') echo "selected";  ?>>None</option>
					</select>
				</div>
				<div class="col-sm-4">
				    <label >Income Tax</label>
					<select class="form-control" name="tax">
					  <option <?php if($tax == 'Si') echo "selected";  ?>>Si</option>
					  <option <?php if($tax == 'No') echo "selected";  ?>>No</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
				    <label for="exampleInputEmail1">Pago</label>
					<select class="form-control" name="income">
					  <option <?php if($income == 'Weekly') echo "selected";  ?>>Weekly</option>
					  <option <?php if($income == 'Twice Week') echo "selected";  ?>>Twice Week</option>
					  <option <?php if($income == 'Month') echo "selected";  ?>>Month</option>
					  <option <?php if($income == 'Twice Month') echo "selected";  ?>>Twice Month</option>
					</select>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					    <label >2014</label>
					    <input type="text" class="form-control" name="ganado_2014" placeholder="$" value="<?php echo $ganado_2014; ?>">
				 	</div>	
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					    <label >2013</label>
					    <input type="text" class="form-control" name="ganado_2013" placeholder="$" value="<?php echo $ganado_2013; ?>">
				 	</div>	
				</div>
				<div class="col-sm-3">
				    <label for="exampleInputEmail1">Credit</label>
					<select class="form-control" name="credit">
					  <option <?php if($credit == 'Good') echo "selected";  ?> >Good</option>
					  <option <?php if($credit == 'Bad') echo "selected";  ?> >Bad</option>
					  <option <?php if($credit == 'Unknow') echo "selected";  ?> >Unknow</option>
					</select> 
				</div>	
			</div>

			<hr>

			<!-- Aca son datos de la esposa por si es casado. -->
			<div id="esposa" style="display:none; margin:auto;">
				<h3>ESPOSA</h3>
				<div class="row">
					<div class="form-group col-sm-4">
					    <label for="exampleInputEmail1">Status</label>
						<select class="form-control" name="esposa_status">
						  <option <?php if($e_status == 'Citizen') echo "selected";  ?>>Citizen</option>
						  <option <?php if($e_status == 'Resident') echo "selected";  ?>>Resident</option>
						  <option <?php if($e_status == 'None') echo "selected";  ?>>None</option>
						</select>
					</div>
					<div class="form-group col-sm-4">
					    <label for="exampleInputEmail1">Income Tax</label>
						<select class="form-control" name="esposa_tax">
						  <option <?php if($e_tax == 'Si') echo "selected";  ?>>Si</option>
						  <option <?php if($e_tax == 'No') echo "selected";  ?>>No</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
					    <label for="exampleInputEmail1">Pago</label>
						<select class="form-control" name="esposa_pago">
						  <option <?php if($e_pago == 'Weekly') echo "selected";  ?>>Weekly</option>
						  <option <?php if($e_pago == 'Twice Week') echo "selected";  ?>>Twice Week</option>
						  <option <?php if($e_pago == 'Month') echo "selected";  ?>>Month</option>
						  <option <?php if($e_pago == 'Twice Month') echo "selected";  ?>>Twice Month</option>
						</select>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
						    <label >2014</label>
						    <input type="text" class="form-control" name="esposa_2014" placeholder="$" value="<?php echo $e_2014; ?>">
					 	</div>	
					</div>
					<div class="col-sm-3">
						<div class="form-group">
						    <label >2013</label>
						    <input type="text" class="form-control" name="esposa_2013" placeholder="$" value="<?php echo $e_2013; ?>">
					 	</div>	
					</div>
					<div class="col-sm-3">
					    <label for="exampleInputEmail1">Credit</label>
						<select class="form-control" name="esposa_credit">
						  <option <?php if($e_credito == 'Good') echo "selected";  ?>>Good</option>
						  <option <?php if($e_credito == 'Bad') echo "selected";  ?>>Bad</option>
						  <option <?php if($e_credito == 'Unknow') echo "selected";  ?>>Unknow</option>
						</select>
					</div>	
				</div>
				<hr>
			</div>
			<!-- FIN DE LOS DATOS DE LA ESPOSA -->
			<div class="row">
				<div class="col-sm-4">
					<label>Alternativa de Credito</label>
					<div class="radio">
					  <label>
					    <input type="radio" name="alternativa_credito" id="optionsRadios1" value="1" <?php if($alternativa_credito == 1) echo "checked";  ?>>
					    Si
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="alternativa_credito" id="optionsRadios1" value="0" <?php if($alternativa_credito == 0) echo "checked";  ?>>
					    No
					  </label>
					</div>
				</div>
				<div class="col-sm-4">
					<label>Como Pagan la Renta</label>
					<select class="form-control" name="metodo_pago" >
					  <option>Check</option>
					  <option>Cash</option>
					  <option>Money Order</option>
					</select>
				</div>
				<div class="col-sm-4">
					<label >Vencimiento</label>
				    <input type="text" class="form-control" id="vencimiento" name="vencimiento" value="<?php echo $vencimiento; ?>">
				</div>
			</div>			
			
		 	<div class="row">
			  	<div class="form-group col-sm-6">
				    <label for="exampleInputEmail1">Correo</label>
				    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
			  	</div>
			  	<div class="form-group col-sm-6">
				    <label>Telefono</label>
				    <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $telefono; ?>">
			  	</div>
			</div>
		  	
			<div class="row">
				<div class="form-group col-sm-4">
				    <label for="exampleInputEmail1">Source</label>
				    <select class="form-control" name="fuente" >
					  <option>Facebook</option>
					  <option>Personal</option>
					  <option>Refered</option>
					  <option>Sign</option>
					  <option>Other</option>
					</select>	
			  	</div>		 		
			</div>
			<div class="row">
			  	<div class="col-sm-4">
			  		<label>Loan Type</label>
					<div class="radio">
					  <label>
					    <input type="radio" name="prestamo" id="optionsRadios1" value="1" <?php if($prestamo == 1) echo "checked"; ?>>
					    Conventional
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="prestamo" id="optionsRadios2" value="2" <?php if($prestamo == 2) echo "checked";  ?>>
					    Amegy
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="prestamo" id="optionsRadios2" value="3" <?php if($prestamo == 3) echo "checked";  ?>>
					    NACA
					  </label>
					</div>
				 	<div class="radio">
					  <label>
					    <input type="radio" name="prestamo" id="optionsRadios1" value="4" <?php if($prestamo == 4) echo "checked";  ?>>
					    Cash
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="prestamo" id="optionsRadios2" value="5"<?php if($prestamo == 5) echo "checked";  ?>>
					    RENTAL
					  </label>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
				    <label for="exampleInputEmail1">Action</label>
					<select class="form-control" name="action" onchange="d1(this)">
					  <option value="1">Call</option>
					  <option value="2">Call Back</option>
					  <option value="3">Send 1st. Email</option>
					  <option value="4">Send 1st. Text</option>
					  <option value="5">Comes to the Office</option>
					  <option value="9">No Answer LVM</option>
					  <option value="6">No Answer NO LVM</option>
					  <option value="7">Not interested</option>
					  <option value="8">Not Qualify</option>
					</select>
				</div>
				<div id='when' class="col-sm-6" style="display:block;">
				    <label >When?</label>
				    <input type="text" class="form-control" id="fecha" name="dia_llamar" value="<?php echo $dia_llamar; ?>">
			 	</div>
		 	</div>
		 	<div id='llamo' class="col-sm-6" style="display:block;">
				    <label >Date talk</label>
				    <input type="text" class="form-control" id="fecha_hable" name="dia_hable" value="<?php echo $dia_hable; ?>">
			 	</div>
		 	<br/>
		 	<button type="button" class="btn btn-default" onclick="new_comment()">Nuevo Comentario</button>
			<div class="form-group" id="comentario" style="display:none;">
			    <label>Comentarios</label>
			    <textarea class="form-control" name="comentario" rows="4"></textarea>
		  	</div>
			<button type="submit" class="btn btn-default">Guardar</button>
			<a type="button" class="btn btn-default" href="index" >Cancelar</a>
		</div>
	</form>
	
</section>
		<script src="<?php echo base_url('scripts/jquery-1.6.4.min.js');?>" type="text/javascript"></script>
	 	<script src="<?php echo base_url('scripts/jquery-ui-1.8.16.custom.min.js'); ?>" type="text/javascript"></script>
	 	<script language="javascript" type="text/javascript">

	 	$( document ).ready(function() {
			var marital= '<?php echo $marital; ?>';
			if (marital == 'Married') {document.getElementById('esposa').style.display = 'block';};
		});
//Calendario en el input. Limitando la fecha según sea 'desde' o 'hasta'. 
	var dates = $("#fecha_hable,#fecha, #vencimiento" ).datepicker({
		dateFormat: "yy/mm/dd",
		yearRange: "-50",
		defaultDate: "+1d",
		changeMonth: true,
		changeYear: true,
	/*onSelect: function( selectedDate ) {
		var option = this.id == "fecha" ? "minDate" : "maxDate",
			instance = $( this ).data( "datepicker" ),
			date = $.datepicker.parseDate(
				instance.settings.dateFormat ||
				$.datepicker._defaults.dateFormat,
				selectedDate, instance.settings );
		dates.not( this ).datepicker( "option", option, date );
		}*/
	});
//habilitar el input segun la opcion del select. :) Simplemente genial!
	function d1(selectTag){
		if(selectTag.value == 'call' || selectTag.value == 'call-back'){
			document.getElementById('when').style.display = 'block';
		}else{
			document.getElementById('when').style.display = 'none';
		}
	}
	function esposa(selectTag){
		if(selectTag.value == 'call' || selectTag.value == 'Married'){
			document.getElementById('esposa').style.display = 'block';
		}else{
			document.getElementById('esposa').style.display = 'none';
		}
	}
	function new_comment(){
		document.getElementById('comentario').style.display = 'block';
	}

</script> 
