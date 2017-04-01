<?php /**
 *
 */
class Cadmin extends CI_Controller
{
  function __construct(){
  parent::__construct();
  $this->load->model('Madmin');
  $this->load->library('encrypt');
}

function agregar()
{
  $param['userName']= $this->input->post('txtNombreUsu');
  $param['password']= sha1($this->input->post('txtPassword'));
  $param['nombre']= $this->input->post('txtNombre');
  $param['apellido']= $this->input->post('txtApellido');
  $this->Madmin->agregar($param);
  redirect('administrador/CAgregar');

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


public function borrar()
{
  $param = $this->input->post('txtUser');
  $this->Madmin->borrar($param);
  redirect('administrador/Cdeladmin');
}

public function getUserNames()
  {
    $resultado = $this->Madmin->getUserNames();
    echo json_encode($resultado);
  }

  public function getTadmin()
  {
    $resultado = $this->Madmin->getAdmin();
    echo json_encode($resultado);
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
