<?php

include_once __DIR__."/../lib/controller/employeesController.php";

$employeesController = new employeesController();
$employee=$employeesController->searchById($_GET["id"]);
?>
<head>
    <title>informació del treballador</title>
    <link rel="stylesheet" type="text/css" href="employeeInfo.css">
</head>
<ul style="list-style: none">
    <li><img src="<?=$employee->getPhoto();?>"></li>
    <li>Nom y Cognoms: <?=$employee->getName()?></li>
    <li>Data de Naixement: <?=$employee->getDate();?></li>
    <li>Posició: <?=$employee->getPosition();?></li>
    <li>Sou: <?=$employee->getSalary();?>€</li>
    <li><video controls>
      <source src="<?=$employee->getCv();?>" type="video/mp4">
    </video></li>
    <li><form action="index.php">
      <input type="submit" value="Tornar">
    </form></li>
</ul>

