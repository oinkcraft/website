<?php

include('config/db_connect.php');

$query = 'SELECT * FROM updates';
$result = mysqli_query($conn, $query);
$updates = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="stylesheets/past.css">
  </head>
  <body>
    <div class="main">
      <?php foreach($updates as $update) { ?>
        <div class="update">
          <div class="thumbnail">
            <img src="https://img.youtube.com/vi/<?php echo $update['vid'] ?>/sddefault.jpg"></img>
          </div>
          <div class="update-content"> 
            <h3><?php echo $update['title']; ?></h3>
            <div><?php echo $update['description']; ?></div>
          </div>
        </div>
      <?php } ?>
    </div>
  </body>
</html>