<?php

/**
 *
 */
class CAgregar extends CI_Controller
{
  function __construct(){
  parent::__construct();
  $this->load->model('Madmin');
  $this->load->library('encrypt');
}

public function index()
{
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('admin/vadmin');
  $this->load->view('layout/footer');
}

function agregar()
{
  $param['userName']= $this->input->post('txtNombreUsu');
  $param['password']= sha1($this->input->post('txtPassword'));
  $param['nombre']= $this->input->post('txtNombre');
  $param['apellido']= $this->input->post('txtApellido');
  $this->Madmin->agregar($param);

}


}
 ?>
