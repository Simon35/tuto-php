<?php
if (
  isset($_POST['name']) &&
  isset($_POST['id'])
) {
  include "db_connexion.php";

  $name = $_POST['name'];
  $id = $_POST['id'];
  if (empty($name)) {
    header("Location: update.php?ms=Name is required&id=$id");
    exit;
  } else {
    if (isset($_POST['ismale'])) {
      $ismale = "YES";
    } else {

      $ismale = "NO";
    }
    $sql = "UPDATE user 
            SET name='$name', ismale='$ismale'
            WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
      $ms = "Successfully updated";
      header("Location: update-action.php?ms=$ms&id=$id");
      exit;
    } else {
      $ms = "Unknown error";
      header("Location: update.php?ms=$ms&id=$id");
      exit;
    }
  }
} else {
  header("Location: list.php");
}
