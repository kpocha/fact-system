  <div id="page-wrapper">
    <div class="container-fluid" class="container-fluid" style="width:95%; margin:auto;">	
    <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $title ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Factura 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
    	<div class="row">
			<div class="col-sm-3">
				<br/>
				<input id="buscar" type="text" class="form-control" placeholder="Buscar">
				<br/>
			</div> 
			<div class="col-sm-3 ">
				<br/>
				<a class="btn btn-default" href="<?php echo base_url('factura/formulario'); ?> ">Nuevo</a>
				<br/>
			</div>
		</div>
		<div id="tabla">
			<?php $this->load->view('tablafacturaa'); ?>
		</div>
	</div>
  </div>
</div>

<script language="javascript" type="text/javascript">

	/* FILTRO */
	//$('#buscar').focus();
		$('#buscar').keyup(function (event) {
				
				var loading = '<div><img style="width:3%;" src="<?php echo base_url('images/loading-blue.gif'); ?>"/> LOADING</div>'

				var url_ok = '<?php echo base_url("Facturacion/buscar"); ?>';
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

