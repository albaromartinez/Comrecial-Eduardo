<div id="back">
    <div class="login-box" >
      <div class="login-logo">
        <a href="login"><img src="#" alt="logo" class="img-responsive" style="padding:30px 100px 0px 100px"></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Registrate para iniciar session</p>

        <form  method="post">

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
            <span class="fa fa-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraceña" name="ingPassword" required>
            <span class="fa fa-key form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Recuerdame
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>

        </form>

        <a href="#">Olvidé mi contraceña</a><br>
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div>
      <!-- /.login-box-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="views/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

