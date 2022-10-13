<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CareerView {

    private $smarty;
    private $title;

    function __construct(){
        $this->title = "Lista de carreras";
        $this->smarty  = new Smarty();
    }

    function showCareers($careers) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($careers)); 
        $this->smarty->assign('careers', $careers);

        // mostrar el tpl
        $this->smarty->display('showCareers.tpl');
    }

}