<?php

//require_once "view/gama_view.php";
require_once "model/gama_model.php";
require_once "model/pc_model.php";
require_once "view/pc_view.php";



$pc = new pc_model();

$pcView = new pc_view();

$pcView->viewAllPc($pc->getAllPc());