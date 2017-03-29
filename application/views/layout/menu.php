
<aside style="position:fixed" class="main-sidebar" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar ">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()?>assets/dist/img/avatar6.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('s_usuario') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu</li>

      <li class="sidebar-menu">
        <a href="#">
          <i class="fa fa-credit-card" aria-hidden="true"></i><span>Financiamiento</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>
            Agregar Plan</a></li>
          <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Modificar Plan</a></li>
          <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
            Eliminar Plan</a></li>
          <li><a href="#"><i class="fa fa-table" aria-hidden="true"></i>
            Todos los Planes</a></li>
        </ul>
      </li>

      <li class="sidebar-menu">
        <a href="#">
          <i class="glyphicon glyphicon-user"></i>
          <span>Usuarios</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>
            Agregar</a></li>
          <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Modificar</a></li>
          <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
            Eliminar</a></li>
          <li><a href="#"><i class="fa fa-table" aria-hidden="true"></i>
            Todos los Usuarios</a></li>
        </ul>
      </li>

      <li class="sidebar-menu">
        <a href="#">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
          <span>Graficas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#e"><i class="fa fa-pie-chart" aria-hidden="true"></i>
            Grafica 1</a></li>
          <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>
            Grafica 2</a></li>
          <li><a href="<#"><i class="fa fa-line-chart" aria-hidden="true"></i>
            Grafica 3</a></li>
          <li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>
            Grafica 4</a></li>
        </ul>
      </li>

      <li class="sidebar-menu">
        <a href="#">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
          <span>Administrador</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="<?php echo base_url();?>administrador/CAgregar">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Agregar</a></li>
          <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Modificar Perfil</a></li>
          <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
            Eliminar</a></li>
          <li><a href="#"><i class="fa fa-table" aria-hidden="true"></i>
            Todos los Administradores</a></li>
        </ul>
      </li>
    </ul>

  </section>

  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="content">
<div class="cont_pading">
