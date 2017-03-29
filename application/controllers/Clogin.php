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
      $pass = $this->input->post('txtPassword');
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
      $this->load->view('layout/principal');
      $this->load->view('layout/footer');
  }
}

 ?>
