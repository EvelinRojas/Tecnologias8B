<?=$this->extend('plantillas/plantilla_adminlte.php')?>
<?=$this->section('contenido')?>
<div class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <?=$this->include("login/contrasena_svg");?>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Inicia sesión para ingresar</p>

          <?= form_open("logincontroller/validar");?>
            <?= csrf_field()?>
            <div class="input-group mb-3">
              <?=form_input ("email","",["class"=>"form-control","placeholder"=>"Email"]);?>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
            <?=form_password ("contrasena","",["class"=>"form-control","placeholder"=>"Contraseña"]);?>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Recordar credenciales
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <?=form_submit("","Ingresar",["class"=>"btn btn-primary btn-block"]);?>
              </div>
              <!-- /.col -->
            </div>
          <?= form_close();?>
          <!-- /.social-auth-links -->

          <p class="mb-1">
            <a href="recuperar_contrasena.php">Olvidé mi contraseña</a>
          </p>
          <p class="mb-0">
            <a href="registo.php" class="text-center">Crear una nueva cuenta</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
<?=$this->endSection()?>
