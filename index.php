<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
<?php include ('db.php'); ?>

  <main>
    <?php foreach ($db_dischi as $disco):?>
      <div class="card">
        <img src="<?php echo $disco['poster'] ?>" alt="">
        <h2>
          <?php echo $disco['title'] ?>
        </h2>
        <h3>
          <?php echo $disco['author'] ?>
        </h3>
      </div>
    <?php endforeach; ?>
  </main>


</body>
</html>