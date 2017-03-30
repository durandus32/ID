<?php
/**
 *
 */
class Clogin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
      $this->load->model('Mlogin');
      $this->load->library('encrypt');
  }

 public function index()
  {
    $data['mensaje'] = '';

    if($this->session->userdata('s_logeado')){
  $this->cargarvista();
    }else {
        $this->load->view('vlogin', $data);
    }

  }

  public function ingresar()
  {
    if($this->session->userdata('s_logeado')){
  $this->cargarvista();

    }else {

      $usu = $this->input->post('txtUsuario');
      $pass = sha1($this->input->post('txtPassword'));
      $res = $this->Mlogin->ingresar($usu, $pass);
      if ($res == true) {
        $this->cargarvista();
      }else{
        $data['mensaje'] = "Usuario o contraseña incorrectos.";
        $this->load->view('vlogin' , $data);

      }
    }


  }
  public function cargarvista()
  {
    $this->load->view('layout/header');
      $this->load->view('layout/menu');
  //    $this->load->view('layout/principal');
      $this->load->view('layout/footer');
  }

  public function cerrarSesion()
  {
    $s_usuario = array(
      's_logeado' => false
    );
    $data['mensaje'] = '';
    $this->session->set_userdata($s_usuario);
    $this->load->view('vlogin' , $data);
  }
}

 ?>
