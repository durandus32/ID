<?php
/**
 *
 */
class Mlogin extends CI_Model
{
  public function ingresar($usu, $pass)
  {
    $this->db->SELECT('id_admin, userName, nombre, apellido');
    $this->db->FROM('Admin');
    $this->db->WHERE('userName = ',$usu);
    $this->db->WHERE('password = ',$pass);

    $resultado = $this->db->get();
    if ($resultado->num_rows() == 1) {
        $r = $resultado->row();
    $s_usuario = array(
      's_idAdmin' => $r->id_admin,
      's_userName' => $r->userName,
      's_usuario' => $r->nombre . ", " . $r->apellido,
      's_logeado' => true

    );
    $this->session->set_userdata($s_usuario);
      return true;
    }else{
      return false;
    }

  }
}

 ?>
