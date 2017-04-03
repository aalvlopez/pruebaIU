<?php
include_once "PDOConnection.php";
include_once "Model/ASIGNATURA_Model.php";
include_once "View/SHOWALL_View.php";
include_once "View/ASIGNATURA_SHOWALL_View.php";

$asignatura_model = new ASIGNATURA_Model();
$values_list = $asignatura_model->getAll();

$field_list = ["id", "nombre", "num_creditos", "departamento", "categoria"];
$asignatura_view = new ASIGNATURA_SHOWALL_View($field_list, $values_list);

$asignatura_view->render();