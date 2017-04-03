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
