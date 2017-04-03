<?php
include_once "PDOConnection.php";
include_once "Model/ALUMNO_Model.php";
include_once "View/SHOWALL_View.php";
include_once "View/ALUMNO_SHOWALL_View.php";

$alumno_model = new ALUMNO_Model();
$values_list = [$alumno_model->getByDNI('11122233C')];

$field_list = ["nombre", "apellidos", "dni"];

$view = new ALUMNO_SHOWALL_View($field_list, $values_list);

$alumno_model->addAlumno("11122233D","jose","gonzalez",new DateTime("1991-02-08"),988989898,"una direccion", false);

$view->render();