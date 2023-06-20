<?php

require_once('libs/smarty/Smarty.class.php');

class auxiliar_view
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new smarty();
    }

    public function confirmacion($mensaje = null, $gamas, $aceptar, $cancelar)
    {
        $this->smarty->assign('url', URL);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->assign('aceptar', $aceptar);
        $this->smarty->assign('cancelar', $cancelar);
        $this->smarty->assign('title', 'Alerta confirmacion');
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/auxiliar/confirmacion.tpl');
    }


    public function mensaje($mensaje = null, $gamas, $location)
    {
        $this->smarty->assign('url', URL);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->assign('location', $location);
        $this->smarty->assign('title', 'Alerta mensaje');
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/auxiliar/mensaje.tpl');
    }

    public function pc_gama_empty($mensaje = null, $gamas)
    {
        $this->smarty->assign('url', URL);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->assign('title', 'Alerta mensaje');
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/auxiliar/pc_gama_empty.tpl');
    }
    public function UL_pc_gama_empty($mensaje = null, $gamas)
    {
        $this->smarty->assign('url', URL);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->assign('title', 'Alerta mensaje');
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/auxiliar/UL_pc_gama_empty.tpl');
    }

    public function auxiliar_user($mensaje = null)
    {
        $this->smarty->assign('url', URL);
        $this->smarty->assign('title', 'Alerta mensaje');
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/auxiliar/auxiliar_user.tpl');
    }

}