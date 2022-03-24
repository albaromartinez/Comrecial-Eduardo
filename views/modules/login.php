<div id="back">
    <div class="login-box" >
      <!-- /.login-logo -->
      <div class="login-box-body">
        <div class="login-logo">
          <a href="login"><img src="views/img/templates/logo-mini-negro.png" alt="logo" class="img-responsive " style="padding:15px 10px 0px 10px; "></a>
        </div>
        <h4 class="login-box-msg">Registrate para iniciar sessión</h4>

        <form  method="POST">

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="ingUser" required>
            <span class="fa fa-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraceña" name="ingPassword" required>
            <span class="fa fa-key form-control-feedback"></span>
          </div>

          <button type="submit" class="btn btn-primary btm-primary-modi btn-block btn-flat ">Ingresar</button>

          <?php
            $login = new ControllerUsers();
            $login -> ctrUserLogin();
 
          ?>

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

