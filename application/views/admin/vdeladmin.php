<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Eliminar cuenta de Administrador</h3>
      </div>

      <form class="form-horizontal" action="<?php echo base_url();?>administrador/Cadmin/borrar" method="post">
        <div class="box-body">

          <div class="form-group">
            <label class="col-sm-3 control-label">Selecciona Nombre de Usuario</label>
            <div class="col-sm-9">
              <select id="cboUser" name="txtUser" class="form-control">
                <option >Elegir Nombre Usuario</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 pull-right">
              <button type="submit" class="btn btn-danger">Borrar</button>
            </div>
          </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  var base_url="<?php echo base_url();?>";
</script>
