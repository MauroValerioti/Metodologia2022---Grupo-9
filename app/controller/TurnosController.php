<?php
require_once  "./view/TurnosView.php";
require_once  "./model/UsuarioModel.php";

class TurnosController
{
  private $view;
  private $modelusuarios;

  function __construct()
  {
    $this->view = new TurnosView();
    $this->modelusuarios = new UsuarioModel();
  }

  function Home(){
    session_start();
    if(isset($_SESSION["User"])) {
      if (is_numeric($_SESSION["User"])) {
        $dni = $_SESSION["User"];
        $usuario = $this->modelusuarios->getUser($dni);
      } else {
        $nombre_usuario = $_SESSION["User"];
        $usuario = $this->modelusuarios->getUserStaff($nombre_usuario);
      }

      
      //si no existe el dni en base se redirecciona a registro
      if ($usuario[0] == NULL) {
        HEADER(REGISTER);
      } else {
        $this->view->Mostrar($usuario);
      }
    }else{
      HEADER(LOGIN);
    }
  }

}

?>
