

        <div id="page-wrapper">

            <div class="container-fluid" class="container-fluid" style="width:95%; margin:auto;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <br/>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                            </li>
                            <li>
                                <i class="fa fa-table"></i> <a href="<?php echo base_url('factura'); ?>">Factura</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Nueva
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
                        
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5> <a href="#"><img style="width:65%; " src="<?php echo base_url('images/logo.jpeg');?>"></a>
                                            <br> <span id="tipo_iva">IVA RESPONSABLE INSCRIPTO</span>
                                            </h5>
                                        </div>
                                        <div class="panel-body">
                                            <?php echo $data['domicilio']; ?><br/> 
                                            <?php echo $data['tel']; ?><br/> 
                                            <?php echo $data['localidad']; ?><br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <h3 style="font-size:2em;">
                                        <center>
                                            <select id="tipo_factura">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                            </select> <?php //tipo de comprobante $cbtetipo ?>
                                        </center>
                                    </h3>  
                                    <div class="A" style="font-size: 0.75em; text-align:center;">
                                        C.U.I.T:                <?php echo $data['cuit_empresa']; ?>            <br/> 
                                        Ing. Brutos:            <?php echo $data['ingbrutos']; ?>       <br/> 
                                        Inicio de la actividad: <?php echo $data['inicio_actividad']; ?><br/> 
                                        Estab:                  <?php echo $data['establacimiento']; ?> <br/> 
                                        Sede Timbrado:          <?php echo $data['timbrado']; ?>        <br/> 
                                    </div>
                                </div>
                                <div class="col-xs-5 ">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4><span >FACTURA </span>
                                            <?php echo 'N° 0000-000000'.$data['ultimo']; ?> </h4><br/>
                                            Fecha: <input id="datepicker" value="<?php echo date('d/m/Y') ?>"></input><br/> <br/> 
                                        <?php //$ ?>
                                        </div>
                                        <div class="panel-body">
                                            
                                            <br/>
                                            <br/><br/><br/> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / fin de sección de datos de la Empresa -->

                            <div class="row">
                                <div class="col-xs-4">
                                    <?php 
                                        $domicilio = 'Av. Mitre 1441';
                                        $nombre = "Danilo Pérez Ortega";
                                        echo 'Nombre : '.$nombre.'<br/>';
                                        echo "Domicilio: ".$domicilio;
                                     ?>
                                     <?php 
                                        
                                     ?>
                                </div>

                                <div class="col-xs-4 text-right">
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
                                        <td class="text-center" class="inputs"><input id="codigo" class="inputs" type="text" size="6" ></td>
                                        
                                        <td class="text-center" class="inputs"><input id="producto" name="producto" class="inputs" value="" type="text" class="inputs"></td>

                                        <td class="text-center"><input id="cantidad" class="inputs" type="text" size="5" class="inputs"></td>
                                        <td class="text-center">$ <input type="text" id="precio_producto" disabled="disabled" size="5"></input></td>
                                        <td class="text-right ">$ <span id="importe"></span></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            <ul id="facturador-detalle" class="list-group"></ul>
                            
                             <pre></pre>
                             <div class="row text-left">
                                <div class="col-xs-1 ">
                                    <a class="btn btn-default" href="">Guardar</a>
                                </div>
                                <div class="col-xs-1 ">
                                    <a class="btn btn-default" href="<?php echo base_url('/factura');?>">Cancelar</a>
                                </div>
                            </div>
                    <!--           CAE: 6516516516665165165<img sytle="width:30%; " src="<?php echo base_url('images/codigo-barras.jpg');?>">
                             </pre>
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
                     -->
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
    <script src="<?php echo base_url('/scripts/js-render.js');?>"></script>
    <script src="<?php echo base_url('/scripts/facturador.js');?>"></script>
    <script id="facturador-detalle-template" type="text/x-jsrender" src="">
    {{for items}}
    <li class="list-group-item">
        <div class="row">
            <div class="col-xs-5">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-danger form-control" onclick="facturador.retirar({{:id}});">
                            <i class="glyphicon glyphicon-minus"></i>
                        </button>
                    </span>
                    <input name="producto" class="form-control" type="text" readonly placeholder="Nombre del producto" value="{{:producto}}" />
                </div>
            </div>
            <div class="col-xs-2">
                <input name="cantidad" class="form-control" type="text" placeholder="Cantidad" value="{{:cantidad}}" />
            </div>
            <div class="col-xs-2">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">$</span>
                  <input name="precio" class="form-control" type="text" readonly placeholder="Precio" value="{{:precio}}" />
                </div>
            </div>
            <div class="col-xs-3">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input  class="form-control" type="text" readonly value="{{:total}}" />
                    <span class="input-group-btn">
<button class="btn btn-success form-control" onclick="facturador.actualizar({{:id}}, this);" class="btn-retirar">
    <i class="glyphicon glyphicon-refresh"></i>
</button>
                    </span>
                </div>
            </div>
        </div>
    </li>
    {{else}}
    <li class="text-center list-group-item">No se han agregado productos al detalle</li>
    {{/for}}
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
                    $ <span  >{{:subtotal}}</span>   <br/>
                    $ <span  >{{:igv}}</span>   <br/>
                    <hr>
                    $ <span  >{{:total}}</span>    <br/>
                </strong>
            </div>
        </div>

</script>
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
             $('.inputs').keydown(function (e) {
                 if (e.which === 13) {
                     var index = $('.inputs').index(this) + 1;
                     $('.inputs').eq(index).focus();
                 }
             });
            $(document).ready(function(){
                /* Autocompletar */
                var url = <?php echo "'".base_url('factura/stock')."'"; ?>;
                var precio_producto = document.getElementById('precio_producto');
			    var importe = document.getElementById('importe');
			    var descripcion = document.getElementById('producto');
			    var codigo = document.getElementById('codigo');
			    var subtotal = document.getElementById('subtotal');
			    var iva = document.getElementById('iva');
			    var total = document.getElementById('total');

                

                $('#producto').autocomplete({
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
			                                    //console.log(descrip);
			                                    response(descrip);
			                                }
			                });                 
			            }
                });
                //tipos de factura 
                $('#tipo_factura').change(function(){
                    switch ($(this).val()){
                        case 'A':
                            document.getElementById('tipo_iva').innerHTML = 'IVA RESPONSABLE INSCRIPTO';
                            $('.A').css('display', 'block');
                            break;
                        case 'C':
                            document.getElementById('tipo_iva').innerHTML = 'MONOTRIBUTISTA';
                            $('.A').css('display', 'none');

                            break;
                    }
                });

                /* Cargar datos del producto */
		        $('#codigo').focusout(function() {
		        		var url = <?php echo "'".base_url('factura/stock_datos')."'"; ?>;
					   	var cod = $(this).val();
                        if (cod != '') {
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
                                        //console.log(data[0]);

                                        }
                        
                        });    
                        };
			    	    
                });
		        $('#cantidad').change(function() {
		        	//importe.innerHTML = ($(this).val() * $(precio_producto).val()).toFixed(2);
		        	//subtotal.innerHTML = ($(this).val() * $(precio_producto).val()).toFixed(2);
		        	//iva.innerHTML = ($(importe).text() * 0.21).toFixed(2);
		        	//total.innerHTML = (parseInt($(iva).text()) + parseInt($(subtotal).text())).toFixed(2);
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
