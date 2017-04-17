<?php
include_once "PDOConnection.php";
include_once "Model/ALUMNO_Model.php";

function showAll()
{
    include_once "View/SHOWALL_View.php";
    include_once "View/ALUMNO_SHOWALL_View.php";
    $alumno_model = new ALUMNO_Model();
    $values_list = $alumno_model->getAll();
    $field_list = ["nombre", "apellidos", "dni"];

    $view = new ALUMNO_SHOWALL_View($field_list, $values_list);

    $view->render();
}

function showCurrent($id)
{
    include_once "View/ALUMNO_SHOWCURRENT_View.php";
    if (isset($id) && !is_null($id) && $id !== "") {
        $alumno_model = new ALUMNO_Model();
        $values_list = $alumno_model->getByDNI($id);

        $view = new ALUMNO_SHOWCURRENT_View($values_list);
        $view->render();
    } else {
        echo "FALTA ID";
    }
}

function add()
{
    echo sizeof($_POST);
    include_once "View/ALUMNO_ADD_View.php";
    $view = new ALUMNO_ADD_View();
    $view->render();
}



