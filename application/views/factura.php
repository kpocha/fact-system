

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Facturas
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
                    <div class="col-lg-12">
                        <h2></h2>
                        
                    </div>
                    <div class="col-lg-12">
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

                                            Fecha: <input id="datepicker" value="<?php echo date('d/m/Y') ?>"></input><br/> 
                                            detalles<br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / fin de sección de datos de la Empresa -->

                            <div class="row">
                                <div class="col-xs-3">
                                    <?php 
                                        $domicilio = 'Av. Mitre 1441';
                                        $nombre = "Danilo Pérez Ortega";
                                        echo 'Nombre : '.$nombre.'<br/>';
                                        echo "Domicilio: ".$domicilio;
                                     ?>
                                     <?php 
                                        
                                     ?>
                                </div>

                                <div class="col-xs-3 text-right">
                                <?php 
                                        $cuit = '12351365';
                                        $iva = "21%";
                                        echo 'I.V.A: '.$iva.'<br/>';
                                        echo "C.U.I.T: ".$cuit;
                                     ?>

                                </div>
                            </div>

                            <table class="table table-bordered th">
                                <thead> 
                                    <tr>
                                        <th>
                                            Codigo
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
                                        <td class="text-center"><input id="codigo" type="text"></td>
                                        
                                        <td class="text-center"><input id="productos" value="" type="text" ></td>

                                        <td class="text-center"><input id="cantidad" value="-" type="text" size="5"></td>
                                        <td class="text-center">$ <input type="text" id="precio_producto" disabled="disabled" size="5"></input></td>
                                        <td class="text-right ">$ <span id="importe"></span></td>
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
                                        $ <span id="subtotal" ></span>   <br/>
                                        $ <span id="iva" ></span>   <br/>
                                        <hr>
                                        $ <span id="total" > </span>    <br/>
                                    </strong>
                                </div>
                            </div>
                            <pre>
                    <!--            CAE: 6516516516665165165<img sytle="width:30%; " src="<?php echo base_url('images/codigo-barras.jpg');?>">
                     -->        </pre>
                                CAE: 6516516516665165165        
                            </pre>
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
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
            function personas(value){
            	var url = <?php echo "'".base_url('factura/stock')."'"; ?>;
            	$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                    	search: value
                    },
                    success: function(data) {				             
                                
                                var descrip = [data[0].descripcion];
                                console.log(descrip);
                                }
                
                });
        	}
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
		        	importe.innerHTML = ($(this).val() * $(precio_producto).val()).toFixed(2);
		        	subtotal.innerHTML = ($(this).val() * $(precio_producto).val()).toFixed(2);
		        	iva.innerHTML = ($(importe).text() * 0.21).toFixed(2);
		        	total.innerHTML = (parseInt($(iva).text()) + parseInt($(subtotal).text())).toFixed(2);
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
        </script>
