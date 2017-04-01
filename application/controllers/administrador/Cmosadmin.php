 <?php /**
  *
  */
 class Cmosadmin extends CI_Controller
 {

public function index()
{
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('admin/vmosadmin');
  $this->load->view('layout/footer');
}
 }
  ?>
