<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include "read-single.php";

    if(mysqli_num_rows($result) > 0) {
      $user = mysqli_fetch_assoc($result);
      //var_dump($user);
      
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User management</title>
</head>
<body>
  <h1>User management !</h1>
  <form action="update-action.php" method="post">
    <fieldset>
      <legend>Edit :</legend>
      <mark>
        <?php if (isset($_GET['ms'])) echo $_GET['ms'];
        ?>
      </mark>
      <div>
        <label for="">Name</label>
        <input 
          type="text" 
          name="name" 
          value="<?= $user['name'] ?>">
      </div><br />

      <input 
        type="text" 
        name="id" 
        id="" 
        value="<?= $user['id'] ?>"
        >
      <div>
        <input 
          type="checkbox" 
          name="ismale" 
          <?php echo ($user['ismale'] == "Yes") ? "checked" : "" ?>>
        <label for="">Are you a male ?</label>
      </div><br />
      <input type="submit" value="Create">
      <a href="read.php">View Users</a>
    </fieldset>
  </form>
</body>
</html>

<?php
  }else {
    header("Location: read.php");
    exit;
  }

}else {
  header("Location: read.php");
  exit;
}
?>