<?php
/**
 *
 */
class Madmin extends CI_Model
{

  public function agregar($param)
  {
    $campos = array(
      'userName' => $param['userName'],
      'password' => $param['password'],
      'nombre' => $param['nombre'],
      'apellido' => $param['apellido']
    );
     $this->db->insert('admin',$campos);
  }

}
 ?>
