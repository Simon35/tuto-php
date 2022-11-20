<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User management</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>User management: Create !</h1>
  <form action="create.php" method="post">
    <fieldset>
      <legend>Create :</legend>
      <mark>
        <?php if (isset($_GET['ms'])) echo $_GET['ms'];
        ?>
      </mark>
      <div>
        <label for="">Name</label>
        <input type="text" name="name" id="">
      </div><br />
      <div>
        <input type="checkbox" name="ismale" id="">
        <label for="">Are you a male ?</label>
      </div><br />
      <input type="submit" value="Create">
      <a href="list.php">View Users</a>
    </fieldset>
  </form>
</body>

</html>