<?php

$controller = "ALUMNO";

if (isset($_GET["controller"])) {
    $controller = strtoupper($_GET["controller"]);

    //cargar error page not found
    if (!file_exists("Controller/" . $controller . "_Controller.php")) {
        $controller = "ALUMNO";
    }
}

include_once "Controller/" . $controller . "_Controller.php";

$action = "SHOWALL";

if (isset($_GET["action"])) {
    $action = strtoupper($_GET["action"]);
    if (!function_exists($action)) {
        $action = "SHOWALL";
    }
}

switch ($action) {
    case "SHOWALL":
        showAll();
        break;
    case "SHOWCURRENT":
        $id = null;
        if (isset($_GET["id"]))
            $id = $_GET["id"];
        showCurrent($id);
        break;
    case "ADD":
        add();
        break;
    default:
        echo "FALTA ACCION";
}
