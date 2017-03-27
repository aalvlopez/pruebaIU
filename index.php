<?php
include_once "View/ALUMNO_SHOWALL_View.php";

$db = new PDO("mysql:host=localhost;dbname=iuprueba;port=3306", "root", "");
$sql = "SELECT * FROM alumno";
$stmt = $db->prepare($sql);
$stmt->execute();
$values_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
$field_list = ["nombre", "apellidos", "dni"];

$view = new ALUMNO_SHOWALL_View($field_list, $values_list);

$view->render();