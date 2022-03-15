<?=$this->extend('plantillas/plantilla_adminlte.php')?>
<?=$this->section('contenido')?>
<div class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

          <form action="recover-password.html" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Recuperar contraseña</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="login.html">Ingresar</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Registrarce</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
</div>

<?=$this->endSection()?>
