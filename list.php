<?php

include "db_connexion.php";
$sql = "SELECT * FROM user ORDER BY id ASC";
$result = mysqli_query($connection, $sql);
//print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List records</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <a href="index.php">Accueil</a>
  <a href="index.php">Create</a><br />
  <?php if (mysqli_num_rows($result)) { ?>
    <table>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Is Male</th>
        <th>Actions</th>
      </tr>
      <?php
      $i = 0;
      while ($users = mysqli_fetch_assoc($result)) {
        $i++;
      ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $users['name'] ?></td>
          <td><?= $users['ismale'] ?></td>
          <td>
            <a href="update.php?id=<?= $users['id'] ?>">Edit</a>
          </td>
        </tr>
      <?php } ?>
    </table><br />
  <?php } else { ?>
    <h1>Empty !</h1>
  <?php } ?>
</body>

</html>