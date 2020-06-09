<?php

include('config/db_connect.php');

$query = 'SELECT * FROM updates';
$result = mysqli_query($conn, $query);
$updates = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($updates);

mysqli_free_result($result);
mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="stylesheets/index.css">
    <script src="scripts/index.js"></script>
  </head>
  <body>
    <div class="main">
      <div class="main-update">
        <div class="main-update-header">
          <h1>Latest Update</h1>
        </div>
        <div class="main-update-content">
          <?php if (count($updates) == 0) { ?>
            There are no updates yet
          <?php } else { ?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $updates[0]['vid'] ?>"   frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h3><?php echo $updates[0]['title']; ?></h3>
            <div><?php echo $updates[0]['description']; ?></div>
          <?php } ?>
        </div>
      </div>
      <div class="other-updates">
        <div class="other-updates-header">
          <h1>Past Updates</h1>
        </div>
        <div class="other-updates-content">
          <?php if (count($updates) == 0) { ?>
            There are no updates yet
          <?php } else { ?>
            <?php for ($i = 0; $i < count($updates) && $i < 3; $i++) { ?>
              <div id='update-<?php echo $updates[$i]['id']; ?>' class="update-slot <?php if ($i == 0) echo 'active'; ?>" onclick="changeUpdate(<?php echo $updates[$i]['id']; ?>)">
                <div class="thumbnail">
                  <img src="https://img.youtube.com/vi/<?php echo $updates[$i]['vid'] ?>/sddefault.jpg"></img>
                </div>
                <h3><?php echo $updates[$i]['title']; ?></h3>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <?php if (count($updates) != 0) { ?>
          <div class="more-updates">
            <a href="past.php">See more past updates</a>
          </div>
        <?php } ?>
       
      </div>
      
    </div> 
    
  </body>
</html>