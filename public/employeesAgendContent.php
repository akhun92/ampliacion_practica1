<?php
require_once(__DIR__.'/../lib/controller/employeesController.php');

$employeesController = new employeesController();
$employeeslist = $employeesController->indexAction();
?>

<tr>
  <th>Nom y Cognoms</th>
  <th>Data de naixement</th>
  <th>Posició actual</th>
  <th>Foto</th>
  <th>Sou</th>
  <th>Videocurrículum</th>
  <th>Ver Perfil</th>
</tr>

<?php foreach($employeeslist as $employee){ ?>
  <tr>
    <td><?=$employee->getName();?></td>
    <td><?=$employee->getDate();?></td>
    <td><?=$employee->getPosition();?></td>
    <td><img src="<?=$employee->getPhoto();?>"></td>
    <td><?=$employee->getSalary();?>€</td>
    <td><video controls>
      <source src="<?=$employee->getCv();?>" type="video/mp4">
    </video></td>
    <td><form action="employeeInfo.php">
      <input type="submit" value="Anar al perfil">
      <input type="number" value="<?=$employee->getId();?>" style="display: none" name="id">
    </form></td>
  </tr>
<?php } ?>

