<?php

class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host='.HOST.'; dbname='.DBNOMBRE.';charset=utf8', USER, PASS);
  }

  function GetUser($user){
    $sentencia = $this->db->prepare("select * from usuario where dni=? limit 1");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($dni,$nombre_apellido,$email,$obraSocial, $nro_afiliado){
    $sentencia = $this->db->prepare("INSERT INTO usuario(dni, rol, nombre_apellido, num_afiliado, obra_social, email) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($dni, 'p', $nombre_apellido, $nro_afiliado, $obraSocial, $email));
  }

}

?>