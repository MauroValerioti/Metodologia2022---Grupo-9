<?php
require('libs/Smarty.class.php');

class TurnosView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($usuario, $turnosP, $turnosM, $medicos_S){
    $this->Smarty->assign('turnosP',$turnosP);
    $this->Smarty->assign('turnosM',$turnosM);
    $this->Smarty->assign('medicos_S',$medicos_S);
    $this->Smarty->assign('usuario',$usuario);
    $this->Smarty->display('templates/inicio.tpl');
  }

  function MostrarMedicos($medicos,$usuario){
    $this->Smarty->assign('usuario',$usuario);
    $this->Smarty->assign('medicos',$medicos);
    $this->Smarty->display('templates/medicos.tpl');
  }

}

?>
