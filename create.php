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

  }

}else{
  header("Location: index.php");
}
