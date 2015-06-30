<div id="container" class="table-responsive" style="width:95%; margin:auto;">
	<div class="row">
		<div class="col-sm-3">
			<br/>
			<input id="buscar" type="text" class="form-control" placeholder="Buscar">
			<br/>
		</div> 
		<div class="col-sm-3 ">
			<br/>
			<?php 
				$nuevo = 'personas/formulario?persona_tipo='.$persona_tipo;
			?>
			<a class="btn btn-default" href="<?php echo base_url($nuevo); ?> ">Nuevo</a>
			<br/>
		</div>
		<!-- <div class="col-sm-3">
			<br/>
			<br/>
		</div> -->
		<!-- <div class="col-sm-3">
			<br/>
			llamar
			<br/>
		</div> -->
	</div>

	<div id="tabla">
		<?php $this->load->view('tablapersonas'); ?>
	</div>
</div>
<!-- Acá empieza la ventana popup -->
<!--<div id="dialog-form" title="Create new user">
	<form>
		<fieldset>
			<div class="form-group">
			    <label for="exampleInputEmail1">Comment</label>
				<textarea id="comentario" class="form-control" name="comentario" placeholder="Comment ..."></textarea>
			</div>
			<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</fieldset>
	</form>
</div>-->
<!-- Acá termina la ventana popup -->

<script language="javascript" type="text/javascript">

	/* FILTRO */
	//$('#buscar').focus();
		$('#buscar').keyup(function (event) {
			console.log("fsfs");
				var tipo_persona = '<?php echo $persona_tipo; ?>';
				var loading = '<div><img style="width:3%;" src="<?php echo base_url('images/loading-blue.gif'); ?>"/> LOADING</div>'
				console.log(tipo_persona);
				if (tipo_persona=='Cliente') {
					var url_ok = '<?php echo base_url("personas/buscarcliente"); ?>';
				} else {
					if (tipo_persona == 'Proveedor') {
						var url_ok = '<?php echo base_url("personas/buscarproveedor"); ?>';
					}
				}
				
				var input = $(this).val();
				$('#tabla').html(loading);
	            event.preventDefault();
	            console.log($(this).val());
	            $.ajax({
	                url: url_ok,
	                type: 'POST',
	                data: {q:input},
	                success: function(data) {
	                	var container = $('#tabla');
	                    console.log(data);
	                    container.fadeIn(5000).html(data);

	                }
	            }); 
	        });

	$(function() {
		var dialog, form,
		 // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
		 uid,
		 comentario = $("#comentario"),
		 url_ok = '<?php echo base_url("comentarios/nuevo"); ?>';
		 function addComment() {
		 	uid = dialog.data('id');
		 	console.log(comentario.val());

		 	$.ajax({
                url: url_ok,
                type: 'POST',
                data: {id:uid, comentario: comentario.val(),
                		},
                success: function(data) {
                    console.log(data);
                   // container.html(data);
                   dialog.dialog( "close" );
	            }
	        });
		 }
			dialog = $( "#dialog-form" ).dialog({
		 	autoOpen: false,
		 	height: 300,
		 	width: 530,
		 	modal: true,
		 	buttons: {
		 		"Create a comment": addComment,
		 		'Cancel': function() {
		 			dialog.dialog( "close" );
		 		}
		 	},
		 	close: function() {
		 		form[ 0 ].reset();
		 		//allFields.removeClass( "ui-state-error" );
		 	}
		 });
		 form = dialog.find( "form" ).on( "submit", function( event ) {
		 	event.preventDefault();
		 	addComment();
		 });		 
		
		 $( ".create-user" ).on( "click", function() {
		 	var uid = this.id;
		 	//dialog.dialog( "open" );
		 	dialog.data('id', uid).dialog('open'); 
		 	//dialog.dialog("open");

		 });
		});

</script>

