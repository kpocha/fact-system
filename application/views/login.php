<div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Iniciar Sesión</h3>
        </div>
          <div class="panel-body">
                
              <?php echo form_open('login/verificar'); ?>
              <!-- <form action="submit.php" method="post"> -->
                <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Username" id="user" name="Username" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <input class="btn btn-lg btn-primary btn-block" type="submit" id="entrar" value="Entrar">
            </fieldset>
              </form>
              <div id="tabla"></div>
          </div>
      </div>
    </div>
  </div>
</div>
// <script type="text/javascript">
// $(document).ready(function(){
//    $('#entrar').click( function (event) {
                
//                 var input = $("#user").val();
//                 var url_ok = '<?php echo base_url("login/verificar"); ?>';
//                 var loading = '<div style="margin-top:1.3em;"><img style="width:8%;" src="<?php echo base_url('images/loading-blue.gif'); ?>"/> LOADING</div>'
//                 $('#tabla').html(loading);
//                 console.log(input);
//                 event.preventDefault();
//                 $.ajax({
//                     url: url_ok,
//                     type: 'POST',
//                     data: {user:input},
//                     success: function(data) {
//                         var container = $('#tabla');
//                         console.log(data);
//                         container.fadeIn(5000).html(data);

//                     }
//                 }); 

//             });
//   });

        
// </script>