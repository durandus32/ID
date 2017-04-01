<?php

/**
 *
 */
class CUpdate extends CI_Controller
{
public function index()
{
  $data['mensaje'] = '';
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('admin/vupdadmin', $data);
  $this->load->view('layout/footer');
}
}
 ?>
