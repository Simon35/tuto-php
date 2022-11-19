<?php

include "db_connexion.php";
$sql = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($connection, $sql);
print_r($result);
?>
