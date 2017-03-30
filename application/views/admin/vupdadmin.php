<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Modificar Datos Administrador</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?php echo base_url();?>administrador/CUpdate/modificar" method="post">
        <div class="box-body">
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre de usuario</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtNombreUsu" placeholder="Nombre para iniciar sesion">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Contraseña</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name="txtPassword" placeholder="Contraseña" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text"  class="form-control"  name="txtNombre" placeholder="Ingrese su nombre" >
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-3 control-label">Apellidos</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtApellido" placeholder="Ingrese sus apellidos" >
            </div>
          </div>
          <p class=""><?php echo $mensaje ?></p>
          <div class="form-group">
              <div class="col-sm-9 pull-right">
              <button type="submit" class="btn btn-primary">Modificar</button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
