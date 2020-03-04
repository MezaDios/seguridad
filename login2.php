<?php 

require_once("controlador.usuarios.php");

?>

<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <img src="vistas/img/plantilla/logo-blanco-bloque.png" class="img-responsive" style="padding:30px 100px 0px 100px" alt="logo">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Inicia sesión</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="username" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>

      </div>

      <?php 

        $login = new ControladorUsuarios();
        $login -> ctrLogin();

       ?>

    </form>

  </div><!-- /.login-box-body -->

</div><!-- /.login-box -->