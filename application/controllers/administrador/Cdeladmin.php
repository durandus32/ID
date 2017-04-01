<?php /**
 *
 */
class Cdeladmin extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('layout/menu');
    $this->load->view('admin/vdeladmin');
    $this->load->view('layout/footer');
  }

}
 ?>
