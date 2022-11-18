<?php
if(isset($_POST['name']))
{
  include "db_connexion.php";

  $name = $_POST['name'];
  if(empty($name))
  {
    header("Location: index.php?ms=Name is required");
    exit;
  }else{
    if(isset($_POST['ismale']))
    {
      $ismale = "YES";
    }else{
      
      $ismale = "NO";
    }
    $sql = "INSERT INTO user (name, ismale) 
            VALUES ('$name','$ismale')";
    $result = mysqli_query($connection, $sql);

    if ($result)
    {
      $ms= "Successfully created";
      header("Location: index.php?ms=$ms");
      exit;
    }else{
      $ms= "Unknown error";
      header("Location: index.php?ms=$ms");
      exit;
    }
  }

}else{
  header("Location: index.php");
}
