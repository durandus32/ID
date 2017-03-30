<?php

/**
 *
 */
class CUpdate extends CI_Controller
{
  function __construct(){
  parent::__construct();
  $this->load->model('Madmin');
  $this->load->library('encrypt');
}

public function index()
{
  $data['mensaje'] = '';
  $this->cargarVista($data);
}

function modificar()
{
  $param['userActual'] = $this->session->userdata('s_idAdmin');
  $param['userName']= $this->input->post('txtNombreUsu');
  $param['password']= sha1($this->input->post('txtPassword'));
  $param['nombre']= $this->input->post('txtNombre');
  $param['apellido']= $this->input->post('txtApellido');
  $var = $this->Madmin->modificar($param);
  if($var == true){
    $data['mensaje'] = '';
    $this->cargarVista($data);
  }else{
    $data['mensaje'] = "Error nombre de usuario ya existe";
    $this->cargarVista($data);
  }
}

public function cargarVista($data)
{
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('admin/vupdadmin', $data);
  $this->load->view('layout/footer');
}


}
 ?>
