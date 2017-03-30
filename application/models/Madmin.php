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


public function modificar($param)
{
if(strcmp($param['userName'],$param['userActual'])){
  $campos  = array(
    'userName' => $param['userName'],
    'password' => $param['password'],
    'nombre' => $param['nombre'],
    'apellido' => $param['apellido']
  );
  $this->db->where('id_admin', $param['userActual']);
  $this->db->update('admin', $campos);
  $this->reloadSession($campos);
  return true;
}else{
  $this->db->SELECT('userName');
  $this->db->FROM('admin');
  $this->db->WHERE('userName = ',$param['userName']);
  $resultado = $this->db->get();
  if($resultado->num_rows()==1){
    return false;
  }else{
    $campos  = array(
      'userName' => $param['userName'],
      'password' => $param['password'],
      'nombre' => $param['nombre'],
      'apellido' => $param['apellido']
    );
    $this->db->where('id_admin', $param['userActual']);
    $this->db->update('admin', $campos);
    $this->reloadSession($campos);
    return true;

  }
}
}
public function reloadSession($usuario)
{
  $s_usuario = array(
    's_idAdmin' => $this->session->userdata('s_idAdmin'),
    's_userName' => $usuario['userName'],
    's_usuario' => $usuario['nombre'] . ", " . $usuario['apellido'],
    's_logeado' => true
  );
  $this->session->set_userdata($s_usuario);
}
public function getUserNames()
{
  $this->db->SELECT('id_admin, userName');
  $this->db->FROM('admin');
  $s = $this->db->get();
  return $s->result();
}

public function borrar($param)
{
  $this->db->where('id_admin', $param);
 $this->db->delete('admin');
// echo $param;
}

}
 ?>
